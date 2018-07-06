<template lang='pug' src='./common-problems.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Header from 'components/header/header'
import Sidebar from 'components/sidebar/sidebar'
import Footer from 'components/footer/footer'

export default {
  name: 'common-problems',
  computed: {
    props () {
      return this.$store.state.pages['common-problems']
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
