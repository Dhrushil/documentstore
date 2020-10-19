<template>
  <v-container>
      <v-btn tile color="primary" href="/home">Home</v-btn>
      <v-card>
          <v-card-title class="teal">
              {{username}}'s Modules
              <v-spacer></v-spacer>
    <v-text-field
          v-model="search"
          append-icon="mdi-magnify"
          label="Search"
          single-line
          hide-details
        ></v-text-field>
          </v-card-title>
      <v-data-table
        :headers="headers"
        :items="modules"
        single-expand
        show-expand
        :search="search"
      >
<template v-slot:[`item.id`]="{item}" >
          <v-btn color="#0B72B1" :href="`${item.id}`" style="color: white" tile >Read more<v-icon class="ms-5">mdi-arrow-right</v-icon></v-btn>
        </template>
        <template v-slot:expanded-item="{ headers, item }">
          <td :colspan="headers.length">
            <div class="editor" v-html="`${item.learning_outcomes}`"/>
          </td>
        </template>
      </v-data-table>
      </v-card>
  
  </v-container>
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
          sortable: true
        }
      ],
    };
  },
  props: ['userid', 'username', 'useremail'],
  methods: {
    fetchModules() {
      let self = this;
      axios.get("/datadump/moduledatagetbyuser/" + this.userid).then((response) => {
        self.modules = response.data.modules;
        console.log(this.modules);
      });
    },
    
  },
  created() {
    this.fetchModules();

  },
  mounted() {
      console.log(this.userid)
  }
};
</script>