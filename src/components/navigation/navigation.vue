<template lang='pug' src='./navigation.pug'></template>

<script>

export default {
  computed: {
    props () {
      return this.$router.options.routes
    }
  }
}

</script>
