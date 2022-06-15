<template>
    <div class="container" id="b1">
        <ul class="breadcrumb">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li v-for="breadCrumb in breadCrumbs"><a :href="`/category/${breadCrumb.id}`">{{ breadCrumb.name }}</a>
                </li>
                <li><a :href="`/category/${category.id}`">{{ category.name }}</a></li>
            </ul>
        </ul>
        <div class="container__title">
            <h1 class="container__title_h1">{{ category.name }}</h1>
            <span class="container__title_value">{{ category.product_count }} товаров</span>
        </div>
        <div class="sort__box">
            <div class="sort__box_boxElement">
                <span class="sort__box_title">Сортировать по:</span>
                <div class="sort__box_itemBox">
                    <div class="sort__box_itemBox_item">Популярности</div>
                    <div class="sort__box_itemBox_item">Цене</div>
                    <div class="sort__box_itemBox_item">Рейтингу</div>
                    <div class="sort__box_itemBox_item">Отзывам</div>
                </div>
            </div>
            <div ckass="sort__box_buttonBox">
                <button class="sort__box_buttonBox_line" v-on:click="isList = true" :class="{'sort__box_active': isList}"></button>
                <button class="sort__box_buttonBox_square" v-on:click="isList = false" :class="{'sort__box_active': !isList}"></button>
            </div>
        </div>
        <div class="container__top">
            <button class="open__filter__box">Фильтры</button>
            <div class="container__top_left">
                <div class="filter__box">
                    <div class="filter__box_title">
                        <div class="filter__box_close"></div>
                        <span class="filter__box_title_text">Фильтры</span>
                        <button class="filter__box_title_clear">Очистить</button>
                    </div>
                    <div class="filter__rangeBox">
                        <span class="filter__rangeBox_title">Цена, ₽</span>
                        <div class="filter-interval">
                            <label><input type="text" name="min-interval" value="0">&nbsp;&nbsp;</label>
                            <label>&mdash;&nbsp;&nbsp;<input type="text" name="max-interval" value="1000000"></label>
                        </div>
                        <div class="range-controls">
                            <div class="scale">
                                <div class="bar"></div>
                            </div>
                            <div class="range-toggle range-toggle-min"></div>
                            <div class="range-toggle range-toggle-max"></div>
                        </div>
                    </div>
                    <div class="filter__box_checkBox">
                        <div class="filter__box_slideWindow slideWindow">
                            <div class="slideWindow__text">Наличие товара</div>
                            <img src="/css/img/Vector_fil.svg" alt="Стрелка угловая" class="slideWindow__img">
                        </div>
                        <div class="filter__box_label slideWindow__target">
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Доступен самовывоз</div>
                            </label>
                        </div>
                    </div>
                    <div class="filter__box_checkBox">
                        <div class="filter__box_slideWindow slideWindow">
                            <div class="slideWindow__text">Статус товара</div>
                            <img src="/css/img/Vector_fil.svg" alt="Стрелка угловая" class="slideWindow__img">
                        </div>
                        <div class="filter__box_label slideWindow__target">
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Доступно в рассрочку</div>
                            </label>
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Товары по акции</div>
                            </label>
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Уцененные товары</div>
                            </label>
                        </div>
                    </div>
                    <div class="filter__box_checkBox">
                        <div class="filter__box_slideWindow slideWindow">
                            <div class="slideWindow__text">Тип компрессора</div>
                            <img src="/css/img/Vector_fil.svg" alt="Стрелка угловая" class="slideWindow__img">
                        </div>
                        <div class="filter__box_label slideWindow__target">
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Не инверторный</div>
                            </label>
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Инверторный</div>
                            </label>
                        </div>
                    </div>
                    <div class="filter__box_checkBox">
                        <div class="filter__box_slideWindow slideWindow">
                            <div class="slideWindow__text">NO FROST</div>
                            <img src="/css/img/Vector_fil.svg" alt="Стрелка угловая" class="slideWindow__img">
                        </div>
                        <div class="filter__box_label slideWindow__target">
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>NO FROST</div>
                            </label>
                        </div>
                    </div>
                    <div class="filter__box_checkBox">
                        <div class="filter__box_slideWindow slideWindow">
                            <div class="slideWindow__text">Производитель</div>
                            <img src="/css/img/Vector_fil.svg" alt="Стрелка угловая" class="slideWindow__img">
                        </div>
                        <div class="filter__box_label slideWindow__target">
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Производитель</div>
                            </label>
                        </div>
                    </div>
                    <div class="filter__box_checkBox">
                        <div class="filter__box_slideWindow slideWindow">
                            <div class="slideWindow__text">Тип товара</div>
                            <img src="/css/img/Vector_fil.svg" alt="Стрелка угловая" class="slideWindow__img">
                        </div>
                        <div class="filter__box_label slideWindow__target">
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Водонагреватели</div>
                            </label>
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Микроволновые печи</div>
                            </label>
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Посудомоечные машины</div>
                            </label>
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Стиральные и сушильные машины</div>
                            </label>
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Холодильники и морозильники</div>
                            </label>
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Аксессуары</div>
                            </label>
                        </div>
                    </div>
                    <div class="filter__box_checkBox">
                        <div class="filter__box_slideWindow slideWindow">
                            <div class="slideWindow__text">Общий объем</div>
                            <img src="/css/img/Vector_fil.svg" alt="Стрелка угловая" class="slideWindow__img">
                        </div>
                        <div class="filter__box_label slideWindow__target">
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Общий объем</div>
                            </label>
                        </div>
                    </div>
                    <div class="filter__box_checkBox">
                        <div class="filter__box_slideWindow slideWindow">
                            <div class="slideWindow__text">Ширина</div>
                            <img src="/css/img/Vector_fil.svg" alt="Стрелка угловая" class="slideWindow__img">
                        </div>
                        <div class="filter__box_label slideWindow__target">
                            <label class="radio">
                                <input type="checkbox" name="type" value="1">
                                <div>Ширина</div>
                            </label>
                        </div>
                    </div>
                    <button class="pickUp__products">Подобрать товары</button>
                </div>
                <a class="link__categ" href="/pages/categories/index.php">
                    <img src="/css/img/link_categ.svg" alt="">
                </a>
            </div>
            <div class="container__top_right">
                <div class="img_akchia">
                    <img src="/css/img/Group 6601.png" alt="">
                </div>
                <div class="home__container_two">
                    <div v-if="!isList" class="slaider_three slider">
                        <div v-for="product in category.products">
                            <product-card-component
                                :product="product"></product-card-component>
                        </div>
                    </div>
                    <div v-else class="subcategories__item_modifiedBox">
                        <div v-for="product in category.products">
                        <div class="subcategories__item_modifiedBox_element">

                                <product-card-component
                                    :product="product"
                                    :is-block="false"
                                    ></product-card-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="seo__container">
            <div class="seo__container_box">
                <span class="seo__container_box_title">Сeo-текст</span>
                <span class="seo__container_box_text">
                Ударная волна отталкивает наносекундный лептон. Струя синфазно стабилизирует вращательный погранслой, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Гомогенная среда, как и везде в пределах наблюдаемой вселенной, воспроизводима в лабораторных условиях. Кварк перманентно расщепляет бозе-конденсат по мере распространения сигнала в среде с инверсной населенностью. Неоднородность, по данным астрономических наблюдений, отталкивает луч.

               <span>Ударная волна отталкивает наносекундный лептон. Струя синфазно стабилизирует вращательный погранслой, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Гомогенная среда, как и везде в пределах наблюдаемой вселенной, воспроизводима в лабораторных условиях. Кварк перманентно расщепляет бозе-конденсат по мере распространения сигнала в среде с инверсной населенностью. Неоднородность, по данным астрономических наблюдений, отталкивает луч.</span>
            </span>
            </div>
        </div>

        <viewed-products
            :viewed-products="viewedProducts">
        </viewed-products>
        <also-buy-products
            :also-buy-products="category.products"
            ></also-buy-products>
        <div class="home__container_nine home__container_thirteen">
            <div class="icon__info_box">
                <div class="icon__info_box_item">
                    <img src="/css/img/icon-info1.png" alt="">
                    <span class="icon__info_box_item_title">Обмен или возврат</span>
                    <span class="icon__info_box_item_text">Вернем или обменяем на другой товар, если он вам
                не подойдет</span>
                </div>
                <div class="icon__info_box_item">
                    <img src="/css/img/icon-info2.png" alt="">
                    <span class="icon__info_box_item_title">Доставка по Тюмени</span>
                    <span class="icon__info_box_item_text">Мы привезем ваш заказ
                в удобное время в пределах Тюмени</span>
                </div>
                <div class="icon__info_box_item">
                    <img src="/css/img/icon-info3.png" alt="">
                    <span class="icon__info_box_item_title">Бесплатное хранение заказа</span>
                    <span class="icon__info_box_item_text">Бесплатное хранение заказа
                в течение 30 дней, пока ваш ремонт еще не закончен</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";
import viewedProducts from "../../Products/ViewedProducts";
import productCardComponent  from "../../Products/ProductCardComponent";
import alsoBuyProducts from "../../Products/AlsoBuyProducts";
export default {
    name: "MainComponent",
    props: {
        category: Object,
        parentCategories: Array,
    },
    data(){
      return {
          isList: true,
          viewedProducts: Array,
      }
    },
    computed: {
        breadCrumbs() {
            let breadCrumbs = []
            this.parentCategories.forEach(function (category) {
                breadCrumbs.push({
                    name: category.name,
                    id: category.id,
                })
            })
            return breadCrumbs.reverse()
        },
        mostBuy(){
            return this.category.products
        }
    },
    mounted() {
      this.viewedProducts = JSON.parse(localStorage.getItem('viewedProducts'))
    },
    components: {
        Carousel,
        Slide,
        viewedProducts,
        productCardComponent,
        alsoBuyProducts
    },
}
</script>
<style scoped>
.slider{
    flex-wrap: wrap;
    column-gap: 43px;
    justify-content: normal;
}
</style>
