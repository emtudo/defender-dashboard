var gulp   = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    clean  = require('gulp-clean');

gulp.task('clean-scripts', function() {
    return gulp.src('./src/resources/assets/js/', { read: false }).pipe(clean());
});

gulp.task('clean-styles', function() {
    return gulp.src('./src/resources/assets/css/', { read: false }).pipe(clean());
});

gulp.task('scripts', ['clean-scripts'], function() {
    gulp.src([
        './bower_components/jquery/dist/jquery.js',
        './bower_components/bootstrap/dist/js/bootstrap.js',
        './bower_components/vue/dist/vue.js',
        './bower_components/vue-resource/dist/vue-resource.js'
    ]).pipe(concat('vendor.min.js'))
      .pipe(uglify())
      .pipe(gulp.dest('./src/resources/assets/js/'));
});

gulp.task('styles', ['clean-styles'], function() {
    gulp.src([
        './bower_components/bootstrap/dist/css/bootstrap.min.css'
    ]).pipe(concat('vendor.min.css'))
      .pipe(gulp.dest('./src/resources/assets/css/'));

    gulp.src('./bower_components/bootstrap/dist/fonts/*')
        .pipe(gulp.dest('./src/resources/assets/fonts/'));
});

gulp.task('default', ['scripts', 'styles']);
