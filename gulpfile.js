var gulp = require('gulp');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-ruby-sass');
var sourcemap = require('gulp-sourcemaps');

gulp.task('default', ['scripts','watch']);
  // place code for your default task here

gulp.task('scripts',function(){
	gulp.src('assets/**/*.js')
	.pipe(uglify())
	.pipe(gulp.dest('assets/js'));
});

gulp.task('watch',function(){
	gulp.watch('assets/**/*.js',['scripts']);
	gulp.watch('assets/**/*scss',['styles']);
	//gulp.src('assets/**/*.css',['scripts']);
});


gulp.task('styles',function(){
	return sass('assets/css/*.scss',{verbose: true})
    .on('error', function (err) { console.log(err.message); })
    .pipe(sourcemap.write())
    .pipe(gulp.dest('assets/css/'));
});



