<template>
  <div class="course-index">
    <v-container>
      <h1 class="grey--text">
        <a class="black--text" href="/courses">Courses</a> / View
      </h1>
      <v-container>
        <v-card class="ma-5">
          <v-data-table> </v-data-table>
        </v-card>
      </v-container>
    </v-container>
  </div>
</template>

<script>
export default {
  data() {
    return {
      courses: []
    }
  },
  methods: {
    fetchData() {
      let self = this;
      axios.get("/courses/BzxHzNoYdXhb5B1").then((response) => {
        self.courses = response.data.courses;
        console.log(this.courses)
      })
    }
  },
  mounted()
  {
    this.fetchData()
  }
}
</script>