const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const glob = require('glob');

module.exports = {
  mode: 'development', // Modo de desarrollo
  entry: getEntries('./assets/scss/**/*.scss'), // Puntos de entrada para todos los archivos .scss encontrados
  output: {
    path: path.resolve(__dirname, 'david-slomka-luthier/assets/css'), // Carpeta de salida para archivos CSS
    filename: '[name].css', // Nombre del archivo CSS compilado
  },
  module: {
    rules: [
      {
        test: /\.scss$/, // Regla para archivos Sass
        use: [
          MiniCssExtractPlugin.loader, // Extrae el CSS en archivos individuales
          'css-loader', // Convierte CSS en módulos
          'sass-loader', // Compila Sass a CSS
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css', // Nombre del archivo CSS compilado
    }),
  ],
  devServer: {
    static: path.join(__dirname, 'david-slomka-luthier'), // Carpeta base para servir archivos estáticos
    compress: true, // Habilita la compresión gzip para todos los recursos servidos
    port: 9000, // Puerto para el servidor de desarrollo
    hot: true, // Activa el reemplazo de módulo en caliente (Hot Module Replacement)
  },
};

// Función para obtener dinámicamente las entradas de Webpack basadas en archivos .scss encontrados
function getEntries(globPath) {
  const entries = {};
  glob.sync(globPath).forEach((file) => {
    const entryName = path.basename(file, path.extname(file));
    entries[entryName] = file;
  });
  return entries;
}