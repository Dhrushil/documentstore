<template>
  <div>
    <v-navigation-drawer color="#353637" dark :mini-variant="drawer" permanent>
      <v-list nav dense>
        <v-list-item @click="drawer = !drawer">
           <v-list-item-icon><v-icon>mdi-account</v-icon></v-list-item-icon>
           <v-list-item-title>{{$userName}}</v-list-item-title>
           <v-list-item-icon><v-icon>mdi-chevron-left</v-icon></v-list-item-icon>
          </v-list-item>
          <v-divider></v-divider>

        <v-list-item-group
          active-class="primary"
          v-model="route"
        >
          <v-list-item
            href="/admin/dashboard">
            <v-list-item-icon><v-icon>mdi-security</v-icon></v-list-item-icon>
            <v-list-item-title> Dashboard </v-list-item-title>
          </v-list-item>
          <v-list-item
            href="/admin/alerts">
            <v-list-item-icon><v-icon>mdi-alert</v-icon></v-list-item-icon>
            <v-list-item-title> Alerts </v-list-item-title>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      drawer: false,
      show: true,
      show2: false,
      group: '1',
      cards: [{ name: "card 1" }, { name: "card 1" }, { name: "card 1" }],
    };
  },
  props: ['route'],
  mounted() {
    console.log(this.route)
  }
};
</script>



<style lang="scss" scoped>
.v-card {
  border-left: 8px solid #4285f4 !important;
}

.fade-enter-active,
.fade-leave-active {
  transition-duration: 0.5s;
  transition-property: opacity;
  transition-timing-function: ease-in-out;
}

.fade-enter,
.fade-leave-active {
  opacity: 0;
}
</style>