<template>
    <div style="height: 100%;display: inline-flex; width: 100%">
      <admin :route=0  />
<v-container fluid style="background-color: #303030">
      <transition name="fade">
        <div>
          <v-row no-gutters>
            <v-col v-for="card in cards" :key="card">
              <v-card
                dark
                width="98%"
                class="ma-2"
              >
                <v-card-title>
                  {{ card.name }}
                </v-card-title>
        <v-card-text>test </v-card-text>
        <v-divider></v-divider>
<v-card-actions>
  <v-spacer></v-spacer>
  <v-btn rounded outlined color="success" :href="`${card.url}`">view</v-btn>
</v-card-actions>
              </v-card>
            </v-col>
          </v-row>
        </div>
      </transition>
      <v-row  no-gutters>
        <v-col>
      <v-card dark class="ma-2">
        <v-card-title class="cyan--text">Moodle Interactions </v-card-title>
     <v-sparkline
          :value="value"
          color="rgba(255, 255, 255, .7)"
          height="100"
          padding="10"
          stroke-linecap="round"
          smooth
     >
      <template v-slot:label="item">
        {{item.value}}
      </template>
     </v-sparkline>
      </v-card>
        </v-col>
      </v-row>
    </v-container>

    </div>
</template>

<script>
export default {
    data() {
        return {
            drawer: true,
            cards: [
                {name: "View all Modules", url: "/modules/all"},
                {name: "View my Modules", url: "/modules/all"},
                {name: "View tickets", url: "/modules/all"},
            ],
            value: [
              1,
              15,
              13,
              19,
              22,
              26,
              2,
              5,
              1
            ]
        }
    },


}
</script>

<style lang="scss" scoped>
.v-card {
  border-left: 8px solid #4285f4 !important;
}

.fade-enter-active,
.fade-leave-active {
  transition-duration: 0.5s;
  transition-property: opacity;
  transition-timing-function: ease-in-out;
}

.fade-enter,
.fade-leave-active {
  opacity: 0;
}
</style>