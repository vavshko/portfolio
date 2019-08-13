'use strict';

const gulp = require('gulp'),
	concat = require('gulp-concat'),
	autoprefixer = require('gulp-autoprefixer'),
	cleanCSS = require('gulp-clean-css'),
	del = require('del'),
	browserSync = require('browser-sync').create(),
	reload = browserSync.reload,
	sourcemaps = require('gulp-sourcemaps'),
	sass = require('gulp-sass'),
	changed = require('gulp-changed'),
	imagemin = require('gulp-imagemin'),
	pug = require('gulp-pug'),
	cache = require('gulp-cached'),
	filesize = require('gulp-filesize'),
	lineenc = require('gulp-line-ending-corrector'),
	cssbeautify = require('gulp-cssbeautify'),
	// jpegtran = require('jpegtran-bin'),
	newer = require('gulp-newer');


const sassFiles = [
	// './node_modules/normalize.css/normalize.css',
	'./src/sass/styles.sass',
];

const cssFiles = [
	'./src/css/normalize.css',
];

const pugFiles = [
	'./src/pug/index.pug',
];

const imgSRC = 'src/img/**/*';
const imgDEST = './build/img/';

function pugToHtml() {
	return gulp.src(pugFiles)
		.pipe(pug({
			pretty: true
		}))
		.pipe(cache('./src/pug/**/*.pug'))
		.pipe(gulp.dest('./'));
}

exports.pugToHtml = pugToHtml;


// function sass(){
//     return gulp.src('./src/sass/**/*.scss')
//         .pipe(sass().on('error', sass.logError))
//         .pipe(gulp.dest('./build/css'));
// };

function sassStyles() {
	return gulp.src(sassFiles)
		/* 	.pipe(sourcemaps.init({
				loadMaps: true
			})) */
		.pipe(sass({
			outputStyle: 'compressed'
		}).on('error', sass.logError))
		// .pipe(concat('all.css'))
		.pipe(autoprefixer({
			cascade: false,
			grid: true
		}))

		.pipe(cleanCSS({
			level: 0
		}))
		.pipe(sourcemaps.write('./'))
		.pipe(lineenc())
		.pipe(cssbeautify())
		.pipe(gulp.dest('./build/css/'))
		.pipe(browserSync.stream());
}

function cssStyles() {
	return gulp.src(cssFiles)
		.pipe(gulp.dest('./build/css/'))
}

function scripts() {

}

function images() {
  return gulp.src(imgSRC)
  .pipe(changed(imgDEST))
      .pipe( imagemin([
        imagemin.gifsicle({interlaced: true}),
        imagemin.jpegtran({progressive: true}),
        imagemin.optipng({optimizationLevel: 5})
      ]))
      .pipe( gulp.dest(imgDEST));
}


/* function images() {
	return gulp
		.src('./src/img/*')
		.pipe(newer('./src/img/*'))
		.pipe(
			imagemin([
				imagemin.gifsicle({
					interlaced: true
				}),
				imagemin.jpegtran({
					progressive: true
				}),
				imagemin.optipng({
					optimizationLevel: 5
				}),
				imagemin.svgo({
					plugins: [{
						removeViewBox: false,
						collapseGroups: true
					}]
				})
			])
		)
		.pipe(gulp.dest("../build/img/"));
} */

function watch() {
	browserSync.init({
		server: {
			baseDir: "./",
			open: "false",
		}
	});

	gulp.watch('./*.html').on('change', reload);
	gulp.watch('./src/css/**/*', cssStyles);
	gulp.watch('./src/sass/**/*.sass', sassStyles);
	gulp.watch('./src/pug/**/*.pug', pugToHtml);
	gulp.watch('./src/img/**/*.{jpg,jpeg,png}', images);
}

function clean() {
	return del(['build/*']);
}



exports.sassStyles = sassStyles;
exports.cssStyles = cssStyles;
exports.scripts = scripts;
exports.images = images;
module.exports.watch = watch;

gulp.task('build', gulp.series(clean, gulp.parallel(sassStyles, cssStyles)));
