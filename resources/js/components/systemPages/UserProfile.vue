<template>
    <v-container>
        <h1>Hi <strong>{{username}}</strong></h1>
        
    </v-container>
</template>

<script>
export default {
    props: [
        "username",
        "userid",
        "useremail"
    ]
}
</script>