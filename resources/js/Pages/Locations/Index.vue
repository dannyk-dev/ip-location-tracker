<template>
  <div>
    <h1>hello</h1>
  </div>
</template>

<script setup>
const {locations} = defineProps({
  locations: Array
});

console.log(locations);
</script>

<style lang="scss" scoped>

</style>
