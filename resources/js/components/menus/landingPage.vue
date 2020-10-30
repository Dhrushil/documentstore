<template>
  <div
    class="landing-page"
    style="display: inline-flex; width: 100%; height: 100%"
  >

<!-- Sets up Uni of Glos image for landing page -->
    <div class="img-container" fluid style="width: 70%">
      <v-img
        height="100%"
        width="100%"
        src="https://www.breeam.com/wp-content/uploads/sites/3/2020/01/Pic-4-scaled-e1578498314458.jpg"
      ></v-img>
    </div>

<!-- Sets up the log in screen for the landing page -->
    <v-container class="login-container" fluid style="width: 30%">
      <v-row no-gutters>
        <v-col>
          <v-card flat style="background-color: transparent">
            <h1 style="text-align: center; font-size: 8vw">DDS</h1>
          </v-card>
        </v-col>
      </v-row>
      <v-btn
        style="width: 100%; top: 10em; overflow: hidden"
        outlined
        v-bind="size"
        href="/login"
      >
        <v-icon left v-bind="size">mdi-microsoft</v-icon>
        sign in with microsoft
      </v-btn>
    </v-container>


  </div>
</template>
