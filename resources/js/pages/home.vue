<template>
  <div class="page">
    <div class="container">
        <h1 class="text-center text-danger"><strong>OUR GAMES</strong></h1>
      <div class="row my-4 ">
        <div class="col-md-4 justify-content-center d-flex" v-for="game in games" :key="game.name">
          <div class="card my-5"  style="width: 18rem">
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
      <iframe width="560" height="315" :src="game.video" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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