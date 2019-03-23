let gulp = require('gulp'),
    importCss = require('gulp-import-css'),
    cleanCSS = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    watch = require('gulp-watch');

function generateCatalog () {
  return gulp.src('css/catalog.css')
                .pipe(importCss())
                .pipe(autoprefixer({
                  browsers: ['last 2 versions'],
                  cascade: false
                }))
                .pipe(cleanCSS({level: 2}))
                .pipe(gulp.dest('css/dist'));
}

function generateMain () {
  return gulp.src('css/main.css')
                .pipe(importCss())
                .pipe(autoprefixer({
                  browsers: ['last 2 versions'],
                  cascade: false
                }))
                .pipe(cleanCSS({level: 2}))
                .pipe(gulp.dest('css/dist'));
}

function generateProduct () {
  return gulp.src('css/product.css')
                .pipe(importCss())
                .pipe(autoprefixer({
                  browsers: ['last 2 versions'],
                  cascade: false
                }))
                .pipe(cleanCSS({level: 2}))
                .pipe(gulp.dest('css/dist'));
}

function watchChanes () {
  gulp.watch('css/blocks/*/*.css', gulp.series('style'));
  gulp.watch('css/blocks/*/*.css', gulp.series('styleMain'));
  gulp.watch('css/blocks/*/*.css', gulp.series('styleProduct'));
}
// задание на выполнение 
gulp.task('style', generateCatalog);
gulp.task('styleMain', generateMain);
gulp.task('styleProduct', generateProduct);
// задание на отслеживание
gulp.task('watch', watchChanes);

