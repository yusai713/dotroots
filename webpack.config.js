module.exports = {
  // モード値を production に設定すると最適化された状態で、
  // development に設定するとソースマップ有効でJSファイルが出力される
  mode: "development",

  // ローカル開発用環境を立ち上げる
  // 実行時にブラウザが自動的に localhost を開く
  devServer: {
    contentBase: "public",
    open: true // 自動的にブラウザが立ち上がる
  },

  // メインとなるJavaScriptファイル（エントリーポイント）
  entry: './src/js/index.js',

  // babel
  module: {
    rules: [
      {
        // 拡張子 .js の場合
        test: /\.js$/,
        use: [
          {
            // Babel を利用する
            loader: 'babel-loader',
            // Babel のオプションを指定する
            options: {
              presets: [
                // プリセットを指定することで、ES2020 を ES5 に変換
                '@babel/preset-env',
              ]
            }
          }
        ]
      }
    ]
  },

  // ファイルの出力設定
	output: {
		// 出力ファイルのディレクトリ名
    path: `${__dirname}/public/assets/js`,
    // 出力ファイル名
    filename: "bundle.js"
	},

  // ES5(IE11等)向けの指定
	target: ["web", "es5"],
};
