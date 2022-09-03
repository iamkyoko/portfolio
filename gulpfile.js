var gulp         = require('gulp');
var notify       = require("gulp-notify");
var plumber      = require("gulp-plumber");
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uglify       = require('gulp-uglify');
var browserSync  = require("browser-sync");


// Path

var paths = {
    'html'   : './dist/',
    'scss'   : './src/scss/',
    'css'    : './dist/css/',
    'jsSrc'  : './src/js/',
    'jsDist' : './dist/js/'
  }


// SASS

var sassOptions = {

    //圧縮設定 nested, expanded, compact, compressed
    outputStyle: 'compressed'

    }

    gulp.task('sass', function () {
        gulp.src(paths.scss + '**/*.scss')
        .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))
        .pipe(sass(sassOptions))
        .pipe(autoprefixer())
        .pipe(gulp.dest(paths.css))

});


// JavaScript

    //JS圧縮
    gulp.task('js', function () {
        gulp.src(paths.jsSrc + '**/*.js')
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest(paths.jsDist));
    });


// BrowserSync

gulp.task('browser-sync', () => {
    browserSync({
      server: {
        baseDir: paths.html
      }
    });
    gulp.watch(paths.html + "**/*.html", ['reload']);
    gulp.watch(paths.css + "**/*.css", ['reload']);
    gulp.watch(paths.jsDist + "**/*.js", ['reload']);
  });
  gulp.task('reload', () => {
    browserSync.reload();
});


// watch

gulp.task('watch', function () {
    gulp.watch(paths.scss + '**/*.scss', gulp.series('sass'));
    gulp.watch(paths.jsSrc + '**/*.js', gulp.series('js'));
});


gulp.task('default', gulp.series('browser-sync', 'watch'));