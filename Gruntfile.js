module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    uglify: {
      build: {
        src: 'css/main.css',
        dest: 'css/main.min.css'
      }
    },

    /* Plain ol' Sass function, so we can drop compass as a dependency: */
    sass: {                              
      dist: {                            
        options: {                       
          style: 'expanded'
        },
        files: {                         
          'css/main.css': 'css/sass/main.scss',
        }
      }
    },

    compass: {
      dist: {
        options: {
          cssDir: 'css',
          sassDir: 'css/sass',
          imagesDir: 'images',
          javascriptsDir: 'js',
          force: true
        }
      }
    },

    cssmin: {
      combine: {
        files: {
          'css/main.min.css': 'css/main.css'
        }
      }
    },

    watch: {
      options: {
        livereload: true
      },
      css:{
        files: ['css/sass/*.scss'],
        tasks: ['compass:dist']
      }
    }
  });


  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch')
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Default task(s).
  grunt.registerTask('default', ['sass'] );
  grunt.registerTask('build-css', ['sass', 'cssmin']);


  grunt.registerTask('minify-js', ['concat', 'uglify']);
  grunt.registerTask('minify-css', ['concat'])

};