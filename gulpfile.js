const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

var bowerDir = 'bower_components/';

var resourceDir = 'resources/';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {

    mix.copy(bowerDir+'components-font-awesome/fonts', 'public/fonts');
    mix.copy(bowerDir+'open-sans-fontface/fonts', 'public/css/fonts');
    // TinyMCE
    mix.copy(bowerDir+'tinymce/tinymce.min.js', 'public/js');
    mix.copy(bowerDir+'tinymce/themes/modern/theme.min.js', 'public/js/tinymce/themes');
    mix.copy(bowerDir+'tinymce/skins/lightgray', 'public/css/tinymce/skins/lightgray');
    mix.copy(bowerDir+'tinymce/plugins/', 'public/js/tinymce/plugins');


    mix.styles([
        'components-font-awesome/css/font-awesome.min.css',
        'tether/dist/css/tether.min.css',
        'eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
        'nprogress/nprogress.css',
        'open-sans-fontface/open-sans.css',
        'datatables.net-bs4/css/dataTables.bootstrap4.min.css',
        'dropzone/dist/min/dropzone.min.css'
    ], 'public/css/compiled.css', bowerDir);

    mix.styles([
        'assets/bootstrap/dist/css/flatly.min.css',
        'assets/css/animate.min.css',
        'assets/css/default.css'
    ], 'public/css/default.css', resourceDir);

    mix.scripts([
            'jquery/dist/jquery.min.js',
            'tether/dist/js/tether.min.js',
            'moment/min/moment.min.js',
            'eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
            'nprogress/nprogress.js',
            'datatables.net/js/jquery.dataTables.min.js',
            'datatables.net-bs4/js/dataTables.bootstrap4.min.js',
            'remarkable-bootstrap-notify/dist/bootstrap-notify.min.js',
            'dropzone/dist/min/dropzone.min.js'
            ], 'public/js/compiled.js', bowerDir);

    mix.scripts([
            'assets/bootstrap/dist/js/popper.min.js',
            'assets/bootstrap/dist/js/bootstrap.min.js',
            'assets/js/login.js',
            'assets/js/default.js'
            ], 'public/js/default.js', resourceDir);

});