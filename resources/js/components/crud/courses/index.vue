<template>
  <div class="course-index">
    <v-container>
      <h1>Courses</h1>
      <v-container style="display: inline-flex">
        <v-card
          v-for="option in options"
          v-bind:key="option.id"
          class="ma-5"
          height="500"
          width="300"
          :href="`${option.url}`"
        >
          <v-card-title>
            {{ option.name }}
          </v-card-title>
        </v-card>
      </v-container>
    </v-container>
  </div>
</template>


<script>
export default {
  data() {
    return {
      options: [{ name: "Create", url: "/courses/create" }, 
      { name: "View", url: "/courses/view" }],
    };
  },
};
</script>