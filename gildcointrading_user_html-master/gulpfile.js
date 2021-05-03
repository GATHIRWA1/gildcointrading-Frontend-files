var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'src/assets/scss/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest("src/assets/css"))
        .pipe(browserSync.stream());
});

// Move the javascript files into our /src/assets/js folder
gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
        .pipe(gulp.dest("src/assets/js"))
        .pipe(browserSync.stream());
});

// Static Server + watching scss/html files
gulp.task('serve', gulp.series('sass', function() {

    browserSync.init({
        server: "./src"  
    });

    gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/assets/scss/*.scss'], gulp.series('sass'));
    gulp.watch(['src/*.html', 'src/assets/js/*.js']).on('change', browserSync.reload);
}));

gulp.task('default', gulp.parallel('js','serve'));