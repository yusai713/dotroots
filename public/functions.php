<?php

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


//サイト名とページタイトルの区切り文字変更
function change_title_separator($separator)
{
	$separator = '|';
	return $separator;
}
add_filter('document_title_separator', 'change_title_separator');


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

//スマホ表示分岐
function is_mobile()
{
	$useragents = array(
		'iPhone', // iPhone
		'iPod', // iPod touch
		'Android.*Mobile', // 1.5+ Android *** Only mobile
		'Windows.*Phone', // *** Windows Phone
		'dream', // Pre 1.5 Android
		'CUPCAKE', // 1.5+ Android
		'blackberry9500', // Storm
		'blackberry9530', // Storm
		'blackberry9520', // Storm v2
		'blackberry9550', // Storm v2
		'blackberry9800', // Torch
		'webOS', // Palm Pre Experimental
		'incognito', // Other iPhone browser
		'webmate' // Other iPhone browser

	);
	$pattern = '/' . implode('|', $useragents) . '/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
