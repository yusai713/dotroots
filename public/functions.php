<?php

//初期設定
function my_setup()
{
	//タイトルタグ
	add_theme_support('title-tag');
	//RSSフィード
	add_theme_support('automatic-feed-links');
	//アイキャッチ
	add_theme_support('post-thumbnails', array('post', 'page')); //カスタムフィールドがあれば後に続ける
	//HTML5マークアップの使用許可
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
	//ナビゲーションの追加
	register_nav_menus(array(
		'global' => 'グローバルメニュー',
		'drawer' => 'ドロワーメニュー',
		'footer' => 'フッターメニュー',
	));
}
add_action('after_setup_theme', 'my_setup');


//css・jsの読み込み指定
function my_scripts()
{
	// WordPress本体のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	//jsを読み込み
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '', true);
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick/slick.min.js', array('jquery'), '', true);
	wp_enqueue_script('bundle', get_template_directory_uri() . '/assets/js/bundle.js', array('jquery'), '', true);
	//cssを読み込み
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.9.0/css/all.css', array());
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/js/slick/slick.css', array());
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/js/slick/slick-theme.css', array());
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array());
	wp_enqueue_style('sub', get_template_directory_uri() . '/style.css', array('main'));
}
add_action('wp_enqueue_scripts', 'my_scripts');


//サイト名とページタイトルの区切り文字変更
function change_title_separator($separator)
{
	$separator = '|';
	return $separator;
}
add_filter('document_title_separator', 'change_title_separator');


//アイキャッチ設定
add_image_size('eyecatch', 800, 460, true);


//サイドバー有効化
function my_widgets()
{
	register_sidebar(array(
		'name'          => 'サイドバー',
		'id'            => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	));
}
add_action('widgets_init', 'my_widgets');


// ページネーション設定
function the_pagination()
{
	global $wp_query;
	$bignum = 999999999;
	if ($wp_query->max_num_pages <= 1)
		return;
	echo '<nav class="pagination">';
	echo paginate_links(array(
		'base'         => str_replace($bignum, '%#%', esc_url(get_pagenum_link($bignum))),
		'format'       => '',
		'current'      => max(1, get_query_var('paged')),
		'total'        => $wp_query->max_num_pages,
		'prev_text'    => ' ',
		'next_text'    => ' ',
		'type'         => 'list',
		'end_size'     => 3,
		'mid_size'     => 3
	));
	echo '</nav>';
}


//OGP設定
function my_meta_ogp()
{
	if (is_front_page() || is_home() || is_singular()) {

		/*初期設定*/

		// 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
		$ogp_image = '<?php echo get_template_directory_uri(); ?>/assets/screenshot.jpg';
		// Twitterのアカウント名 (@xxx)
		$twitter_site = '@dotroots_uruma';
		// Twitterカードの種類（summary_large_image または summary を指定）
		$twitter_card = 'summary_large_image';
		// Facebook APP ID
		$facebook_app_id = '289021765900329';

		/*初期設定 ここまで*/

		global $post;
		$ogp_title = '';
		$ogp_description = '';
		$ogp_url = '';
		$html = '';
		if (is_singular()) {
			// 記事＆固定ページ
			setup_postdata($post);
			$ogp_title = $post->post_title;
			$ogp_description = mb_substr(get_the_excerpt(), 0, 100);
			$ogp_url = get_permalink();
			wp_reset_postdata();
		} elseif (is_front_page() || is_home()) {
			// トップページ
			$ogp_title = get_bloginfo('name');
			$ogp_description = get_bloginfo('description');
			$ogp_url = home_url();
		}

		// og:type
		$ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';

		// og:image
		if (is_singular() && has_post_thumbnail()) {
			$ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
			$ogp_image = $ps_thumb[0];
		}

		// 出力するOGPタグをまとめる
		$html = "\n";
		$html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
		$html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
		$html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
		$html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
		$html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
		$html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
		$html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
		$html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
		$html .= '<meta property="og:locale" content="ja_JP">' . "\n";

		if ($facebook_app_id != "") {
			$html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
		}

		echo $html;
	}
}
// headタグ内にOGPを出力する
add_action('wp_head', 'my_meta_ogp');
