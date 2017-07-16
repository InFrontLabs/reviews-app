<template>
    <div class="RatingProgress">
        <span class="RatingProgress__Label">
            {{ score.score }}
            <span v-if="score.score == 1">star</span>
            <span v-else>stars</span>
        </span>
        <div class="RatingProgress__Bkg">
            <div class="RatingProgress__Bar" role="progressbar" :aria-valuenow="score.percentage" aria-valuemin="0" aria-valuemax="100" :style="{ width: `${score.percentage}%` }">
                <span class="sr-only">{{ score.percentage }} Complete</span>
            </div>
        </div>
        <span class="RatingProgress__Label">
            {{ score.count }}
        </span>
    </div>
</template>

<script>
export default {
    props: ['score']
}
</script>

<style lang="sass">
@import '~sass/variables'

.RatingProgress
    display: flex
    flex-direction: row
    justify-content: center
    align-items: center

.RatingProgress__Label
    width: 50px
    font-size: .85em

    &:first-child
        margin-right: 10px

    &:last-child
        margin-left: 10px

.RatingProgress__Bkg
    background-color: #eee
    height: 14px
    width: 100%
    border-radius: 14px
    overflow: hidden

.RatingProgress__Bar
    background-color: $brand-highlight
    height: 100%
    transition: width 500ms ease-in-out
    width: 0%

</style>


