<template>
  <v-container>
    <v-card flat height="800" width="500em" style="display:inline-flex" color="transparent">
      <v-card color="transparent" flat width="50%">
        <div style="top: 30%; position: relative;">
          <v-card-title style="font-size: 400%">University of Gloucestershire</v-card-title>
          <v-divider></v-divider>
          <v-card-subtitle style="font-size: 400%">Definitive Document System</v-card-subtitle>
          <v-btn
            x-large
            style="top:5em"
            color="primary"
            href="/login"
            v-if="isAuthenticated == true"
          >Dashboard</v-btn>
          <v-btn x-large style="top:5em" color="primary" href="/login" v-else>Log in</v-btn>
          <v-btn x-large style="top:5em" outlined color="primary" href="/modules/all">Get Started</v-btn>
        </div>
      </v-card>
    </v-card>
  </v-container>
</template>

<style scoped>
h1 {
  position: relative;
  top: 10%;
}
a {
  text-decoration: none;
}
template {
  background-color: transparent;
}
</style>

<script>
export default {
  data() {
    return {
      isAuthenticated: false,
    };
  },
  methods: {
    checkAuth() {
      if (this.$userName.length > 0) {
        this.isAuthenticated = true;
      } else {
        this.isAuthenticated = false;
      }
      console.log(this.isAuthenticated);
    },
  },
  mounted() {
    this.checkAuth();
  },
};
</script>