import gulp from 'gulp'
import { client } from '../config/default'

gulp.task('watch', () => {
  gulp.watch(client.styles.watch, ['sasslint'])
})
