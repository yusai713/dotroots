/*
	参考記事：
	https://flex-box.net/gulp/
*/

// 直列処理(順番に処理):series(), 並列処理（順番を問わない）:parallel()
const { src, dest, watch, series, parallel } = require("gulp");
const sass = require('gulp-sass');// Sassコンパイル
const plumber = require('gulp-plumber');// エラー時の強制終了を防止
const notify = require('gulp-notify');// エラー発生時にデスクトップ通知する
const postcss = require('gulp-postcss');// autoprefixerとセット
const autoprefixer = require('autoprefixer');// ベンダープレフィックス付与
const cssdeclsort = require('css-declaration-sorter');// css並べ替え
const sassGlob = require('gulp-sass-glob'); // @importの記述を簡潔にする
const browserSync = require('browser-sync');
const gcmq = require('gulp-group-css-media-queries'); // media queryを纏める
const mode = require('gulp-mode')({
  modes: ['production', 'development'], // 本番実装時は 'gulp --production'
  default: 'development',
  verbose: false,
})

const webpack = require("webpack");
const webpackStream = require("webpack-stream"); // gulpでwebpackを使うために必要なプラグイン
const webpackConfig = require("./webpack.config");// webpackの設定ファイルの読み込み

const srcPath = {
	scss: './src/scss/**/*.scss',
	js: './src/js/**/*.js'
}
const destPath = {
	css: './public/assets/css/',
	js: './public/assets/js/',
	php: './public/**/*.php'
}

const compileSass = done => {
  const postcssPlugins = [
    autoprefixer({
    // browserlistはpackage.jsonに記載[推奨]
    cascade: false,
    // grid: 'autoplace' // IE11のgrid対応('-ms-')
    }),
    cssdeclsort({ order: 'alphabetical' /* smacss, concentric-css */ })
  ]

  src(srcPath.scss, { sourcemaps: true  /* init */})
  .pipe(plumber())
  .pipe(sassGlob())
  .pipe(sass({outputStyle: 'expanded'}))
  .pipe(postcss(postcssPlugins))
  .pipe(mode.production(gcmq()))
  .pipe(dest(destPath.css, { sourcemaps: './sourcemaps' /* write */ }));
  done(); // 終了宣言
}

// ローカルサーバ起動
const buildServer = done => {
  browserSync.init({
		notify: false,

    // 動的サイト
    files: [destPath.php],
		proxy: 'https://test.local/',
		open: true,
    watchOptions: {
      debounceDelay: 1000  //1秒間、タスクの再実行を抑制
		},
		reloadOnRestart: true,
		// 静的サイト
    // server: {
    	// baseDir: './public/',
    // },
  })
  done()
}

// ブラウザ自動リロード
const browserReload = done => {
  browserSync.reload()
  done()
}

// webpack
const bundleJs = () => {
  // webpackStreamの第2引数にwebpackを渡す
  return webpackStream(webpackConfig, webpack)
    .pipe(dest(destPath.js));
};

// ファイル監視
const watchFiles = () => {
  watch(srcPath.scss, series(compileSass, browserReload))
	watch(srcPath.js, series(bundleJs, browserReload))
	watch(destPath.php, browserReload)
}

exports.default = parallel(buildServer, watchFiles);
exports.sass = compileSass;// gulp sass --production 用の記述
