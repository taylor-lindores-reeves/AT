const path = require("path"),
  settings = require("./settings");

module.exports = {
  entry: {
    main: settings.themeLocation + "js/scripts.js"
  },
  mode: "development",
  devtool: "cheap-module-source-map",
  output: {
    path: path.resolve(__dirname, settings.themeLocation + "js"),
    filename: "[name]-bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: [
                [
                  "env",
                  { targets: { browsers: ["last 2 versions"] }, debug: true }
                ]
              ]
            }
          }
        ],
        exclude: /node_modules/
      }
    ]
  }
};
