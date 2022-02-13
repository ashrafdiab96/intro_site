<template>
  <div id="app">
    <HeaderComponent />
    <router-view v-if="loaded" />
  </div>
</template>

<script>
import HeaderComponent from "./components/HeaderComponent";

export default {
  components: { HeaderComponent },
  computed: {
    loaded() {
    //   return this.$store.state.loadState == "loaded";
    }
  }
};
</script>
