const path = require("path");

module.exports = {
  mode: "production",

  entry: {
    plugins: "./src/js/plugins/plugins.js",
    gallery: "./src/js/plugins/gallery.js",
  },

  output: {
    clean: true,
    filename: "[name].js",
    path: path.resolve(__dirname, "js"),
  },


  module: {
    rules: [
      {
        test: /\.(s[ac]|c)ss$/i,
        use: [
          "style-loader",
          "css-loader",
          "postcss-loader",
          {
            loader: "sass-loader",
            options: {
              sourceMap: true,
            },
          },
        ],
      },
      {
        test: /\.m?js$/,
        exclude: /node_modules/,
        use: "babel-loader",
      },
    ],
  },
};
