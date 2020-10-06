<template>
  <v-app-bar absolute color="#353637" dark flat >
    &nbsp;
    <a class="navbar-brand" href="" style="width: 10em">
      <v-img src="../images/UoG_White.png" contain></v-img>
    </a>
    <v-spacer></v-spacer>

    <v-menu offset-y transition="slide-y-transition" tile>
      <template v-slot:activator="{ on, attrs }">
        <v-avatar color="orange" v-bind="attrs" v-on="on">
          <span class="black--text headline">{{ iconName }}</span>
        </v-avatar>
      </template>
      <v-list shaped dense>
        <v-list-item-group color="primary">
          <v-list-item>
            <v-list-item-avatar color="orange">
              <span class="black--text headline">{{ iconName }}</span>
            </v-list-item-avatar>
            <v-list-item-content>
              <v-list-item-title>{{ $userName }}</v-list-item-title>
              <v-list-item-subtitle>{{ $email }}</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
          <v-divider></v-divider>
          <v-list-item
            v-for="item in navList"
            v-bind:key="item.id"
            :href="`${item.link}`"
          >
            <v-list-item-icon>
                <v-icon v-text="item.icon"></v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title v-text="item.title"></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-divider></v-divider>
          <v-list-item v-for="item in navList2" v-bind:key="item.id" :href="`${item.link}`">
              <v-list-item-icon>
                <v-icon v-text="item.icon"></v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title v-text="item.title"></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-divider></v-divider>
          <form id="logout-form" action="/logout" method="POST">
            <input type="hidden" name="_token" :value="csrf" />
            <v-list-item @click="formSubmit">
                <v-list-item-icon>
                    <v-icon >mdi-logout</v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <v-list-item-title >Logout</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
          </form>
        </v-list-item-group>
      </v-list>
    </v-menu>
  </v-app-bar>
</template>

<script>
export default {
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      iconName: this.$userName.substring(0, 1),
      navList: [
        { title: "Home", link: "/u/" + this.$userId, icon: "mdi-home-outline" },
        { title: "Settings", link: "/settings", icon: "mdi-cog-outline" },
        { title: "Cards", link: "/cards", icon: "mdi-cards-outline" },
        { title: "Activity", link: "/activity", icon: "mdi-alert-box-outline" },
      ],
      navList2: [
        { title: "Help", link: "/help", icon: "mdi-help-circle-outline" },
        { title: "Shortcuts", link: "/shortcuts", icon: "mdi-text-short" },
      ],
    };
  },
  methods: {
      formSubmit() {
          document.forms['logout-form'].submit();
      }
  }
};
</script>
