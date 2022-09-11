var gulp = require('gulp');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass')(require('sass'));
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var browserSync = require('browser-sync');



// Path

var paths = {

   // Where the original exists
   'src': './src/',
   'src_scss': './src/scss/',
   'src_js': './src/js',
   'src_image': './src/image',
   'src_helper': './src/helper',
   'src_work': './src/work',
   'src_font': './src/font',

   // Destination
   'dist': './dist',

   // for BrowserSync
   'css': './dist/css/',
   'work': './dist/work/',
   'js': './dist/js/'

}



// SASS

var sassOptions = {
   // 圧縮設定 nested, expanded, compact, compressed
   // outputStyle: 'nested'
}

gulp.task('sass', function () {
   return gulp.src(paths.src_scss + '**/*.scss')
      .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))
      .pipe(sourcemaps.init({ loadMaps: true }))
      .pipe(sass(sassOptions))
      .pipe(autoprefixer())
      .pipe(sourcemaps.write('./'))
      .pipe(gulp.dest(paths.css))
});



// Image

gulp.task('image', function () {
   return gulp.src(paths.src_image + '**/*')
      .pipe(gulp.dest(paths.dist))
});



// Helper

gulp.task('helper', function () {
   return gulp.src(paths.src_helper + '**/*')
      .pipe(gulp.dest(paths.dist))
});



// Work

gulp.task('work', function () {
   return gulp.src(paths.src_work + '**/*')
      .pipe(gulp.dest(paths.dist))
});



// Index

gulp.task('index', function () {
   return gulp.src(paths.src + 'index.php')
      .pipe(gulp.dest(paths.dist))
});



// Font

gulp.task('font', function () {
   return gulp.src(paths.src_font + '**/*')
      .pipe(gulp.dest(paths.dist))
});



// JavaScript

gulp.task('js', function () {
   return gulp.src(paths.src_js + '**/*.js')
      .pipe(plumber())
      // .pipe(uglify())
      // .pipe(rename({extname: '.min.js'}))
      .pipe(gulp.dest(paths.dist));
});



// BrowserSync

gulp.task('browser-sync', () => {
   browserSync({
      server: {
         baseDir: paths.dist
      }
   });
   gulp.watch(paths.dist + "index.php", gulp.series('reload'));
   gulp.watch(paths.work + "**/*", gulp.series('reload'));
   gulp.watch(paths.css + "**/*.css", gulp.series('reload'));
   gulp.watch(paths.js + "**/*.js", gulp.series('reload'));
});
gulp.task('reload', () => {
   browserSync.reload();
});



// watch

gulp.task('watch', function () {
   gulp.watch(paths.src + "index.php", gulp.series('index'));
   gulp.watch(paths.src_scss + "**/*.scss", gulp.series('sass'));
   gulp.watch(paths.src_js + "**/*.js", gulp.series('js'));
});



// gulp

gulp.task('default', gulp.series('sass', 'image', 'helper', 'work', 'index', 'font', 'js'));
