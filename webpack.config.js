// webpack.config.js
const Encore = require('@symfony/webpack-encore');

Encore
// the project directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // will create public/build/app.js and public/build/app.css
    .addEntry('app', './assets/js/app.js')
    .addEntry('style', './assets/scss/main.scss')

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    // enable source maps during development
    .enableSourceMaps(!Encore.isProduction())

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()


// create hashed filenames (e.g. app.abc123.css)
// .enableVersioning()

// allow sass/scss files to be processed
// .enableSassLoader()
    .enableSassLoader();

// export the final configuration
module.exports = Encore.getWebpackConfig();