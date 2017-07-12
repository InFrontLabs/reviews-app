<template>
    <div class="CustomerReview">
    
        <h3 class="CustomerReview__Title">
            Review title
            <small class="CustomerReview__Date">XX/XX/XXXX</small>
        </h3>
    
        <star-rating :score="3.5" font-size="1.3em" color="#ffc120" />
    
        <h4>by
            <strong>User</strong>
        </h4>
    
        <div class="CustomerReview__Body">
            I purchased two (2) of the Samsung UN32J5205 LED TV's to use as monitors using HDMI connection to my Mac Pro computer. The units handle everything beautifully. The Samsung J5205 TV's give my home work station a very professional appearance.
        </div>
    
    </div>
</template>

<script>
import StarRating from './StarRating'
export default {
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

