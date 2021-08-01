const {src, dest, parallel, series, watch} = require('gulp')
const browserSync = require('browser-sync').create()
const concat = require('gulp-concat')
const uglify = require('gulp-uglify-es').default
const sass = require('gulp-dart-sass')
const autoprefixer = require('gulp-autoprefixer')
const clean_css = require('gulp-clean-css')
const imagemin = require('gulp-imagemin')
const newer = require('gulp-newer')
const del = require('del')

function browser_sync () {
	browserSync.init({
		proxy: {
			target: 'http://html/app/'
		},
		notify: false,
		online: false
	})
}

function styles () {
	return src([
		'app/lib/normalize.css',
		'app/lib/bootstrap.min.css',
		'app/lib/jquery-ui.min.css',
		'app/lib/owl.carousel.min.css',
		'app/scss/main.sass',
		'app/scss/media-mobile.sass'
	])
		.pipe(sass())
		.pipe(concat('app.min.css'))
		.pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'], grid: true }))
		.pipe(clean_css({ level: { 1: { specialComments: 0 } }, format: 'beautify' }))
		.pipe(dest('app/css/'))
		.pipe(browserSync.stream())
}

function scripts () {
	return src([
		'node_modules/jquery/dist/jquery.js',
		'app/lib/bootstrap.min.js',
		'app/js/jquery-ui.min.js',
		'app/js/owl.carousel.min.js',
		'app/js/scripts.js'
	])
		.pipe(concat('app.min.js'))
		.pipe(uglify())
		.pipe(dest('app/js/'))
		.pipe(browserSync.stream())
}

function images () {
	return src('app/images/src/**/*')
		.pipe(newer('app/images/dist/'))
		.pipe(imagemin())
		.pipe(dest('app/images/dist/'))
}

function cleanImg () {
	return del('app/images/dist/**/*', { force: true })
}

function cleanDist () {
	return del('dist/**/*', { force: true })
}

function buildCopy () {
	return src([
		'app/css/**/*.min.css',
		'app/js/**/*.min.js',
		'app/images/dist/**/*',
		'app/**/*.php'
	], { base: 'app' })
		.pipe(dest('dist/'))
}

function update () {
	watch('app/scss/*', styles)
	watch(['app/**/*.js', '!app/js/*.min.js'], scripts)
	watch('app/**/*.php').on('change', browserSync.reload)
	watch('app/images/src/**/*', images)
}

exports.browser_sync = browser_sync;
exports.scripts 	 = scripts;
exports.styles 	     = styles;
exports.images 	     = images;
exports.cleanImg 	 = cleanImg;
exports.build	     = series(cleanDist, styles, scripts, images, buildCopy);

exports.default      = parallel(styles, scripts, browser_sync, update);

