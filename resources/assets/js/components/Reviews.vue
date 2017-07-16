<template>
  <div class="container">
    <div class="Reviews">
      <div class="Reviews__Header">
        <h2 class="Reviews__Header__Heading">Customer Reviews</h2>
        <div class="brand">Created by
          <img class="logo" :src="require('sass/infrontlabs-logo8.svg')" />
        </div>
      </div>
      <div class="Reviews__Main">
        <div class="RatingAverage">

          <div class="row">
            <div class="col-md-3">

              <div class="RatingAverage__Label">
                <span class="larger">{{ average }}</span> out of 5</div>
              <div class="RatingAverage__Stars">

                <star-rating :score="average" font-size="1.7em" color="#ffc120" />

              </div>

            </div>

            <div class="col-md-5">

              <div class="RatingAverage__Breakdown">

                <RatingProgress v-bind:key="index" v-for="(score, index) in scores" :score="score" />

              </div>

            </div>

            <div class="col-md-4">


            </div>

          </div>

        </div>

        <div class="Reviews__Content">
          <CustomerReview :key="review.id" v-for="review in reviews" :review="review" />
        </div>

      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'

import RatingProgress from './RatingProgress'
import CustomerReview from './CustomerReview'
import StarRating from './StarRating'

export default {
  props: ['reviews', 'scores', 'average'],
  components: {
    RatingProgress,
    CustomerReview,
    StarRating
  }
}
</script>

<style lang="sass">
@import '~sass/variables'
.Reviews
    background-color: #fff
    border: 0
    box-shadow: 0 1px 2px rgba(0,0,0,.1)
    border-radius: 4px
    margin-bottom: 20px

    .Reviews__Header
        display: flex
        align-items: center
        border-bottom: solid 1px #eee
        background-color: $brand-primary
        color: #fff

    .Reviews__Header__Heading
        padding: 20px 40px
        margin: 0
        font-weight: 400

    .Reviews__Header__Body
        padding: 20px

    .Reviews__Main
        padding: 0

.RatingAverage
    background-color: #fff
    padding: 20px 40px
    border-bottom: solid 1px #eee

.RatingAverage__Label
    font-size: 2em
    line-height: 1

.larger
    font-size: 2em

.brand
    display: flex
    align-items: center
    justify-content: center
    .logo
        display: inline-block
        width: 140px
        height: 35px
        margin-left: 10px

.Reviews__Content
    height: 800px
    overflow-y: scroll

</style>
