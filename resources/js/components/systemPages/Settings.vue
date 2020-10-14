<template>
    <div>
        <v-container  >
            <div> 
            <v-avatar class="center" size="144" color="orange">
                <span class="black--text headline" style="size: 200">{{ initials }}</span>
            </v-avatar>
            <p class="text-center">Welcome, <strong>{{$userName}}</strong></p>
            </div>
            <v-container style=" width: 60%">
            <v-card v-for="item in items" v-bind:key="item.id" class="cards ma-5" width="470" height="200">
                <v-card-title>{{item.title}}</v-card-title>
            </v-card>
            </v-container>
        </v-container>
    </div>
</template>

<script>
export default {
    data() {
        return {
            initials: this.$userName.substring(0,1),
            items: [
                {title: "test"},
                {title: "test"},
                {title: "test"},
                {title: "test"},
            ]
        }
    }
}
</script>

<style>
.center {
    left: 46%
}
.cards {
    display: inline-flex
}
</style>