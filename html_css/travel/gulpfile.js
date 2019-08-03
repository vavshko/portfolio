const gulp = require('gulp');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const del = require('del');
const browserSync = require('browser-sync').create();
const reload = browserSync.reload;

const cssFiles = [
    './node_modules/normalize.css/normalize.css',
    './src/css/test.css',
];

function styles(){
    return gulp.src(cssFiles)
        .pipe(concat('all.css'))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(cleanCSS({
            level: 0
        }))
        .pipe(gulp.dest('./build/css/'))
        .pipe(browserSync.stream());
}

function scripts(){

}

function watch(){
    browserSync.init({
        server: {
            baseDir: "./",
        }
    });

    gulp.watch('./*.html').on('change', reload);
    gulp.watch('./src/css/**/*', styles);
}

function clean(){
    return del(['build/*']);
}

gulp.task('styles', styles);
gulp.task('scripts', scripts);

module.exports.watch = watch;

gulp.task('build', gulp.series(clean, gulp.parallel(styles)));