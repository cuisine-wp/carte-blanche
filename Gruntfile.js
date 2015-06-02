
module.exports = function(grunt) {
    
    grunt.initConfig({
        
        pkg: grunt.file.readJSON('package.json'),
    
        uglify: {
            build: {
                src: 'css/main.css',
                dest: 'css/main.min.css'
            }
        },

        sass: {                              
            dist: {                            
                options: {
                    style: 'expanded',
                    loadPath: require('node-bourbon').includePaths,
                    loadPath: require('node-neat').includePaths
                },
                files: {
                    'css/main.css': 'css/sass/main.scss'
                }
            }
        },

        sass_globbing: {
            
            your_target: {
              
              files: {
                'css/sass/plugins/_plugins.scss': 'css/sass/plugins/*.scss'
              },

              options: {
                useSingleQuotes: false
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


        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'css/*.css',
                        'templates/**/*.php',
                        'scripts/*.js',
                        'scripts/**/*.js'
                    ]
                },
            
                options: {
                    watchTask: true,
                    proxy: 'localhost:8888',
                }
            }
        },

        watch: {
            css: {
                files: ['css/sass/*.scss', 'css/sass/**/*.scss'],
                tasks: ['sass_globbing', 'sass']
            }
        }
    });


    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-sass-globbing');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-browser-sync');


    // Default task(s).
    grunt.registerTask('default', ['sass'] );
    grunt.registerTask('live', ['browserSync', 'watch'] );
    grunt.registerTask('build', ['sass_globbing', 'sass', 'cssmin']);
    
    grunt.registerTask('minify-js', ['concat', 'uglify']);
    grunt.registerTask('minify-css', ['concat'])

};