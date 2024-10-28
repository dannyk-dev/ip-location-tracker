<template>
  <div>
    <h1>{{ location.ip  }}</h1>
  </div>
</template>

<script>
  export default {
    props: {
      location: Array
    }
  }
</script>

<style lang="scss" scoped>

</style>
