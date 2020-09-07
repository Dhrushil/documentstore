<template>
<v-container>
      <v-card dark>
        <v-card-title>
          Documents
          <v-spacer></v-spacer>
          <v-text-field
          v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
        >
          </v-text-field>
        </v-card-title>
      <v-data-table
      :headers="headers"
      :items="modules"
      :search="search"
      single-expand
      show-expand
      class="row-pointer"
      
      >
      <template v-slot:top>
        <v-btn color="#102a43" href="/modules/create">create</v-btn>
      </template>
      <template v-slot:item.id="{item}">
          <v-btn color="#102A43" :href="`${item.id}`">Read more</v-btn>
      </template>
      <template v-slot:expanded-item="{ headers, item }">
        <td :colspan="headers.length">{{ item.learning_outcomes }}</td>
      </template>
      </v-data-table>
      </v-card>
</v-container>
</template>

<script>
export default {
    name:"InputForm",
    data() {
      return {
        test: this.modules,
        modules: [],
        headers: [
          {
            text: 'Course',
            align: 'Start',
            sortable: true,
            value: 'course'
          },
          { 
            text: 'School', value: 'school'
          },
          {
            text: 'Read more',
            value: 'id',
            sortable: false
          },
        ],
        search: ''
      }
    },
    methods: {
      fetchModules() {
        axios.get('/modules').then((response) =>{
          this.modules = response.data.modules
        })
      },
    },
    created() {
      this.fetchModules()
    },
}
</script>

<style lang="css" scoped>
a {
  text-decoration: none;
  }
</style>