var gulp = require("gulp"),
  settings = require("./settings"),
  webpack = require("webpack"),
  browserSync = require("browser-sync").create(),
  postcss = require("gulp-postcss"),
  concat = require("gulp-concat"),
  cleanCss = require("gulp-clean-css"),
  minify = require("gulp-minify"),
  rgba = require("postcss-hexrgba"),
  autoprefixer = require("autoprefixer"),
  cssvars = require("postcss-simple-vars"),
  nested = require("postcss-nested"),
  cssImport = require("postcss-import"),
  mixins = require("postcss-mixins"),
  colorFunctions = require("postcss-color-function");

gulp.task("styles", function() {
  return gulp
    .src(settings.themeLocation + "css/style.css")
    .pipe(
      postcss([
        cssImport,
        mixins,
        cssvars,
        nested,
        rgba,
        colorFunctions,
        autoprefixer
      ])
    )
    .pipe(concat("style.css"))
    .pipe(minify())
    .pipe(cleanCss())
    .pipe(gulp.dest(settings.themeLocation));
});

gulp.task("scripts", function(callback) {
  webpack(require("./webpack.config.js"), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    callback();
  });
});

gulp.task("watch", function() {
  browserSync.init({
    notify: false,
    ghostMode: false,
    proxy: "localhost:8000"
  });

  gulp.watch("./**/*.php", function() {
    browserSync.reload();
  });
  gulp
    .watch(settings.themeLocation + "css/**/*.css", ["styles"])
    .on("change", browserSync.reload);
  gulp.watch(
    [
      settings.themeLocation + "js/modules/*.js",
      settings.themeLocation + "js/scripts.js"
    ],
    ["waitForScripts"]
  );
});

gulp.task("waitForScripts", ["scripts"], function() {
  browserSync.reload();
});
