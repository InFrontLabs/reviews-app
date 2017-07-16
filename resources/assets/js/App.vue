<template>
  <div>
    <div class="container">
      <router-view
        :reviews="reviews"
        :scores="scores"
        :average="average">
      </router-view>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'

export default {
  name: 'app',
  computed: {
    ...mapGetters({
      reviews: 'getReviews',
      scores: 'getScores',
      average: 'getAverage',
    })
  },
  methods: {
    ...mapActions(['fetchReviews', 'fetchScores'])
  },
  created() {
    this.fetchReviews(20)
    this.fetchScores()
  }
}
</script>
