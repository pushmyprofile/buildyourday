var elixir = require('laravel-elixir');

var path = {
    foundation: 'foundation-sites/',
    motionui:   'motion-ui/',
    bower:  'bower_components/',
    motionui: 'motion-ui/'
};

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |*/


elixir(function(mix) {
    /*mix.sass('app.scss');*/

     mix.sass(
    'app.scss', 
    'public/css/app.css',
    { includePaths:
        ['bower_components/foundation-sites/scss/', path.bower + path.motionui + '/src/',]  
    });



     mix.sass([
        'main.scss'
    ], './public/css/main.css');

      mix.sass([
        'dashboard.scss'
    ], './public/css/dashboard.css');


     
    mix.scripts([

        // vendor
        path.bower + 'jquery/dist/jquery.min.js',
        path.bower + 'what-input/what-input.js',

        // foundation core
        //path.bower + path.foundation + 'dist/foundation.js',
        path.bower + path.foundation + 'js/foundation.core.js',
        path.bower + path.foundation + 'js/foundation.util.mediaQuery.js',
        // foundation plug-ins
        path.bower + path.foundation + 'js/foundation.util.box.js',
        path.bower + path.foundation + 'js/foundation.util.nest.js',
        path.bower + path.foundation + 'js/foundation.util.motion.js',
        path.bower + path.foundation + 'js/foundation.util.keyboard.js',
        path.bower + path.foundation + 'js/foundation.util.triggers.js',
        path.bower + path.foundation + 'js/foundation.abide.js',
        path.bower + path.foundation + 'js/foundation.dropdownMenu.js',
        path.bower + path.foundation + 'js/foundation.responsiveMenu.js',
        path.bower + path.foundation + 'js/foundation.responsiveToggle.js',
        path.bower + path.foundation + 'js/foundation.toggler.js',
        path.bower + path.foundation + 'js/foundation.reveal.js',
        path.bower + path.motionui + 'dist/motion-ui.js',  


   

    ], 'public/js/vendor.js', './');

mix.scripts([

        // custom javascript
        'resources/assets/js/app.js',  

    ], 'public/js/app.js', './');

}); 
