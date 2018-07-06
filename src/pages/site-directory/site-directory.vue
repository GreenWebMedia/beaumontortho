<template lang='pug' src='./site-directory.pug'></template>

<script>
import Loader from 'components/loader/loader'
import Header from 'components/header/header'
import Sidebar from 'components/sidebar/sidebar'
import Footer from 'components/footer/footer'
import Sitemap from 'components/sitemap/sitemap'

export default {
  name: 'site-directory',
  computed: {
    props () {
      return this.$store.state.pages['site-directory']
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
    Sitemap
  }
}
</script>
