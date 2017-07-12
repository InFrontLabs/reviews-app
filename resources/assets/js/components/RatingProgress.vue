<template>
    <div class="RatingProgress">
        <span class="RatingProgress__Label">
            {{ label }}
        </span>
        <div class="RatingProgress__Bkg">
            <div class="RatingProgress__Bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" :style="{ width: progress }">
                <span class="sr-only">{{ progress }} Complete</span>
            </div>
        </div>
        <span class="RatingProgress__Label">
            {{ count }}
        </span>
    </div>
</template>

<script>
export default {
    props: ['label', 'count', 'progress']
}
</script>

<style lang="sass">
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
    background-color: #ffc120
    height: 100%
    transition: width 200ms ease-in-out
    width: 0%

</style>


