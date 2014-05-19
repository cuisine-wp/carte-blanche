module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    

   /* concat: {
      options: {
        separator: ';',
      },
      dist:{
        src: ['assets/js/post-collection.js', 'assets/js/post-view.js', 'assets/js/post-model.js'],
        dest: 'assets/js/app.js'
      }
    },
  */
    uglify: {
      build: {
        src: 'css/main.css',
        dest: 'css/main.min.css'
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
        tasks: ['compass:dist', 'cssmin']
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
  grunt.registerTask('default', ['compass', 'cssmin']);


  grunt.registerTask('minify-js', ['concat', 'uglify']);
  grunt.registerTask('minify-css', ['concat'])

};