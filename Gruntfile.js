module.exports = function(grunt) {

  grunt.initConfig({

      pkg: grunt.file.readJSON('package.json'),

      paths: {
          src: {
            js: 'components/scripts/',
            scss: 'components/sass/'
          },
          dest: {
            js: 'builds/development/js/',
            css: 'builds/development/css/',
            root: 'builds/development/'
          }
      },

      concat: {
        options: {
          separator: '\n\n//---------------------------------------------\n',
          banner: '/*! <%= pkg.name %> v<%= pkg.version %> <%= grunt.template.today("mm/dd/yyyy") %> */\n\n'
        },
        dist: {
          src: [
            'bower_components/jquery/dist/jquery.min.js',
            'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
            'bower_components/owl.carousel/dist/owl.carousel.min.js',
            'bower_components/sticky-kit/jquery.sticky-kit.min.js',
            '<%= paths.src.js %>inc/*.js',
            '<%= paths.src.js %>*.js'
          ],
          dest: '<%= paths.dest.js %>main.js'
        }
      }, //concat

      uglify: {
        dist: {
          files: {
            '<%= paths.dest.js %>main.min.js': '<%= paths.dest.js %>main.js'
          }
        }
      }, //uglify

      sass: {
  			// Sass development options
  			dev: {
  				options: {
  					outputStyle: 'expanded',
            sourceMap: true,
  					includePaths: [
              'bower_components/breakpoint-sass/stylesheets',
              'bower_components/bootstrap-sass/assets/stylesheets',
              'bower_components/font-awesome/scss',
              'bower_components/owl.carousel/src/scss/'
            ]
  				},
  				files: [{
  					src: '<%= paths.src.scss %>style.scss',
  					dest: '<%= paths.dest.css %>main.css'
  				}]
  			},

  			// Sass distribution options
  			dist: {
  				options: {
  					outputStyle: 'compressed',
  					includePaths: [
              'bower_components/breakpoint-sass/stylesheets',
              'bower_components/bootstrap-sass/assets/stylesheets',
              'bower_components/font-awesome/scss',
              'bower_components/owl.carousel/src/scss/'
            ]
  				},
  				files: [{
  					src: '<%= paths.src.scss %>style.scss',
  					dest: '<%= paths.dest.css %>main.min.css'
  				}]
  			}
  		}, // sass

      autoprefixer: {
        options: {
          browsers: ['last 2 versions', 'ie 9', 'ie 10', 'ie 11']
        },
        dev: {
          files: {'<%= paths.dest.css %>main.css': '<%= paths.dest.css %>main.css'}
        },
        dist: {
          files: {'<%= paths.dest.css %>main.min.css': '<%= paths.dest.css %>main.min.css'}
        }
      }, //autoprefixer

      watch: {
        options: {
          spawn: false,
          livereload: true
        },
        scripts: {
          files: ['<%= paths.src.js %>**/*.js', '<%= paths.src.scss %>**/*.scss','<%= paths.src.root %>**/*.html','<%= paths.src.root %>**/*.php'],
          tasks: ['concat', 'uglify', 'sass', 'autoprefixer']
        }
      } //watch

  }); //initConfig

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-sass');

  grunt.registerTask('default', ['concat', 'uglify', 'sass', 'autoprefixer', 'watch']);

}; //wrapper function
