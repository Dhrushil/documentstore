<template>
  <div style="height: 100%; display: inline-flex; width: 100%">
    <admin :route="1" />
    <v-container fluid style="background-color: #303030; display: inline-flex">
      <v-card dark class="ma-2" style="overflow-x: hidden" height="98%" width="100%">
        <v-card-title class="cyan white--text">
          <span class="title">Edit Logs</span>
        </v-card-title>
        <v-timeline dense class="ma-2">
          <v-timeline-item small fill-dot>
            <v-alert value color="blue" icon="mdi-alert" class="white--text">
              Changes made by {{ $userName }}:
              <v-spacer></v-spacer>
              <p></p>
              <v-avatar color="red" style="float: right">
                <v-icon>mdi-account</v-icon>
              </v-avatar>
            </v-alert>
          </v-timeline-item>
        </v-timeline>
      </v-card>

      <v-card dark class="ma-2" style="overflow-x: hidden" height="98%" width="100%">
        <v-card-title class="cyan white--text">
          <span class="title">Edit View</span>
        </v-card-title>
        <v-timeline dense class="ma-2">
          <v-timeline-item small fill-dot>
            <v-alert value color="blue" icon="mdi-alert" class="white--text">
              Changes made by {{ $userName }}:
              <v-spacer></v-spacer>
              <p></p>
              <v-avatar color="red" style="float: right">
                <v-icon>mdi-account</v-icon>
              </v-avatar>
            </v-alert>
          </v-timeline-item>
        </v-timeline>
      </v-card>
    </v-container>
  </div>
</template>

<script>
export default {
  data() {
    return {
      modules: [],
    };
  },
  props: ["editmadeby", "editmadebyid", "editmadebyemail"],
  methods: {
    fetchModules() {
      axios.get("/modules").then((response) => {
        this.modules = response.data.modules;
        console.log(this.modules);
      });
    },
  },
  created() {
    this.fetchModules();
  },
};
</script>

<style scoped>
::-webkit-scrollbar {
  width: 8px;
  background-color: rgb(56, 55, 55);
}

::-webkit-scrollbar-thumb {
  background-color: rgb(0, 0, 0);
}

::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0, 0, 0, 0.664);
}

::-webkit-scrollbar-track:hover {
  background-color: #292929;
}
</style>