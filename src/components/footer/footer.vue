<template lang='pug' src='./footer.pug'></template>

<script>

export default {
  name: 'footer',
  computed: {
    props () {
      return this.$store.state.pages['footer']
    },
    loading () {
      return this.$store.state.loading
    }
  }
}

</script>
