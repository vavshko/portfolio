'use strict';

const   gulp = require('gulp'),
		concat = require('gulp-concat'),
		autoprefixer = require('gulp-autoprefixer'),
		cleanCSS = require('gulp-clean-css'),
		del = require('del'),
		browserSync = require('browser-sync').create(),
		reload = browserSync.reload,
		sourcemaps = require('gulp-sourcemaps'),
		sass = require('gulp-sass'),
		changed = require('gulp-changed'),
		imagemin= require('gulp-imagemin'),
		pug = require('gulp-pug'),
		cache = require('gulp-cached'),
		filesize = require('gulp-filesize'),
		lineenc = require('gulp-line-ending-corrector');

const cssFiles = [
	// './node_modules/normalize.css/normalize.css',
	// './src/css/test.css',
	'./src/sass/styles.sass',
	'./src/sass/styles1.sass',
];

const pugFiles = [
	'./src/pug/index.pug',
	'./src/pug/test.pug',
];

function pugToHtml(){
	return gulp.src(pugFiles)
		.pipe(pug({
			pretty: true
		}))
		.pipe(cache('./src/pug/**/*.pug'))
		.pipe(gulp.dest('./build/'));
		}

exports.pugToHtml = pugToHtml;


// function sass(){
//     return gulp.src('./src/sass/**/*.scss')
//         .pipe(sass().on('error', sass.logError))
//         .pipe(gulp.dest('./build/css'));
// };

function styles(){
	return gulp.src(cssFiles)
		.pipe(sourcemaps.init({
			loadMaps: true
		}))
		.pipe(sass({
			outputStyle: 'expanded'
		}).on('error', sass.logError))
		.pipe(concat('all.css'))
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(cleanCSS({
			level: 0
		}))
		.pipe(sourcemaps.write('./'))
		.pipe(lineenc())
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
	gulp.watch('./src/sass/**/*.sass', styles);
	gulp.watch('./src/pug/**/*.pug', pugToHtml);
	gulp.watch('./src/img', imgmin);
}

function clean(){
	return del(['build/*']);
}

function imgmin(){
	return gulp.scr('./src/img')
	.pipe(cache('./build/img'))
	.pipe(imagemin({
		imagemin: jpegtran({progrresive: true}),
		imagemin: optipng({optimizationLevel: 5})
	}))
	.pipe(gulp.dest('./build/img/'))
}

exports.styles = styles;
exports.scripts = scripts;
exports.imgmin = imgmin;
module.exports.watch = watch;

gulp.task('build', gulp.series(clean, gulp.parallel(styles)));