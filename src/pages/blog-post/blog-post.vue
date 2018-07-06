<template lang='pug' src='./blog-post.pug'></template>
<style>

.page-blog-post__content img.alignnone.size-large {
    max-width: 100%;
	height:auto;
}
@media screen and (min-width: 1350px) {
.page-blog-post__container {
    padding: 3rem 5%;
}
}
</style>
<script>
import Loader from 'components/loader/loader'
import Navigation from 'components/navigation/navigation'
import Sidebar from 'components/sidebar/sidebar'
import Logo from 'components/logo/logo'
import Footer from 'components/footer/footer'

export default {
  name: 'blog-post',
  data () {
    return {
      date: ''
    }
  },
  computed: {
    props () {
      const current = this.$router.history.current.params.id
      return this.$store.state.blog[current]
    },
    loading () {
      return this.$store.state.loading
    }
  },
  components: {
    Loader,
    Navigation,
    Sidebar,
    Logo,
    Footer
  },
  mounted () {
    var original = this.props.date
    var year = original.slice(0, 4)
    var month = original.slice(5, 7)
    var day = original.slice(8, 10)
    var updated = `${month}/${day}/${year}`
    this.date = updated
  },
  updated () {
    var original = this.props.date
    var year = original.slice(0, 4)
    var month = original.slice(5, 7)
    var day = original.slice(8, 10)
    var updated = `${month}/${day}/${year}`
    this.date = updated
  }
}
</script>
