var gulp = require('gulp'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create(),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    cssImport = require('postcss-import'),
    mixins = require('postcss-mixins'),
    cssvars = require('postcss-simple-vars'),
    nested = require('postcss-nested');


gulp.task('watch', function() {
    browserSync.init({
        notify: false,
        server: {
            baseDir: "app"
        }
    });
    watch('./app/index.html', gulp.series('html'));
    watch('./app/assets/styles/**/*.css', gulp.parallel('cssInject', 'styles'));
});

gulp.task('html', function() {
    browserSync.reload();
});

gulp.task('styles', function() {
    gulp.src('./app/assets/styles/styles.css')
    .pipe(postcss([cssImport, mixins, cssvars, nested, autoprefixer]))
    .on('error', function(errorInfo) {
        console.log(errorInfo.toString());
        this.emit('end');
    })
    .pipe(gulp.dest('app'));
});

gulp.task('cssInject', function() {
    return gulp.src('./app/assets/styles/styles.css')
    .pipe(browserSync.stream());
});