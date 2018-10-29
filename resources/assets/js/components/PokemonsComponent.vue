<template>
    <div class="row">
      <spinner v-show="loading"></spinner>
      <div class="col-sm" v-for="pokemon in pokemons" v-bind:key="pokemon.id">
       <div class="card mt-5 text-center" style="width: 18rem;">
          <img style="height:100px; width:100px; background-color: #efefef;" class="card-img-top rounded-circle mt-2 mx-auto d-block" src="/images/" alt="">
          <div class="card-body">
            <h5 class="card-title">{{pokemon.name}}</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit corrupti incidunt iste veritatis inventore obcaecati officia quaerat quae quos tempora provident, sequi veniam ad ab quo maiores doloremque voluptatibus ullam!</p>
            <a href="/trainers/" class="btn btn-primary">Show More...</a>
          </div>
        </div>
      </div>
    </div>
</template>
<script> 
export default {
  data(){
    return {
      pokemons: [],
      loading: true
    }
  },
  mounted() {
    axios
      .get('http://localhost:8000/pokemons')
      .then((response) => {
        this.pokemons = response.data;
        this.loading = false;
      })
  }
}
</script>
<style>

</style>
