/* eslint-disable indent */
/* eslint-disable no-unused-vars */
const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const FaviconsWebpackPlugin = require("favicons-webpack-plugin");
const ImageMinimizerPlugin = require("image-minimizer-webpack-plugin");
const CopyPlugin = require("copy-webpack-plugin");
const isDev = process.env.NODE_ENV !== "production";

module.exports = {
   target: isDev ? "web" : "browserslist",
   devtool: isDev ? "eval-cheap-source-map" : undefined,
   entry: {
      app: path.resolve(__dirname, "./src/app.js"),
   },
   output: {
      path: path.resolve(__dirname, "./dist"),
      filename: isDev ? "[name].[contenthash].js" : "[name].min.js",
      clean: true,
   },
   resolve: {
      extensions: [".js", ".json", ".scss", ".css"],
      alias: {
         Root: path.resolve(__dirname, "./src"),
         Assets: path.resolve(__dirname, "./src/assets"),
         Components: path.resolve(__dirname, "./src/components"),
      },
   },
   cache: {
      type: "filesystem",
      cacheDirectory: path.resolve(__dirname, ".cache"),
      idleTimeoutAfterLargeChanges: 3000,
      maxAge: 172800000,
      maxMemoryGenerations: isDev ? 5 : Infinity,
      memoryCacheUnaffected: true,
   },
   optimization: {
      splitChunks: {
         cacheGroups: {
            styles: {
               name: "styles",
               type: "css/mini-extract",
               chunks: "all",
               enforce: true,
            },
         },
      },
      minimizer: [
         "...",
         new ImageMinimizerPlugin({
            test: /\.(jpe?g|png|gif)$/i,
            exclude: /(node_modules|bower_components)/,
            minimizer: {
               implementation: ImageMinimizerPlugin.imageminMinify,
               options: {
                  plugins: [
                  ["gifsicle", { interlaced: true, optimizationLevel: 2}],
                  ["mozjpeg", { quality: 50, progressive: true }],
                  ["optipng", { optimizationLevel: 5 }],
                  ["optipng", { optimizationLevel: 5 }],
               ],
             },
           },
         }),
      ],
   },
   performance: {
      hints: false,
      maxAssetSize: 100000,
      maxEntrypointSize: 400000,
   },
   devServer: {
      static: {
         directory: path.join(__dirname, "./dist"),
      },
      devMiddleware: {
         serverSideRender: false,
         writeToDisk: false,
      },
      server: "http",
      compress: false,
      http2: false,
      https: false,
      port: 5500,
      open: true,
      hot: true,
      liveReload: false,
   },
   externals: {
      jquery: "jQuery",
   },
   plugins: [
      new HtmlWebpackPlugin({
         filename: "index.html",
         template: path.resolve(__dirname, "./src/pages/index.html"),
         inject: "body",
         scriptLoading: "blocking",
         xhtml: false,
      }),
      new MiniCssExtractPlugin({
         filename: isDev ? "style.css" : "style.css",
         linkType: "text/css",
      }),
      new FaviconsWebpackPlugin({
         logo: "./src/assets/img/png/favicon.png",
         cache: true,
         mode: "auto",
         publicPath: "./assets/static",
         outputPath: "./assets/static",
         prefix: "",
         inject: true,
         favicons: {
            appName: "example",
            appDescription: "example",
            developerName: "example",
            appShortName: "example",
            developerURL: "example",
            display: "standalone",
            background: "#fff",
            theme_color: "#fff",
            lang: "en-US",
            start_url: "/",
            icons: {
               android: true,
               appleIcon: false,
               appleStartup: false,
               favicons: true,
               windows: true,
               yandex: false,
            },
         },
      }),
      new CopyPlugin({
         patterns: [
            {
               from: "./src/other/screenshot.png",
               toType: "dir",
               force: true,
            },
            {
               from: "./src/other/functions.php",
               toType: "dir",
               force: true,
            },
            {
               from: "./src/assets/img/svg/sprite.svg",
               to: "assets/img/",
               toType: "dir",
               force: true,
            },
         ],
      }),
   ],
   module: {
      rules: [
         {  // Start Babel
            test: /\.(js|jsx)$/,
            include: path.resolve(__dirname, "./src"),
            exclude: /(node_modules|bower_components)/,
            use: isDev ? undefined : {
               loader: "babel-loader",
               options: {
                  presets: ["@babel/preset-env"]
               }
            }
         }, // End Babel

         {  // Start Html
            test: /\.html$/i,
            exclude: /(node_modules|bower_components)/,
            include: path.resolve(__dirname, "./src"),
            loader: "html-loader",
            options: {
               minimize: isDev ? false : false,
              },
         }, // End Html

         {  // Start Scss
            test: /\.s[ac]ss$/i,
            exclude: /(node_modules|bower_components)/,
            include: path.resolve(__dirname, "./src"),
            use: [
               isDev ? "style-loader" : MiniCssExtractPlugin.loader, "css-loader", "postcss-loader", "sass-loader",
            ],
         }, // End Scss

         {  // Start IMG
            test: /\.(jpg|png|svg|jpeg|gif|webp)$/,
            exclude: /(node_modules|bower_components)/,
            include: path.resolve(__dirname, "./src"),
            type: "asset/resource",
            generator: {
               filename: isDev ? "assets/img/[contenthash][ext]" : "assets/img/[name][ext]",
            },
         }, // End IMG


         {  // Start Fonts
            test: /\.(eot|ttf|woff|woff2)$/i,
            exclude: /(node_modules|bower_components)/,
            include: path.resolve(__dirname, "./src"),
            type: "asset/resource",
            generator: {
               filename: "assets/fonts/[name][ext]",
            },
         }, // End Fonts
      ],
   },
};
