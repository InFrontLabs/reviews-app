<template>
    <div>
        <span class="fa" :class="className" :key="index" v-for="(className, index) in classList">
    
        </span>
    </div>
</template>

<script>
export default {
    props: ['score'],
    created() {
        this.classList = []
        // loop over count
        for (let i = 1; i <= 5; i++) {
            let className = 'fa fa-star-o'

            if (this.score >= i) {
                className = 'fa fa-star';
            } else if (this.score >= (i - 0.5)) {
                className = 'fa fa-star-half-o';
            }
            this.classList.push(className)
        }

        console.log(this.classList)
    }
}
</script>

<style lang="sass">
  
</style>

