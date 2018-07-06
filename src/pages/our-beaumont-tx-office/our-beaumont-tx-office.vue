<template lang='pug' src='./our-beaumont-tx-office.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Header from 'components/header/header'
import Sidebar from 'components/sidebar/sidebar'
import Footer from 'components/footer/footer'

export default {
  name: 'our-beaumont-tx-office',
  computed: {
    props () {
      return this.$store.state.pages['our-beaumont-tx-office']
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
