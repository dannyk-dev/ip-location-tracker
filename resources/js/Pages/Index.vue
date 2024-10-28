<template>
  <div>
    <h1>Oops I think this site is broken</h1>
    <a href="https://www.pornhub.com">Go Somewhere else...</a>
  </div>
</template>

<script lang="ts">
  export default {
    props: {
      ip: String,
      location: Array,
      test_location: Array
    },
    methods: {
      showLocationDetails() {
        console.log(this.test_location);
      }

    },

  }

</script>

<style scoped>

</style>
