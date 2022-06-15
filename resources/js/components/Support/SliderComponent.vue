<template>
    <div class="home__container_two">
        <div class="home__container_title">
            <span class="container_title_left">{{ title }}</span>
        </div>
        <carousel class="slaider_three"
                  :navigationNextLabel="`<img src='/css/img/next.png'>`"
                  :navigationPrevLabel="`<img src='/css/img/prev.png'>`"
                  :navigationEnabled="true"
                  :paginationEnabled="false"
                  :perPage="6"
        >
            <slide v-for="item in items">
                <product-card-component
                    :product="item"
                >
                </product-card-component>
            </slide>
        </carousel>
    </div>
</template>

<script>
import {Carousel, Slide} from "vue-carousel";
import productCardComponent from "../Products/ProductCardComponent";
export default {
    name: "SliderComponent",
    props:{
        title: String,
        items: Array,
    },
    components:{
        Carousel,
        Slide,
        productCardComponent
    },
}
</script>

<style scoped>

</style>
