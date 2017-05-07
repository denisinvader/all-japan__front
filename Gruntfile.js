module.exports = function (grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      dist: {
        src: [
          'src/scripts/main.js'
        ],
        dest: 'build/scripts.js'
      }
    },
    uglify: {
      build: {
        src: 'build/scripts.js',
        dest: 'build/scripts.min.js'
      }
    },

    sprite:{
      all: {
        src: 'src/images/sprite/*.png',
        dest: 'images/sprite.png',
        destCss: 'src/styles/icons/_sprite.scss',
        imgPath: '/images/sprite.png'
      }
    },

    sass: {
      options: { sourcemap: 'none' },
      dist: { files: { 'build/sass.css': 'src/styles/main.scss' } }
    },

    concat_css: {
      all: {
        src: [
          'build/sass.css'
        ],
        dest: "build/styles.css"
      }
    },
    autoprefixer: {
      dist: { files: { 'build/styles.css': 'build/styles.css' } }
    },
    cssmin: {
      target: { files: { 'build/styles.min.css': ['build/styles.css'] } }
    },
    watch: {
        // scripts: {
        //     files: [
        //         'js/libs/*.js',
        //         'js/*.js'
        //     ],
        //     tasks: ['concat', 'uglify'],
        //     options: {
        //         spawn: false
        //     }
        // },
        styles: {
          files: ['src/styles/**/*.scss'],
          tasks: [
            'sass',
            // 'concat_css',
            'autoprefixer',
            'cssmin'
          ],
          options: { spawn: false }
        },
        sprites: {
          files: ['src/images/sprite/*.png'],
          tasks: [
            'sprite',
            // 'concat_css',
            'autoprefixer',
            'cssmin'
          ],
          options: { spawn: false }
        }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.loadNpmTasks('grunt-spritesmith');

  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.loadNpmTasks('grunt-concat-css');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', [
    'concat',
    'uglify',
    'sprite',
    'sass',
    'concat_css',
    'autoprefixer',
    'cssmin'
  ]);
};
