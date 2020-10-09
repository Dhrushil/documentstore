<template>
  <v-container>
    <v-snackbar v-model="snackbar1" :timeout="timeout" top color="#cf6679">
      Post Deleted
      <template v-slot:action="{ attrs }">
        <v-btn color="white" text v-bind="attrs" @click="snackbar1 = false">Close</v-btn>
      </template>
    </v-snackbar>
    <v-snackbar v-model="snackbar2" :timeout="timeout" top color="#66BB6A">
      Post Created
      <template v-slot:action="{ attrs }">
        <v-btn color="white" text v-bind="attrs" @click="snackbar2 = false">Close</v-btn>
      </template>
    </v-snackbar>
    <v-snackbar v-model="snackbar3" :timeout="timeout" top color="#7E57C2">
      Post Updated
      <template v-slot:action="{ attrs }">
        <v-btn color="white" text v-bind="attrs" @click="snackbar3 = false">Close</v-btn>
      </template>
    </v-snackbar>
    <v-card tile>
      <v-card-title>
        Documents
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
        :search="search"
        single-expand
        show-expand
        class="mytable"
        
      >
        <template v-slot:top>
          <v-btn style="left:1em; color: white" color="#0B72B1" href="/modules/create" tile>Create<v-icon class="ms-5">mdi-folder-plus-outline</v-icon></v-btn>
        </template>
        <template v-slot:[`item.id`]="{item}">
          <v-btn color="#0B72B1" :href="`${item.id}`" style="color: white" tile>Read more<v-icon class="ms-5">mdi-arrow-right</v-icon></v-btn>
        </template>
        <template v-slot:expanded-item="{ headers, item }">
          <td :colspan="headers.length">
            <div class="tiptap-vuetify-editor__content" v-html="`${item.learning_outcomes}`"/>
          </td>
        </template>
      </v-data-table>
    </v-card>
  </v-container>
</template>

<script>

export default {
  name: "InputForm",
  props: ["deleted", "created", "updated", "created_by", "created_by_id", "created_by_email"],
  data() {
    return {
      test: [],
      modules: [],
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
      search: "",
      timeout: 5000,
      snackbar1: this.deleted,
      snackbar2: this.created,
      snackbar3: this.updated,
    };
  },
  methods: {
    fetchModules() {
      axios.get("/modules").then((response) => {
        this.modules = response.data.modules;
        this.test = response.data.modules[0];
        console.log(response)
      });
    },
  },
  created() {
    this.fetchModules();
  },
  mounted() {
    console.log(this.test.course);
  },
};
</script>

<style lang="scss" scoped>
a {
  text-decoration: none;
  text-transform: none;
}

.mytable table tr {
    background-color: lightgoldenrodyellow;
    border-bottom: none !important;
 }
</style>