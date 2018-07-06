<template lang='pug' src='./form.pug'></template>

<script>
export default {
  data: () => {
    return {
      name: '',
      email: '',
      formSubmitted: false
    }
  },
  methods: {
    validateBeforeSubmit () {
      this.$validator.validateAll()
      .then(result => {
        if (result) {
          this.formSubmitted = true
        } else {
          alert('Correct them errors!')
        }
      })
      .catch(() => {
        alert('Correct them errors!')
      })
    }
  }
}
</script>
