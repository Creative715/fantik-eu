<template>
        <div>
                <h3 class="card-title"> {{ tour.title }}</h3>
                <hr>
                <hr>
                <p class="card-text"> {{ tour.content }}</p>
                <div class="mt-3">
                    <span class="badge bg-secondary">{{ likes }} <i class="far fa-thumbs-up"></i></span>
                    <span class="badge bg-secondary">{{ views }}<i class="far fa-eye"></i></span>
                </div>
                <small class="text-muted">{{tour.created_at}}</small>
                <hr>
        </div>
</template>

<script>
export default {
    computed:{
        tour(){
            return this.$store.state.tour;
        },
        likes(state) {
            return this.$store.getters.tourLikes;
        },
        views(state) {
            return this.$store.getters.tourViews;
        },
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

<style scoped>

</style>
