<template lang='pug' src='./404.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Header from 'components/header/header'
import Sidebar from 'components/sidebar/sidebar'
import Footer from 'components/footer/footer'

export default {
  computed: {
    props () {
      return this.$router.options.routes
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

