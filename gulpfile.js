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
  'src': './src/',
  'html': './dist/work/',
  'scss': './src/scss/',
  'srcImage': './src/images',
  'srcHelper': './src/helper',
  'srcWork': './src/work',
  'srcFonts': './src/font',
  'dist': './dist',
  'css': './dist/css/',
  'jsSrc': './src/js/',
  'jsDist': './dist/js/'
}


// SASS
var sassOptions = {
  //圧縮設定 nested, expanded, compact, compressed
  // outputStyle: 'nested'
}

gulp.task('sass', function () {
  return gulp.src(paths.scss + '**/*.scss')
    .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(sass(sassOptions))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.css))
});

// Images

gulp.task('images', function () {
  return gulp.src(paths.srcImage + '**/*.jpg')
    .pipe(gulp.dest(paths.dist))
});

// Helper files

gulp.task('helpers', function () {
  return gulp.src(paths.srcHelper + '**/*')
    .pipe(gulp.dest(paths.dist))
});

// Work files

gulp.task('work', function () {
  return gulp.src(paths.srcWork + '**/*')
    .pipe(gulp.dest(paths.dist))
});

// Index file

gulp.task('index', function () {
  return gulp.src(paths.src + 'index.php')
    .pipe(gulp.dest(paths.dist))
});

// Font files

gulp.task('fonts', function () {
  return gulp.src(paths.srcFonts + '**/*')
    .pipe(gulp.dest(paths.dist))
});

// JavaScript

//JS圧縮
gulp.task('js', function () {
  return gulp.src(paths.jsSrc + '**/*.js')
    .pipe(plumber())
    .pipe(uglify())
    // .pipe(rename({extname: '.min.js'}))
    .pipe(gulp.dest(paths.jsDist));
});


// BrowserSync

gulp.task('browser-sync', () => {
  browserSync({
    server: {
      baseDir: paths.html
    }
  });
  gulp.watch(paths.html + "**/*.html", gulp.series('reload'));
  gulp.watch(paths.css + "**/*.css", gulp.series('reload'));
  gulp.watch(paths.jsDist + "**/*.js", gulp.series('reload'));
});
gulp.task('reload', () => {
  browserSync.reload();
});


// watch

gulp.task('watch', function () {
  gulp.watch(paths.scss + '**/*.scss', gulp.series('sass'));
  gulp.watch(paths.jsSrc + '**/*.js', gulp.series('js'));
});


gulp.task('default', gulp.series('sass', 'js', 'images', 'helpers', 'work', 'fonts', 'index'));

