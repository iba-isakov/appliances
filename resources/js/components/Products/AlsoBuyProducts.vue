<template>
    <slider-component
    :items="alsoBuyProducts"
    :title="`Вместе с этим товаром, чаще всего покупают`"
    >
    </slider-component>
</template>

<script>
import {Carousel, Slide} from "vue-carousel";
import SliderComponent from "../Support/SliderComponent";
export default {
    name: "AlsoBuyProducts",
    props: {
        alsoBuyProducts: Array,
    },
    components:{
        SliderComponent,
        Carousel,
        Slide
    },
}
</script>

<style scoped>
.slider{
    flex-wrap: wrap;
    column-gap: 10px;
}
</style>
