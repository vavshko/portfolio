'use strict';

const gulp = require('gulp');
// const stylus = require('gulp-stylus');
const less = require('gulp-less');
const path = require('path');
// const concat = require('gulp-concat');
const debug = require('gulp-debug');
const sourcemaps = require('gulp-sourcemaps');
const del = require('del');
const newer = require('gulp-newer');
const browserSync = require('browser-sync').create();
const notify = require('gulp-notify');
const plumber = require('gulp-plumber');
const bootlint = require('gulp-bootlint');
const autoprefixer = require('gulp-autoprefixer');
const postcss = require('gulp-postcss');

gulp.task('css', function(){
    return gulp.src(['frontend/**/*.less', '!frontend/css/lesshat.less'])
        .pipe(plumber({
            errorHandler: notify.onError(function(err) {
                return {
                    title: 'CSS Folder',
                    message: err.message,
                    icon: false,
                    sound: false
                };
            })
        }))
        .pipe(newer('public'))
        .pipe(sourcemaps.init())
        .pipe(debug({title:'sourcemaps'}))
        .pipe(less())
        .pipe(debug({title:'less'}))
        // .pipe(concat('all.css'))
        // .pipe(debug({title:'concat'}))
        .pipe(autoprefixer({
            browsers: ['last 4 versions']
        }))
        .pipe(gulp.dest('public'))
        .pipe(debug({title:'autoprefixer'}))
        .pipe(sourcemaps.write())
        .pipe(debug({title:'sourcemaps'}))
        .pipe(gulp.dest('public'));
});

gulp.task('clean', function(){
    return del('public');
});

gulp.task('less', function () {
    return gulp.src(['frontend/**/*.less', '!frontend/css/lesshat.less'])
        .pipe(less({
            paths: [ path.join(__dirname, 'less', 'includes') ]
        }))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('assets', function(){
    return gulp.src('frontend/assets/**', {since: gulp.lastRun('assets')})
        .pipe(debug({title:'assets'}))
        .pipe(gulp.dest('public/assets'));
});

gulp.task('fonts', function(){
    return gulp.src('frontend/fonts/**', {since: gulp.lastRun('fonts')})
        .pipe(debug({title:'fonts'}))
        .pipe(gulp.dest('public/fonts'));
});

gulp.task('libs', function(){
    return gulp.src('frontend/libs/**/*.*', {since: gulp.lastRun('libs')})
        .pipe(debug({title:'libs'}))
        .pipe(gulp.dest('public/libs'));
});

gulp.task('index', function(){
    return gulp.src(['frontend/**.html','frontend/**.css'])
        .pipe(debug({title:'index'}))
        .pipe(gulp.dest('public'));
});

gulp.task('bootlint', function() {
    return gulp.src('frontend/index.html')
        .pipe(bootlint());
});

gulp.task('build', gulp.series(
    'clean',
    gulp.parallel('css', 'assets'))
);

gulp.task('watch', function(){
    gulp.watch('frontend/css/**/*.*', gulp.series('css'));
    gulp.watch('frontend/assets/**/*.*', gulp.series('assets'));
    gulp.watch('frontend/libs/**/*.*', gulp.series('libs'));
    gulp.watch('frontend/index.html', gulp.series('index'));
    gulp.watch('frontend/fonts', gulp.series('fonts'));
});

gulp.task('serve', function(){
    browserSync.init({
        server: {
            baseDir: "./public"
        },
        host: 'localhost',
        port: 3000
    });

    browserSync.watch('public/**/*.*').on('change', browserSync.reload);
});

gulp.task('dev', gulp.series('build','index','libs','fonts','bootlint', gulp.parallel('watch', 'serve')));