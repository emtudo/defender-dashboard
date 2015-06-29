var gulp   = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    clean  = require('gulp-clean');

// Clean scripts directory
gulp.task('clean-scripts', function() {
    return gulp.src('./src/resources/dist/js/', { read: false }).pipe(clean());
});

// Clean styles directory
gulp.task('clean-styles', function() {
    return gulp.src('./src/resources/dist/css/', { read: false }).pipe(clean());
});

/**
 * Scrips compilation
 */
gulp.task('scripts', ['clean-scripts'], function() {

    /*
     * Vendor compilation
     */
    gulp.src([
        './bower_components/jquery/dist/jquery.js',
        './bower_components/bootstrap/dist/js/bootstrap.js',
        './bower_components/vue/dist/vue.js',
        './bower_components/vue-resource/dist/vue-resource.js',
        './bower_components/ladda/dist/spin.min.js',
        './bower_components/ladda/dist/ladda.min.js'
    ])
    .pipe(concat('vendor.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./src/resources/dist/js/'));

    /*
     * App File compilation
     */
    gulp.src([
        './src/resources/assets/js/users.js',
        './src/resources/assets/js/roles.js'
    ])
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./src/resources/dist/js'));
});

/**
 * Styles compilation
 */
gulp.task('styles', ['clean-styles'], function() {
    gulp.src([
        './bower_components/bootstrap/dist/css/bootstrap.min.css',
        './bower_components/ladda/dist/ladda-themeless.min.css'
    ])
    .pipe(concat('vendor.min.css'))
    .pipe(gulp.dest('./src/resources/dist/css/'));

    gulp.src('./bower_components/bootstrap/dist/fonts/*')
    .pipe(gulp.dest('./src/resources/dist/fonts/'));
});

// Watch for changes
gulp.task('watch', function() {
    gulp.watch('./src/resources/assets/js/**/*.js', ['scripts']);
});

// Default gulp task
gulp.task('default', ['scripts', 'styles']);
