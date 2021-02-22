var gulp       = require('gulp'), // Подключаем Gulp
    sass         = require('gulp-sass'), //Подключаем Sass пакет,
    //browserSync  = require('browser-sync'), // Подключаем Browser Sync
    concat       = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
    uglify       = require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
    cssnano      = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
    rename       = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
    del          = require('del'), // Подключаем библиотеку для удаления файлов и папок
    imagemin     = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
    pngquant     = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
    cache        = require('gulp-cache'), // Подключаем библиотеку кеширования
    autoprefixer = require('gulp-autoprefixer');// Подключаем библиотеку для автоматического добавления префиксов

gulp.task('sass', function() { // Создаем таск Sass
    return gulp.src('sass/**/*.sass') // Берем источник
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))  // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
        .pipe(gulp.dest('css')) // Выгружаем результата в папку app/css
});

/*gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({ // Выполняем browserSync
        server: { // Определяем параметры сервера
            baseDir: 'app' // Директория для сервера - app
        },
        notify: false // Отключаем уведомления
    });
}); */

gulp.task('scripts', function() {
    return gulp.src([ // Берем все необходимые библиотеки
        'libs/jquery/dist/jquery.min.js', // Берем jQuery
        'libs/magnific-popup/dist/jquery.magnific-popup.min.js' // Берем Magnific Popup
        ])
        .pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest('js')); // Выгружаем в папку app/js
});

gulp.task('code', function() {
    return gulp.src('*.html')
});

gulp.task('css-libs', function() {
    return gulp.src('css/libs.sass') // Выбираем файл для минификации
        .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(cssnano()) // Сжимаем
        .pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
        .pipe(gulp.dest('css')); // Выгружаем в папку app/css
});

gulp.task('clean', async function() {
    return del.sync('dist'); // Удаляем папку dist перед сборкой
});

gulp.task('img', function() {
    return gulp.src('img/**/*') // Берем все изображения из app
        .pipe(cache(imagemin({ // С кешированием
        // .pipe(imagemin({ // Сжимаем изображения без кеширования
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))/**/)
        .pipe(gulp.dest('img')); // Выгружаем на продакшен
});

gulp.task('prebuild', async function() {

    var buildCss = gulp.src([ // Переносим библиотеки в продакшен
        'css/main.css',
        'css/libs.min.css'
        ])
    .pipe(gulp.dest('dist/css'))

    var buildFonts = gulp.src('fonts/**/*') // Переносим шрифты в продакшен
    .pipe(gulp.dest('dist/fonts'))

    var buildJs = gulp.src('js/**/*') // Переносим скрипты в продакшен
    .pipe(gulp.dest('dist/js'))

    var buildHtml = gulp.src('*.html') // Переносим HTML в продакшен
    .pipe(gulp.dest('dist'));

});

gulp.task('clear', function (callback) {
    return cache.clearAll();
})

gulp.task('watch', function() {
    gulp.watch('sass/**/*.sass', gulp.parallel('sass')); // Наблюдение за sass файлами
    gulp.watch('*.html', gulp.parallel('code')); // Наблюдение за HTML файлами в корне проекта
    gulp.watch(['js/common.js', 'libs/**/*.js'], gulp.parallel('scripts')); // Наблюдение за главным JS файлом и за библиотеками
});
gulp.task('default', gulp.parallel('css-libs', 'sass', 'scripts', 'watch'));
gulp.task('build', gulp.parallel('prebuild', 'clean', 'img', 'sass', 'scripts'));
