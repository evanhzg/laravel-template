const mix = require("laravel-mix");
require("dotenv").config();
const url = require("url");

const APP_URL = url.parse(process.env.APP_URL);

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/variables.scss", "public/css")
    .sass("resources/sass/app.scss", "public/css")
    .sass("resources/sass/homepage.scss", "public/css")
    .browserSync({
        proxy: process.env.APP_URL + ":8000",
        open: "local",
        ui: false,
        port: 8001,
    });
