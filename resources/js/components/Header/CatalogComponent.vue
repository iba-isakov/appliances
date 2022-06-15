<template>
    <div class="menu__catalog menu__mobile_catalog_open none" :class="{'flex' : isActive}">
        <div class="menu__catalog_box">
            <div class="catalog__close_butt" v-on:click="closeCatalog()"></div>
            <div class="header__block header__block_mobile">
                <div class="header__block_el_left header__block_el_left_mobile">
                    <div class="header__block_el_left_logo">
                        <img src="/css/img/domu-logo.png" alt="">
                    </div>
                    <a class="header__block_el_center_mobile" href="tel:+7 (3452) 57-70-10">+7 (3452) 57-70-10</a>
                </div>
            </div>
            <form class="header__block_el_center_search search__catalog">
                <input class="input__style_border" type="search" name="" placeholder="Поиск по товарам">
            </form>
            <div class="catalog__blocks">
                <div class="catalog__block_menu">
                    <h1 class="catalog__block_title ">Каталог</h1>
                    <ul class="catalog__block_list">
                        <li v-for="mainCategory in mainCategories"
                            v-bind:class="mainCategory.id === activeCategoryTabId ? 'active-category-tab' : ''"
                            class="catalog__block_list_item" v-on:click="changeCategory(mainCategory.id)">
                            <a class="catalog__block_list_item_text">
                                <div style="width: 18px; height: 18px">
                                    <img :src="mainCategory.image" alt="" style="width: 100%; height: 100%">
                                </div>
                                <div style="margin-left: 10px">
                                    {{ mainCategory.name }}
                                </div>
                            </a>
                            <img class="chevron__catalog"
                                 v-bind:class="mainCategory.id === activeCategoryTabId ? 'chevron__catalog_style' : ''"
                                 src="/css/img/chevron_right.svg" alt="">
                        </li>
                        <!--                <li class="catalog__block_list_item">-->
                        <!--                    <a href="/pages/brands/index.php" class="catalog__block_list_item_text">Вытяжки для кухни</a>-->
                        <!--                    <img class="chevron__catalog" src="/css/img/chevron_right.svg" alt="">-->
                        <!--                </li>-->
                        <!--                <li class="catalog__block_list_item">-->
                        <!--                    <a href="/pages/brands/index.php" class="catalog__block_list_item_text">Встраиваемая техника</a>-->
                        <!--                    <img class="chevron__catalog" src="/css/img/chevron_right.svg" alt="">-->
                        <!--                </li>-->
                        <!--                <li class="catalog__block_list_item">-->
                        <!--                    <a href="/pages/brands/index.php" class="catalog__block_list_item_text">Бытовая техника</a>-->
                        <!--                    <img class="chevron__catalog" src="/css/img/chevron_right.svg" alt="">-->
                        <!--                </li>-->
                        <!--                <li class="catalog__block_list_item">-->
                        <!--                    <a href="/pages/brands/index.php" class="catalog__block_list_item_text">Кухонная сантехника</a>-->
                        <!--                    <img class="chevron__catalog" src="/css/img/chevron_right.svg" alt="">-->
                        <!--                </li>-->
                        <!--                <li class="catalog__block_list_item">-->
                        <!--                    <a href="/pages/brands/index.php" class="catalog__block_list_item_text">Мелкая бытовая техника</a>-->
                        <!--                    <img class="chevron__catalog" src="/css/img/chevron_right.svg" alt="">-->
                        <!--                </li>-->
                        <!--                <li class="catalog__block_list_item">-->
                        <!--                    <a href="/pages/brands/index.php" class="catalog__block_list_item_text">Посуда и средства за уходом</a>-->
                        <!--                    <img class="chevron__catalog" src="/css/img/chevron_right.svg" alt="">-->
                        <!--                </li>-->
                        <!--                <li class="catalog__block_list_item">-->
                        <!--                    <a href="/pages/brands/index.php" class="catalog__block_list_item_text">Уценка</a>-->
                        <!--                    <img class="chevron__catalog" src="/css/img/chevron_right.svg" alt="">-->
                        <!--                </li>-->
                        <!--                <li class="catalog__block_list_item">-->
                        <!--                    <a href="/pages/brands/index.php" class="catalog__block_list_item_text">Распродажа</a>-->
                        <!--                    <img class="chevron__catalog" src="/css/img/chevron_right.svg" alt="">-->
                        <!--                </li>-->
                        <!--                <li class="catalog__block_list_item">-->
                        <!--                    <a href="/pages/brands/index.php" class="catalog__block_list_item_text">Бренды</a>-->
                        <!--                    <img class="chevron__catalog" src="/css/img/chevron_right.svg" alt="">-->
                        <!--                </li>-->
                    </ul>
                </div>
                <div class="catalog__block_content">
                    <div class="catalog_back_box">
                        <img class="chevron__catalog_back" src="/css/img/chevron_right.svg" alt="">
                        <h2>Каталог</h2>
                    </div>
                    <div class="catalog__block_content_topBox">
                        <h2 class="catalog__block_content_topBox_title">{{ currentCategory.name }}</h2>
                        <div class="catalog__block_content_topBox_img">
                            <img src="/css/img/Korting.png" alt="">
                            <img src="/css/img/bosch.png" alt="">
                            <img src="/css/img/Midea.png" alt="">
                        </div>
                    </div>
                    <div class="home__container_element_mobile catalog__content">
                        <div class="home__container_element_mobile_box catalog__content_box">
                            <div v-for="subcategory in currentCategory.sub_categories"
                                 class="home__container_element_mobile_box_item catalog__content_item">
                                <img src="/css/img/img_mobile_itm1.png" alt="">
                                <span>{{ subcategory.name }}</span>
                                <a>{{ subcategory.name }}</a>
                                <div class="catalog__content_item_linkBottom">
                                    <div v-for="sub_category in subcategory.sub_categories">
                                        <a :href="`/category/${sub_category.id}`">{{ sub_category.name }}</a>
                                    </div>
                                    <!--                            <a href="/pages/subcategories/index.php">Электрические</a>-->
                                </div>
                            </div>
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm2.png" alt="">-->
                            <!--                        <span>Микроволновые печи</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Микроволновые печи</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">Kuppersberg</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Korting</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Fornelli</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Comfee</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Bosch</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Teka</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Krona</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Midea</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm3.png" alt="">-->
                            <!--                        <span>Компактные и комбинированные духовые шкафы</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Компактные и комбинированные духовые шкафы</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">Комбинированные компактные духовые шкафы</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Компактные духовые шкафы</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm4.png" alt="">-->
                            <!--                        <span>Варочные поверхности</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Варочные поверхности</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">Комбинированные</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Газовые</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Электрические</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Индукционные</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm5.png" alt="">-->
                            <!--                        <span>Холодильники и морозильники</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Холодильники и морозильники</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">Морозильники без холодильной камеры</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Холодильники без морозильной камеры</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Холодильники с морозильной камерой</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm6.png" alt="">-->
                            <!--                        <span>Вакууматоры и подогреватели посуды</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Вакууматоры и подогреватели посуды</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            &lt;!&ndash; <a href="#">Газовые</a>-->
                            <!--                            <a href="#">Электрические</a> &ndash;&gt;-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm7.png" alt="">-->
                            <!--                        <span>Измельчители пищевых отходов</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Измельчители пищевых отходов</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">Teka</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm8.png" alt="">-->
                            <!--                        <span>Посудомоечные машины</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Посудомоечные машины</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">на 45 см</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">на 55 см</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">на 60 см</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm9.png" alt="">-->
                            <!--                        <span>Стиральные и сушильные машины</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Стиральные и сушильные машины</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">Korting</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Стирально-сушильные машины</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Стиральные машины</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm10.png" alt="">-->
                            <!--                        <span>Аксессуары</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Аксессуары</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">Bosch</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Elika</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm10.png" alt="">-->
                            <!--                        <span>Кофемашины</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Кофемашины</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">Bosch</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Teka</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                    <div class="home__container_element_mobile_box_item catalog__content_item">-->
                            <!--                        <img src="/css/img/img_mobile_itm10.png" alt="">-->
                            <!--                        <span>Винный кулер</span>-->
                            <!--                        <a  href="/pages/categories/index.php">Винный кулер</a>-->
                            <!--                        <div class="catalog__content_item_linkBottom">-->
                            <!--                            <a href="/pages/subcategories/index.php">Teka</a>-->
                            <!--                            <a href="/pages/subcategories/index.php">Midea</a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                        </div>
                    </div>
                    <div class="img__catalog_bottom">
                        <div class="img__catalog_bottom_item">
                            <img src="/css/img/img_bott.png" alt="">
                        </div>
                        <div class="img__catalog_bottom_item">
                            <img src="/css/img/img_bott.png" alt="">
                        </div>
                        <div class="img__catalog_bottom_item">
                            <img src="/css/img/img_bott.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CatalogComponent",
    props: {
        categories: Array,
    },
    data() {
        return {
            activeCategoryTabId: this.categories[0].id,
            isActive : false
        }
    },
    created() {
        this.$bus.$on('openCatalog', data => {
            this.isActive = data.isActive
        })
    },
    computed: {
        mainCategories() {
            return this.categories.filter(category => category.parent === 0)
        },
        currentCategory() {
            let curCategory = this.categories.filter(category => category.id === this.activeCategoryTabId)
            return curCategory[0]
        }
    },
    methods: {
        changeCategory(id) {
            this.activeCategoryTabId = id;
        },
        closeCatalog(){
            this.isActive = !this.isActive
            this.$bus.$emit('closeCatalog',{
                isActive : this.isActive
            })
        }
    },
}
</script>

<style scoped>
.active-category-tab img {
    filter: brightness(1);
}

.active-category-tab .catalog__block_list_item_text {
    color: #212121;
    font-weight: 600;
}
</style>
