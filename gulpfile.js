'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');
var babel = require('gulp-babel');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var request = require('request');
var path = require( 'path' );
var criticalcss = require("criticalcss");
var fs = require('fs');
var tmpDir = require('os').tmpdir();

gulp.task('criticalcss', function() {
    var cssUrl = 'https://young-retreat-83841.herokuapp.com/assets/dist/css/app.min.css';
    var cssPath = path.join( tmpDir, 'critical.css' );
    request(cssUrl).pipe(fs.createWriteStream(cssPath)).on('close', function() {
        criticalcss.getRules(cssPath, function(err, output) {
            if (err) {
                throw new Error(err);
            } else {
                criticalcss.findCritical("https://young-retreat-83841.herokuapp.com", { rules: JSON.parse(output) }, function(err, output) {
                    if (err) {
                        throw new Error(err);
                    } else {
                        // console.log(cssPath);
                        fs.writeFileSync('./assets/dist/css/critical.css', output);
                    }
                });
            }
        });
    });
});

gulp.task('sass', function() {
    return gulp.src('./assets/src/scss/app.scss')
        .pipe(sass())
        .pipe(autoprefixer({ browsers: ['last 2 versions', 'ios 7', 'ios 8'] }))
        .pipe(gulp.dest('./assets/dist/css'))
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./assets/dist/css'));
});

gulp.task('js', function() {
    return gulp.src('./assets/src/js/script.js')
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(gulp.dest('./assets/dist/js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./assets/dist/js'));
});

gulp.task('watch', function() {
    gulp.watch('./assets/src/scss/**/*.scss', ['sass']);
    gulp.watch('./assets/src/js/script.js', ['js']);
});
