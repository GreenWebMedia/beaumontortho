<template lang='pug' src='./phase-ii-adolescent-treatment.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Header from 'components/header/header'
import Sidebar from 'components/sidebar/sidebar'
import Footer from 'components/footer/footer'

export default {
  name: 'phase-ii-adolescent-treatment',
  computed: {
    props () {
      return this.$store.state.pages['phase-ii-adolescent-treatment']
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
