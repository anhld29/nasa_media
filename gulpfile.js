var gulp = require('gulp'),
	sourcemaps = require("gulp-sourcemaps"),
	connect = require('gulp-connect-php'),
	browserSync = require("browser-sync"),
	plumber = require('gulp-plumber'),
	sass = require('gulp-sass'),
	cache = require('gulp-cached'),
	notify  = require('gulp-notify');

 gulp.task('sass', function(){
	//scssディレクトリの指定
	gulp.src('scss/**/*.scss') //←監視対象を自分の触るファイルのみへ変更
	.pipe(cache( 'sass' ))
	.pipe(sourcemaps.init())
	.pipe(plumber())
	//コンパイル実行
	.pipe(sass({
		outputStyle: 'expanded',
		indentType: 'tab',
		indentWidth: '1'
	}))
	.pipe(plumber({
		errorHandler: notify.onError("Error: <%= error.message %>") //<-
	}))
	//出力先の指定
	.pipe(sourcemaps.write("../maps/")) //←ソースマップを別のディレクトリに移動させます。
	.pipe(gulp.dest('css/'))
	.pipe(browserSync.reload({stream:true}));
});

 gulp.task('sass_non_cached', function(){
	//scssディレクトリの指定
	gulp.src('scss/**/*.scss') //←監視対象を自分の触るファイルのみへ変更
	.pipe(sourcemaps.init())
	.pipe(plumber())
	//コンパイル実行
	.pipe(sass({
		outputStyle: 'expanded',
		indentType: 'tab',
		indentWidth: '1'
	}))
	.pipe(plumber({
		errorHandler: notify.onError("Error: <%= error.message %>") //<-
	}))
	//出力先の指定
	.pipe(sourcemaps.write("../maps/")) //←ソースマップを別のディレクトリに移動させます。
	.pipe(gulp.dest('css/'))
	.pipe(browserSync.reload({stream:true}));
});

//js
gulp.task("js", function() {
	gulp.src('js/**/*.js')
		.pipe(browserSync.reload({stream:true}))
});


//php
gulp.task('connect-sync', function() {
	connect.server({
		port:80,
		base:'./'
	}, function (){
		browserSync({
			proxy: 'localhost:80/nasa_media/'
		});
	});
});
gulp.task('reload', function(){
	browserSync.reload();
});

//watch 実行
gulp.task("default",['connect-sync'], function() {
	gulp.watch("js/**/*.js",["js"]);
	gulp.watch("scss/**/*.scss",["sass"]);
	gulp.watch("scss/_*.scss",["sass_non_cached"]);
	gulp.watch("**/*.php",["reload"]);
});
