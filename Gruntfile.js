
module.exports = function(grunt) {
    
    grunt.initConfig({
        
        pkg: grunt.file.readJSON('package.json'),
    
        uglify: {
            build: {
                src: 'assets/css/app.css',
                dest: 'assets/css/app.min.css'
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
                    'assets/css/app.css': 'sass/app.scss'
                }
            }
        },

        cssmin: {
            combine: {
                files: {
                    'assets/css/app.min.css': 'assets/css/app.css'
                }
            }
        },


        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'assets/css/*.css',
                        'templates/**/*.php',
                        'scripts/*.js',
                        'scripts/**/*.js'
                    ]
                },
            
                options: {
                    watchTask: true,
                    proxy: '<%= pkg.appUrl %>',
                }
            }
        },

        watch: {
            css: {
                files: ['sass/*.scss', 'sass/**/*.scss'],
                tasks: ['sass']
            }
        }
    });


    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch')
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-browser-sync');


    // Default task(s).
    grunt.registerTask('default', ['sass'] );
    grunt.registerTask('live', ['browserSync', 'watch'] );
    grunt.registerTask('build', ['sass', 'cssmin']);
    
    grunt.registerTask('minify-js', ['concat', 'uglify']);
    grunt.registerTask('minify-css', ['concat'])

};
