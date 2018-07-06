import gulp from 'gulp'
import runSequence from 'run-sequence'


gulp.task('default', (done) => {
  runSequence('sasslint', 'watch', done)
})
