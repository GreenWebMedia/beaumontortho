<template lang='pug' src='./app.pug'></template>

<script>
// components
import Navigation from 'components/navigation/navigation'
import Revisions from 'revisions'

export default {
  created () {
    this.$store.dispatch('GET_PAGES')
    this.$store.dispatch('GET_APP')
    this.$store.dispatch('VIEW_NAV', false)
    this.$store.dispatch('VIEW_BODY', false)
    this.$store.dispatch('VIEW_TYPES', 0)
    this.$store.dispatch('VIEW_SHOWMODAL', false)
    this.$store.dispatch('VIEW_MODALCONTENT', false)
  },
  computed: {
    props () {
      return this.$store.state
    }
  },
  components: {
    Navigation,
    Revisions
  },
  name: 'app'
}
</script>

<-- styles have been moved to main.sass file -->
<style src='../main.sass' lang='sass'></style>
