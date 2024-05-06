let mix = require("laravel-mix");

mix.setPublicPath("assets/")
    .options({
        processCssUrls: false
    })
    .sass("assets/src/sass/theme.sass", "css/")
    .css("node_modules/lightgallery/css/lightgallery.css", "css/")
    .css("node_modules/lightgallery/css/lg-zoom.css", "css/")
    .css("node_modules/lightgallery/css/lg-thumbnail.css", "css/")
    .css("node_modules/swiper/swiper-bundle.css", "css/")
    .css("node_modules/@phosphor-icons/web/src/regular/style.css", "css/icons.css")
    .css("node_modules/@phosphor-icons/web/src/fill/style.css", "css/icons-fill.css")
    .js("assets/src/js/theme.js", "js/")
    .js("node_modules/bootstrap/dist/js/bootstrap.js", "js/")
    .js("node_modules/@popperjs/core/dist/esm/popper.js", "js/")
    .js("node_modules/jquery/dist/jquery.min.js", "js/")
    .js("node_modules/lightgallery/lightgallery.min.js", "js/")
    .js("node_modules/lightgallery/plugins/zoom/lg-zoom.min.js", "js/")
    .js("node_modules/lightgallery/plugins/thumbnail/lg-thumbnail.min.js", "js/")
    .js("node_modules/swiper/swiper-bundle.js", "js/")
    .copyDirectory("node_modules/lightgallery/fonts", "assets/fonts/")
    .copy("node_modules/@phosphor-icons/web/src/regular/Phosphor*", "assets/css/")
    .copy("node_modules/@phosphor-icons/web/src/fill/Phosphor*", "assets/css/")
    .copy("assets/src/fonts/*", "assets/fonts/")
    .browserSync({
        proxy: "localhost81/misc/skrychnovek.cz",
        files: [
            "layouts/**/*",
            "pages/**/*",
            "partials/**/*",
            "assets/src/sass/*",
            "assets/src/js/*",
        ],
    })
    .disableSuccessNotifications()
    .webpackConfig({
        stats: {
            children: false
        }
    });
