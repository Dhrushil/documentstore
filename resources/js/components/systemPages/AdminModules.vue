<template>
  <div style="height: 100%; display: inline-flex; width: 100%">
    <admin :route="2" />
    <v-container fluid style="background-color: #303030">
      <h1 class="white--text">Modules</h1>
      <v-card dark>
        <v-card-title class="green">
          Search for a module
          <v-spacer></v-spacer>
          <v-text-field v-model="search"></v-text-field>
        </v-card-title>
        <v-data-table dark :headers="headers" :items="modules" :search="search">
          <template v-slot:[`item.created_by_id`]="{ item }">
            <v-btn
              color="#0F9D58"
              :href="`/modules/edit/${item.id}`"
              style="color: white"
              rounded
              >Edit</v-btn
            >
            <v-btn
              color="#DB4437"
              style="color: white"
              rounded
              :href="`/modules/delete/${item.id}`"
              >Delete
            </v-btn>
          </template>
        </v-data-table>
      </v-card>
    </v-container>
  </div>
</template>


<script>
export default {
  data() {
    return {
      modules: [],
      search: "",
      headers: [
        {
          text: "Course",
          align: "Start",
          sortable: true,
          value: "course",
        },
        {
          text: "School",
          value: "school",
        },
        {
          text: "Read more",
          value: "id",
          sortable: false,
        },
        {
          text: "Users",
          value: "created_by",
          sortable: true,
        },
        {
          text: "Actions",
          value: "created_by_id",
          sortable: false,
        },
      ],
    };
  },
  methods: {
    updateSearch() {
      this.search = this.item;
      console.log(this.search);
    },
    fetchModules() {
      let self = this;
      axios.get("/datadump/moduledatagetall").then((response) => {
        self.modules = response.data.modules;
        console.log(this.modules);
      });
    },
    loopArr() {},
  },
  created() {
    this.fetchModules();
  },
};
</script>