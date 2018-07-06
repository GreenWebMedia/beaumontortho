<template lang='pug' src='./sidebar.pug'></template>

<script>

export default {
  name: 'side-bar',
  computed: {
    props () {
      return this.$store.state.pages['side-bar']
    },
    loading () {
      return this.$store.state.loading
    }
  }
}

</script>
