<template lang='pug' src='./icon.pug'></template>

<script>
export default {
  props: ['name'],
  computed: {
    svg () {
      return require(`@/assets/icons/${this.name}.svg`)
    }
  }
}
</script>
