<template lang='pug' src='./feedback.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Header from 'components/header/header'
import Sidebar from 'components/sidebar/sidebar'
import Footer from 'components/footer/footer'
import VueRecaptcha from 'vue-recaptcha'

export default {
  name: 'feedback',
  computed: {
    props () {
      return this.$store.state.pages['feedback']
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    Header,
    Sidebar,
    Footer,
    VueRecaptcha
  }
}
</script>
