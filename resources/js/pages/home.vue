<template>
  <div class="page">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card" v-for="game in games" :key="game.name" style="width: 18rem">
            <img :src="'/img/' + game.thumb" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">{{game.title}}</h5>
              <a href="#" class="btn btn-primary">view preview</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="games" v-for="game in games" :key="game.name">
      <h1>
        {{ game.title }}
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
    },
  },
  mounted() {
    //console.log("Component mounted.");
    this.fetchGames();
  },
};
</script>

<style lang="scss">
</style>