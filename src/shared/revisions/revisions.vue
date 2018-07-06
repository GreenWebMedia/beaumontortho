<template lang="pug" src="./revisions.pug"></template>

<script>
import api from 'api'

export default {
  data () {
    return {
      dev: false,
      active: false
    }
  },
  created () {
    api.indexOf('roostertest3') === -1 ? '' : this.dev = true
  }
}
</script>
