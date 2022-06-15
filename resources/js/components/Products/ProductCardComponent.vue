<template>
    <a v-if="isBlock"  :href="`/product/${product.id}`" class="slaider__three_box">
        <img src="/css/img/sl-three1.png" alt="">
        <span class="slaider__three_box_text">{{product.name}}</span>
        <div class="slaider__three_box_reviews">
            <ul class="reviews_star_list">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <span class="slaider__three_box_reviews_text">Отзывы (2)</span>
        </div>
        <div class="slaider_three_price">
            <div class="price_box_value">
                <span class="price_old">{{ product.crossed_out_price }} ₽</span>
                <span class="price_new">{{ product.retail_price }} ₽</span>
            </div>
            <button class="add__butt"></button>
        </div>
        <div class="buttons_hover_box">
            <button class="butt_hv _one"></button>
            <button class="butt_hv _two"></button>
        </div>
    </a>
    <a v-else :href="`/product/${product.id}`" class="subcategories__item_modifiedBox_item">
        <img src="/css/img/modified_img.png" alt="">
        <div class="subcategories__item_modifiedBox_item_infoCenter">
                                    <span class="subcategories__item_modifiedBox_item_infoCenter_title" style="width: 578px">
                                        {{product.name}}
                                    </span>
            <span class="value__product">В наличии:<span class="value__product_number">{{product.remains ? product.remains.in_stock : 0}}шт</span></span>
            <span class="value__productCode">Код товара:<span class="value__productCodeNumber">{{ product.code }}</span></span>
            <div class="subcategories__item_modifiedBox_item_iconInfo">
                <div class="subcategories__item_modifiedBox_item_iconInfo_icon">
                    <img src="/css/img/iconInfo_img1.svg" alt="">
                    <span>80Л</span>
                </div>
                <div class="subcategories__item_modifiedBox_item_iconInfo_icon">
                    <img src="/css/img/iconInfo_img2.svg" alt="">
                    <span>37-58C</span>
                </div>
                <div class="subcategories__item_modifiedBox_item_iconInfo_icon">
                    <img src="/css/img/iconInfo_img3.svg" alt="">
                    <span>2 кВт</span>
                </div>
            </div>
            <div class="element__bottom">
                <div class="element__bottom_compareBox">
                    <label class="radio">
                        <input class="element__bottom_compareBox_checkbox" type="checkbox"  name="checkbox">
                        <div class="element__bottom_compareBox_checkbox_check"></div>
                    </label>
                    <button class="element__bottom_compareBox_button">Сравнить</button>
                </div>
                <div class="element__bottom_stars">
                    <ul class="reviews_star_list">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <span class="element__bottom_stars_text">2</span>
                </div>
                <div class="element__bottom_buttonReviews"></div>
            </div>
        </div>
        <div class="subcategories__item_modifiedBox_item_infoRight">
            <div class="price_box_value">
                <span class="price_old">{{product.retail_price}} ₽</span>
                <span class="price_new">{{product.crossed_out_price}} ₽</span>
            </div>
            <a href="#" class="subcategories__item_modifiedBox_item_infoRight_text">Рассрочка 12 месяцев</a>
            <div class="subcategories__item_modifiedBox_item_infoRight_buttons">
                <div class="button__favorites"></div>
                <div class="button__notify">Уведомить</div>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    name: "ProductCardComponent",
    props: {
        isBlock: {
          default : true,
          type: Boolean
        },
        product: Object
    },
    mounted() {
        console.log(this.product)
    }
}
</script>

<style scoped>

</style>
