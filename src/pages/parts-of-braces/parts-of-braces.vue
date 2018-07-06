<template lang='pug' src='./parts-of-braces.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Header from 'components/header/header'
import Sidebar from 'components/sidebar/sidebar'
import Footer from 'components/footer/footer'

export default {
  name: 'parts-of-braces',
  computed: {
    props () {
      return this.$store.state.pages['parts-of-braces']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    Header,
    Sidebar,
    Footer
  }
}
</script>
