<template lang='pug' src='./sitemap.pug'></template>

<script>

export default {
  computed: {
    props () {
      return this.$router.options.routes
    }
  }
}

</script>
