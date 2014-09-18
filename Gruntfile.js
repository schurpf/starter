module.exports = function(grunt) {
	require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		compass: {
			dist: {
				options: {
					config: 'config.rb'
				}
			}
		},
		replace: {
			fix_sprites: {
				src: ['css/style.css'], 
				dest: 'style.css', 
				// overwrite: true,          
				replacements: [{
		      from: "background: url('../img",                   // string replacement
		      	to: "background: url('img"
		      },{
		      from: "background:url('../img",                   // string replacement
		      	to: "background:url('img"
		      }
		      ]
		  }
		},
		watch: {
			sass:{
				files: ['sass/*.scss'],
				tasks: ['compass', 'replace']//,
				// options: {
				// 	livereload: true,
			 //    }
			}//,
			// reload:{
			// 	files: ['**/*.php'],
			// 	options: {
			// 		livereload: true,
			//     }
			// }
		}
	});

	grunt.registerTask('default', ['watch']);
};