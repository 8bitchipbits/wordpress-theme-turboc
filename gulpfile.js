const { series, parallel, src, dest } = require("gulp");
const clean = require("gulp-clean");
const sass = require("gulp-sass")(require("sass"));
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const minify = require('gulp-minify');
const htmlmin = require('gulp-htmlmin');

function cleanAll() {
    return src(["css/", "publish/"], { allowEmpty: true })
        .pipe(clean({ force: true }));
}

function cssTranspile() {
    return src("./sass/main.scss")
        .pipe(sourcemaps.init())
        .pipe(sass({ "outputStyle": "expanded" }).on("error", sass.logError))
        .pipe(sourcemaps.write('.'))
        .pipe(dest("./css/"));
}

function cssMinify() {
    return src("./css/*.css")
        .pipe(sourcemaps.init())
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('.'))
        .pipe(dest("publish/css/"));
}

function jsTranspile() {
    return src("./js/*.js")
        .pipe(dest('publish/js'))
}

function jsBundle(cb) {
    cb();
}

function jsMinify() {
    return src("publish/js/*.js")
        .pipe(sourcemaps.init())
        .pipe(minify({
            ext: {
                src: '-debug.js',
                min: '.js'
            },
            compress: true,
            mangle: true
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('publish/js'));
}

function html() {
    return src("./*.html")
        .pipe(htmlmin({ collapseWhitespace: true }))
        .pipe(dest("publish/"));
}

exports.default = series(
    cleanAll,
    parallel(
        cssTranspile,
        series(jsTranspile, jsBundle)
    ),
    parallel(cssMinify, jsMinify),
    html
);