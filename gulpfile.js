/**
 * HISTUDY – FINAL GULP CONFIG (PHP + API + ASSETS + LIVE RELOAD)
 */

const gulp = require("gulp");
const clean = require("gulp-clean");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const fileInclude = require("gulp-file-include");
const browserSync = require("browser-sync").create();

/* =========================
   PATHS
========================= */

const paths = {
  php: "src/*.php",
  partials: "src/partials/**/*.php",
  api: "src/api/**/*.php",
  config: "src/config/**/*",

  scss: "src/assets/scss/**/*.scss",
  vendorCss: "src/assets/css/vendor/**/*.css",
  pluginCss: "src/assets/css/plugins/**/*.css",

  mainJs: "src/assets/js/main.js",
  vendorJs: "src/assets/js/vendor/**/*.js",
  pluginJs: "src/assets/js/plugins/**/*.js",
  apiJs: "src/assets/js/api/**/*.js",

  images: "src/assets/images/**/*",
  fonts: "src/assets/fonts/**/*",
  videos: "src/assets/videos/**/*",

  dest: "dest",
};

/* =========================
   ERROR HANDLER
========================= */

function errorHandler(title) {
  return plumber({
    errorHandler: notify.onError({
      title: title,
      message: "<%= error.message %>",
    }),
  });
}

/* =========================
   CLEAN
========================= */

function cleanDest() {
  return gulp.src(paths.dest, { allowEmpty: true }).pipe(clean());
}

/* =========================
   PHP (PAGES + PARTIALS)
========================= */

function php() {
  return gulp
    .src(paths.php)
    .pipe(errorHandler("PHP Error"))
    .pipe(fileInclude({ basepath: "src/partials" }))
    .pipe(gulp.dest(paths.dest));
}

/* =========================
   API (PHP)
========================= */

function api() {
  return gulp
    .src(paths.api)
    .pipe(errorHandler("API Error"))
    .pipe(gulp.dest("dest/api"));
}

/* =========================
   CONFIG FILES
========================= */

function configFiles() {
  return gulp
    .src(paths.config)
    .pipe(gulp.dest("dest/config"));
}

/* =========================
   SCSS → CSS
========================= */

function scss() {
  return gulp
    .src(paths.scss)
    .pipe(errorHandler("SCSS Error"))
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(sourcemaps.write("../maps"))
    .pipe(gulp.dest("dest/assets/css"))
    .pipe(browserSync.stream());
}

function vendorCss() {
  return gulp
    .src(paths.vendorCss)
    .pipe(gulp.dest("dest/assets/css/vendor"))
    .pipe(browserSync.stream());
}

function pluginCss() {
  return gulp
    .src(paths.pluginCss)
    .pipe(gulp.dest("dest/assets/css/plugins"))
    .pipe(browserSync.stream());
}

/* =========================
   JS
========================= */

function mainJs() {
  return gulp
    .src(paths.mainJs)
    .pipe(gulp.dest("dest/assets/js"))
    .pipe(browserSync.stream());
}

function vendorJs() {
  return gulp
    .src(paths.vendorJs)
    .pipe(gulp.dest("dest/assets/js/vendor"))
    .pipe(browserSync.stream());
}

function pluginJs() {
  return gulp
    .src(paths.pluginJs)
    .pipe(gulp.dest("dest/assets/js/plugins"))
    .pipe(browserSync.stream());
}

function apiJs() {
  return gulp
    .src(paths.apiJs)
    .pipe(gulp.dest("dest/assets/js/api"))
    .pipe(browserSync.stream());
}

/* =========================
   ASSETS
========================= */

function images() {
  return gulp.src(paths.images).pipe(gulp.dest("dest/assets/images"));
}

function fonts() {
  return gulp.src(paths.fonts).pipe(gulp.dest("dest/assets/fonts"));
}

function videos() {
  return gulp.src(paths.videos).pipe(gulp.dest("dest/assets/videos"));
}

/* =========================
   BUILD
========================= */

const build = gulp.series(
  cleanDest,
  php,
  api,
  configFiles,
  scss,
  vendorCss,
  pluginCss,
  mainJs,
  vendorJs,
  pluginJs,
  apiJs,
  images,
  fonts,
  videos
);

/* =========================
   LIVE SERVER
========================= */

function serve() {
  browserSync.init({
    proxy: "http://localhost:8000",
    open: true,
    notify: false,
  });

  gulp.watch([paths.php, paths.partials], gulp.series(php, browserSync.reload));
  gulp.watch(paths.api, gulp.series(api, browserSync.reload));
  gulp.watch(paths.config, gulp.series(configFiles, browserSync.reload));

  gulp.watch(paths.scss, scss);
  gulp.watch(paths.vendorCss, vendorCss);
  gulp.watch(paths.pluginCss, pluginCss);

  gulp.watch(paths.mainJs, mainJs);
  gulp.watch(paths.vendorJs, vendorJs);
  gulp.watch(paths.pluginJs, pluginJs);
  gulp.watch(paths.apiJs, apiJs);

  gulp.watch(paths.images, gulp.series(images, browserSync.reload));
  gulp.watch(paths.fonts, gulp.series(fonts, browserSync.reload));
  gulp.watch(paths.videos, gulp.series(videos, browserSync.reload));
}

/* =========================
   EXPORTS
========================= */

exports.build = build;
exports.serve = gulp.series(build, serve);
exports.default = build;
