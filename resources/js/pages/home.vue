<template>
    <div class="page">
       <div class="games" v-for="game in games" :key="game.name">
           <h1>
               {{game.title}}
           </h1>
       </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            loading: true,
            games: [],
            meta: null,
            links: null,
        };
    },
    methods: {
        fetchGames() {
            axios.get("api/games").then((response) => {
                //console.log(response);
                this.games = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;
                this.loading = false;
            });
        }
    },
    mounted() {
        //console.log("Component mounted.");
        this.fetchGames();
},
};
</script>

<style lang="scss">

</style>