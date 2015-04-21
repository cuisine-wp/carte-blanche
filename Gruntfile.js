
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
