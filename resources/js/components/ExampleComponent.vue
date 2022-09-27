<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            Quotes
            <button class="btn btn-success" @click="getQuotes">
              <span v-if="!loading">Refresh</span>
              <span v-else>loading...</span>
            </button>
          </div>

          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item" v-if="loading">loading...</li>
              <li
                class="list-group-item"
                v-else
                v-for="(quote,index) in quotes"
                :key="`quote-${index}`"
              >{{quote}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loading: false,
      quotes: [],
      interval: null,
    };
  },
  methods: {
    getQuotes() {
      if (this.loading) {
        return false;
      }
      if (this.interval) {
        clearInterval(this.interval);
      }
      this.loading = true;
      window.axios
        .get("/api/quotes")
        .then((response) => {
          this.quotes = response.data;
          this.loading = false;
          this.interval = setInterval(() => {
            this.getQuotes();
          }, 60000);
        })
        .catch((error) => {
          this.loading = false;
        });
    },
  },
  created() {
    this.getQuotes();
  },
};
</script>
