<template>
  <div class="navbar">
    <v-app-bar absolute color="primary">
      <a class="navbar-brand" href="/home" style="width: 10em">
        <img src="../../../../public/images/UoG_White.png">
        <v-img src="../../../../public/images/UoG_White.png" contain></v-img>
      </a>
      <p class="white--text">DDS</p>
      <v-spacer></v-spacer>
      <v-text-field placeholder="Search" solo prepend-inner-icon="mdi-magnify" clearable>
      </v-text-field>
      <v-spacer></v-spacer>

      <!-- User Profile on the navbar -->
      <v-btn fab depressed color="transparent" v-on:click="profileDrawer = !profileDrawer">
      <v-avatar>
        <v-icon>mdi-account</v-icon>
      </v-avatar>
      </v-btn>

    </v-app-bar>

    <!-- User Profile Navdraw menu -->
    <v-navigation-drawer right v-model="profileDrawer" app>
      <v-card color="transparent" flat tile>
      <v-btn style="left: 80%" fab color="transparent" depressed v-on:click="profileDrawer =! profileDrawer">
        <v-icon>mdi-close</v-icon>
      </v-btn>
      </v-card>
      <v-card class="ma-5" v-for="page in pages" v-bind:key="page.id" color="primary" dark :href="`${page.url}`">
      <v-list>
        <v-list-item >
          <v-list-item-title class="text-center">
            {{page.name}}
          </v-list-item-title>
        </v-list-item>
      </v-list>
      </v-card>
    </v-navigation-drawer>
    
    
  </div>
</template>

<style lang="scss" scoped>
.v-text-field {
    position: relative;
    top: 0.75em;
}
a{
  text-decoration: none;
}
</style>

<script>
export default {
  data() {
    return {
      profileDrawer: false,
      pages: [
        {name: 'Home', url: '/home'},
        {name: 'Settings', url: '/settings'},
        {name: 'Courses', url: '/courses'},
        {name: 'Modules', url: '/modules'},
        {name: 'Dashboard', url: '/dashboard'},
      ]
    }
  }
}
</script>