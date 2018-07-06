import gulp from 'gulp'
import sassLint from 'gulp-sass-lint'
import { client } from '../config/default'

gulp.task('sasslint', () => {
  return gulp.src(client.lint.styles.input)
    .pipe(sassLint())
    .pipe(sassLint.format())
})
