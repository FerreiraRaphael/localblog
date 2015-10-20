var gulp = require('gulp');
var rename = require('gulp-rename');
var elixir = require('laravel-elixir');

/**
 * Copy any needed files.
 *
 * Do a 'gulp copyfiles' after bower updates
 */
gulp.task("copyfiles", function() {

  // Copy jQuery, Bootstrap, and FontAwesome
  gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
      .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/bootstrap-sass/assets/stylesheets/bootstrap/**")
      .pipe(gulp.dest("resources/assets/sass/bootstrap/bootstrap"));

  gulp.src("vendor/bower_dl/bootstrap-sass/assets/stylesheets/_bootstrap.scss")
      .pipe(gulp.dest("resources/assets/sass/bootstrap"));

  gulp.src("vendor/bower_dl/bootstrap/less/mixins/**")
      .pipe(gulp.dest("resources/assets/less/bootstrap/mixins"));

  gulp.src("vendor/bower_dl/bootstrap/less/**")
      .pipe(gulp.dest("resources/assets/less/bootstrap"));
        
  gulp.src("vendor/bower_dl/bootstrap-sass/assets/javascripts/bootstrap.js")
      .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_dl/bootstrap-sass/assets/fonts/**")
      .pipe(gulp.dest("public/assets/fonts"));

  gulp.src("vendor/bower_dl/components-font-awesome/scss/**")
      .pipe(gulp.dest("resources/assets/sass/fontawesome"));

  gulp.src("vendor/bower_dl/components-font-awesome/less/**")
      .pipe(gulp.dest("resources/assets/less/fontawesome"));    

  gulp.src("vendor/bower_dl/components-font-awesome/fonts/**")
      .pipe(gulp.dest("public/assets/fonts"));

  // Copy datatables
 // var dtDir = 'vendor/bower_dl/datatables-plugins/integration/';

  gulp.src("vendor/bower_dl/datatables/media/js/jquery.dataTables.js")
      .pipe(gulp.dest('resources/assets/js/'));

  gulp.src("vendor/bower_dl/datatables/media/css/dataTables.bootstrap.css")
      .pipe(rename('dataTables.bootstrap.scss'))
      .pipe(gulp.dest('resources/assets/sass/others/'));

  gulp.src("vendor/bower_dl/datatables/media/js/dataTables.bootstrap.js")
      .pipe(gulp.dest('resources/assets/js/'));

  // Copy selectize
  gulp.src("vendor/bower_dl/selectize/dist/css/**")
      .pipe(gulp.dest("public/assets/selectize/css"));

  gulp.src("vendor/bower_dl/selectize/dist/js/standalone/selectize.min.js")
      .pipe(gulp.dest("public/assets/selectize/"));

  // Copy pickadate
  gulp.src("vendor/bower_dl/pickadate/lib/compressed/themes/**")
      .pipe(gulp.dest("public/assets/pickadate/themes/"));

  gulp.src("vendor/bower_dl/pickadate/lib/compressed/picker.js")
      .pipe(gulp.dest("public/assets/pickadate/"));

  gulp.src("vendor/bower_dl/pickadate/lib/compressed/picker.date.js")
      .pipe(gulp.dest("public/assets/pickadate/"));

  gulp.src("vendor/bower_dl/pickadate/lib/compressed/picker.time.js")
      .pipe(gulp.dest("public/assets/pickadate/"));

  // Copy CleanBlog css
    gulp.src("vendor/bower_dl/clean-blog/less/**")
        .pipe(gulp.dest("resources/assets/less/clean-blog"));

});

/**
 * Default gulp is to run this elixir stuff
 */
elixir(function(mix) {

  // Combine scripts
  mix.scripts([
      'js/jquery.js',
      'js/bootstrap.js',
      'js/jquery.dataTables.js',
      'js/dataTables.bootstrap.js'
    ],
    'public/assets/js/admin.js',
    'resources/assets'
);
  // Combine blog scripts
    mix.scripts([
        'js/jquery.js',
        'js/bootstrap.js',
        'js/blog.js'
    ], 'public/assets/js/blog.js', 'resources//assets');

  // Compile sass
  mix.sass('admin.scss', 'public/assets/css/admin.css');
  mix.less('blog.less', 'public/assets/css/blog.css');
});