<template>
<div>
  <v-container>
    <h1><strong>Hi {{$userName}}</strong>, Welcome Back! </h1>
    <v-card :dark="`${card.theme}`" class="menuCard ma-10" v-for="card in menuCard" v-bind:key="card.id" :color="`${card.colour}`" tile>
        <v-container>
        <v-btn style="float: right" text fab v-on:click.stop="`${card.dialog = true}`"><v-icon>mdi-cog</v-icon></v-btn>
        <v-card-title >{{card.title}}</v-card-title>
        <v-card-subtitle>{{card.subtitle}}</v-card-subtitle>
        <v-divider></v-divider>
          <v-dialog
            v-model="card.dialog"
            max-width="290"
          >
            <v-card>
              <v-color-picker
                v-model="card.colour"
                elevation="15"
              ></v-color-picker>
            </v-card>
          </v-dialog>

    <v-card-actions>
      <v-btn text :href="`${card.href}`">View</v-btn>
    </v-card-actions>
      </v-container>
    </v-card>



  </v-container>
  
</div>
</template>

<script>

export default {
  data() {
    return {
      menuCard: [
        {title: 'My Modules', subtitle: 'View your modules', colour: '#4285F4', textColour: 'black', theme:'dark', href: '/u/' + this.$userId, dialog: false},
        {title: 'All Modules', subtitle: 'View all modules', colour: '#DB4437', textColour: 'white', theme:'dark', href:'modules/all', dialog: false},
        {title: 'Create Modules', subtitle: 'Create your own module', colour: '#0F9D58', textColour: 'black', theme:'dark', href: 'modules/create', dialog: false},

      ],
      dialog: false
     
    }
  },
  
  mounted() {
      console.log(this.$userName)
  }
};
</script>

<style scoped>

a {
  text-decoration: none;
}
</style>

<style lang="scss" scoped>

</style>

