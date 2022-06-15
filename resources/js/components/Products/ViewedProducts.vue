<template>
    <slider-component
    :title="`Ранее просмотренные товары`"
        :items="viewedProducts"
    >
    </slider-component>
</template>

<script>
import productCardComponent from "./ProductCardComponent";
import {Carousel, Slide} from "vue-carousel";
import SliderComponent from "../Support/SliderComponent";
export default {
    name: "ViewedProducts",
    props:{
        viewedProducts: Array,
    }
    ,components:{
        SliderComponent,
        productCardComponent,
        Carousel,
        Slide
    }
}
</script>

<style scoped>

</style>
