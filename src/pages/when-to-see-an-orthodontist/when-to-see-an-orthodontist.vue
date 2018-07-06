<template lang='pug' src='./when-to-see-an-orthodontist.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Header from 'components/header/header'
import Sidebar from 'components/sidebar/sidebar'
import Footer from 'components/footer/footer'

export default {
  name: 'when-to-see-an-orthodontist',
  computed: {
    props () {
      return this.$store.state.pages['when-to-see-an-orthodontist']
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
