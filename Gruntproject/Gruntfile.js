module.exports = function(grunt){
	
grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    concat: {
            build: {
                files: {
                    'build/js/all.js' : ['src/js/hello.js', 'src/js/script.js']
                }
            }

    },

    cssmin: {
			css: {
				src: 'src/css/style.css',
				dest: 'build/css/style.min.css'
			}
	},
	
    jshint: {
            options: {
                '-W015': true,
                "esversion": 6
            },
            build: {
                src: ['build/js/all.js']
            },
    },
    uglify: {
        options: {
            banner: '/*!  tuanda <%= grunt.template.today("yyyy-mm-dd") %> */\n'
        },
        build: {
        	files:{
        		'build/js/hi.min.js': ['src/js/hello.js']
        	}
        }
    },
    bowercopy: {
			options: {
				srcPrefix: 'bower_components',
				destPrefix: 'vendor'
			},
			scripts: {
				files: {
					'jquery': 'jquery/**/jquery.min.js',
				}
			}
		}





  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-bowercopy');

  // Default task(s).
  grunt.registerTask('default', ['concat','cssmin','jshint','uglify','bowercopy']);

};

