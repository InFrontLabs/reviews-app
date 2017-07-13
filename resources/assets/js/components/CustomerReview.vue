<template>
    <div class="CustomerReview">
    
        <h3 class="CustomerReview__Title">
            {{ review.title }}
            <small class="CustomerReview__Date">{{ createdAt }}</small>
        </h3>
    
        <star-rating :score="review.score" font-size="1.3em" />
    
        <h4>by
            <strong>{{ review.user_name }}</strong>
        </h4>
    
        <div class="CustomerReview__Body">
            {{ review.body }}
        </div>
    
    </div>
</template>

<script>
import StarRating from './StarRating'
import moment from 'moment'

export default {
    props: ['review'],
    computed: {
        createdAt () {
            return moment(this.review.published_at).format("MMM Do, hA")
        }
    },
    components: {
        StarRating
    }
}
</script>

<style lang="sass">

.CustomerReview
    padding: 20px 40px
    border-bottom: solid 1px #eee

    &:last-child
        border: 0

.CustomerReview__Title
    padding: 0
    margin: 0

.CustomerReview__Date
    color: #aaa
    float: right
    padding-top: 5px

</style>

