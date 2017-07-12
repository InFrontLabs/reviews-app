<template>
    <div class="container">
        <div class="Reviews">
            <div class="Reviews__Header">
                <h2 class="Reviews__Header__Heading">Customer Reviews</h2>
            </div>
            <div class="Reviews__Main">
    
                <div class="RatingAverage">
    
                    <div class="row">
                        <div class="col-md-3">
    
                            <div class="RatingAverage__Label">
                                <span class="larger">4.5</span> out of 5</div>
                            <div class="RatingAverage__Stars">
    
                               <star-rating :score="3.5" font-size="1.7em" color="#ffc120" />

                            </div>
    
                        </div>
    
                        <div class="col-md-5">
    
                            <div class="RatingAverage__Breakdown">
    
                                <RatingProgress label="5 stars" count="320" progress="90%" />
                                <RatingProgress label="4 stars" count="287" progress="65%" />
                                <RatingProgress label="3 stars" count="201" progress="40%" />
                                <RatingProgress label="2 stars" count="120" progress="20%" />
                                <RatingProgress label="1 star" count="10" progress="1%" />
    
                            </div>
    
                        </div>
    
                        <div class="col-md-4">
    
                            <button class="btn btn-primary btn-lg">Write a Review</button>
    
                        </div>
    
                    </div>
    
                </div>
    
                <div class="Reviews__Content">
    
                    <CustomerReview />
                    <CustomerReview />
                    <CustomerReview />
                    <CustomerReview />
                    <CustomerReview />
    
                </div>
    
            </div>
        </div>
    </div>
</template>

<script>
import RatingProgress from './RatingProgress'
import CustomerReview from './CustomerReview'
import StarRating from './StarRating'

export default {
    components: {
        RatingProgress,
        CustomerReview,
        StarRating
    },
    mounted() {
        console.log('Reviews mounted.')
    }
}
</script>

<style lang="sass">

    .Reviews
        background-color: #fff
        border: 0
        box-shadow: 0 1px 2px rgba(0,0,0,.1)
        border-radius: 4px

        .Reviews__Header
            border-bottom: solid 1px #eee

        .Reviews__Header__Heading
            color: #222
            padding: 20px 40px
            margin: 0
            font-weight: 700

        .Reviews__Header__Body
            padding: 20px

        .Reviews__Main
            padding: 0

    .RatingAverage
        padding: 20px 40px
        border-bottom: solid 1px #eee

    .RatingAverage__Label
        font-size: 2em
        line-height: 1

    .larger
        font-size: 2em


</style>
