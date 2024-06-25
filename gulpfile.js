const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass')); // Importa gulp-sass y especifica 'sass' como el compilador
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const plumber = require('gulp-plumber');

// Ruta de entrada y salida de archivos
const paths = {
  styles: {
    src: './assets/scss/*.scss', // Todos los archivos .scss dentro de la carpeta scss y sus subcarpetas
    dest: './assets/css', // Carpeta de salida para los archivos CSS compilados
  },
};

// Tarea para compilar Sass a CSS
function compileSass() {
  return gulp.src(paths.styles.src)
    .pipe(plumber()) // Evita que Gulp se detenga por errores de Sass
    .pipe(sass().on('error', sass.logError)) // Compila Sass a CSS usando 'sass' como el compilador
    .pipe(gulp.dest(paths.styles.dest)); // Guarda los archivos CSS compilados
}

// Tarea para minificar CSS
function minifyCss() {
  return gulp.src(`${paths.styles.dest}/*.css`)
    .pipe(cleanCSS()) // Minifica el CSS
    .pipe(rename({ suffix: '.min' })) // Renombra el archivo a .min.css
    .pipe(gulp.dest(paths.styles.dest)); // Guarda los archivos CSS minificados
}

// Tarea de observación de cambios en archivos Sass
function watch() {
  gulp.watch(paths.styles.src, compileSass); // Observa cambios en archivos .scss y ejecuta compileSass
}

// Exporta las tareas como comandos de Gulp
exports.compileSass = compileSass;
exports.minifyCss = minifyCss;
exports.watch = watch;

// Tarea predeterminada de Gulp (ejecuta 'gulp' en la línea de comandos)
exports.default = watch;