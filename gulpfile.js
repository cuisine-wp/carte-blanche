/**
 * Created by Dmytro on 3/27/2016.
 */
var browserify = require('browserify'),
    gulp = require('gulp'),
    sourcemaps = require('gulp-sourcemaps'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    source = require('vinyl-source-stream'),
    buffer = require('vinyl-buffer'),
    browserSync = require('browser-sync');

/* pathConfig*/
var entryPoint = './js/src/app.js',
    browserDir = './',
    sassWatchPath = './css/sass/**/*.scss',
    jsWatchPath = './js/src/**/*.js',
    htmlWatchPath = './*.php';
/**/

gulp.task('js', function () {
    return browserify(entryPoint, { debug: true, extensions: ['es6'] })
        .transform("babelify", { presets: ["es2015"] })
        .bundle()
        .pipe(source('script.js'))
        .pipe(buffer())
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./js/'))
        .pipe(browserSync.reload({ stream: true }));
});

gulp.task('browser-sync', function () {
    const config = {
        server: { baseDir: browserDir }
    };

    return browserSync(config);
});

gulp.task('sass', function () {
    return gulp.src(sassWatchPath)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.reload({ stream: true }));
});

gulp.task('watch', function () {
    gulp.watch(jsWatchPath, ['js']);
    gulp.watch(sassWatchPath, ['sass']);
    gulp.watch(htmlWatchPath, function () {
        return gulp.src('')
            .pipe(browserSync.reload({ stream: true }))
    });
});

gulp.task('run', ['js', 'sass', 'watch', 'browser-sync']);