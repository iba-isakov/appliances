<template>
    <div class="header">
        <div class="header__block">
            <div class="header__block_el_left">
                <a href="/index.php" class="header__block_el_left_logo">
                    <img src="/css/img/domu-logo.png" alt="">
                </a>
                <button
                        id="button__open_catalog" class="butt_catalog" v-on:click="openCatalog()"><span>Каталог товаров</span></button>
            </div>
            <div class="header__block_el_center">
                <div class="dropdown_box">
                    <div class="dropdown">
                        <div class="dropbtn">Тюмень</div>
                        <div class="dropdown-content">
                            <a href="#">Тюмень</a>
                            <a href="#">Екатеринбург</a>
                        </div>
                    </div>
                    <div class="dropdown__adress"><span>Авторемонтная 18/5</span></div>
                </div>
                <a class="header__block_el_center_mobile" href="tel:+7 (3452) 57-70-10">+7 (3452) 57-70-10</a>
                <form class="header__block_el_center_search">
                    <input type="search" name="" placeholder="Поиск по товарам">
                    <!-- searchDropdown-блок: в style.css закомменчин display: flex; в данный момент у блока none  -->
                    <div class="searchDropdown">
                        <div class="searchDropdown_block">
                            <span class="searchDropdown_block_text">Микроволновая печь #2</span>
                            <span class="searchDropdown_block_text">Микроволновая печь #2</span>
                            <span class="searchDropdown_block_text">Микроволновая печь #2</span>
                            <span class="searchDropdown_block_text">Микроволновая печь #2</span>
                            <span class="searchDropdown_block_text">Микроволновая печь #2</span>
                        </div>
                        <div class="searchDropdown__itemBox">
                            <a href="/pages/catalog/product.php" class="searchDropdown__item">
                                <img src="/css/img/search.png" alt="">
                                <div class="searchDropdown__item_textBox">
                                    <span class="searchDropdown__item_textBox_text">Встраиваемая микроволновка Midea AG820BJU-SS</span>
                                    <div class="searchDropdown__item_textBox__priceBox">
                                        <span class="searchDropdown__item_textBox__priceBox_price">12 800 ₽</span>
                                        <span class="searchDropdown__item_textBox__priceBox__amount">Кол-во:<span class="searchDropdown__item_textBox__priceBox__amount_value">11/5</span></span>
                                    </div>
                                </div>
                                <button class="add__butt add__butt_flex"></button>
                            </a>
                            <a href="/pages/catalog/product.php" class="searchDropdown__item">
                                <img src="/css/img/search.png" alt="">
                                <div class="searchDropdown__item_textBox">
                                    <span class="searchDropdown__item_textBox_text">Встраиваемая микроволновка Midea AG820BJU-SS</span>
                                    <div class="searchDropdown__item_textBox__priceBox">
                                        <span class="searchDropdown__item_textBox__priceBox_price">12 800 ₽</span>
                                        <span class="searchDropdown__item_textBox__priceBox__amount">Кол-во:<span class="searchDropdown__item_textBox__priceBox__amount_value">11/5</span></span>
                                    </div>
                                </div>
                                <button class="add__butt add__butt_flex"></button>
                            </a>
                            <a href="/pages/catalog/product.php" class="searchDropdown__item">
                                <img src="/css/img/search.png" alt="">
                                <div class="searchDropdown__item_textBox">
                                    <span class="searchDropdown__item_textBox_text">Встраиваемая микроволновка Midea AG820BJU-SS</span>
                                    <div class="searchDropdown__item_textBox__priceBox">
                                        <span class="searchDropdown__item_textBox__priceBox_price">12 800 ₽</span>
                                        <span class="searchDropdown__item_textBox__priceBox__amount">Кол-во:<span class="searchDropdown__item_textBox__priceBox__amount_value">11/5</span></span>
                                    </div>
                                </div>
                                <button class="add__butt add__butt_flex"></button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="header__block_el_right">
                <nav class="nav__menu">
                    <a href="/pages/delivery/index.php">Доставка</a>
                    <a href="/pages/shares/index.php">Акции</a>
                    <a href="/pages/contacts/index.php">Контакты</a>
                </nav>
                <div class="button__menu_box">
                    <a class="button__menu come" href="#">Войти</a>
                    <a class="button__menu comparison" href="#">Сравнение</a>
                    <a class="button__menu favorites" href="/pages/favorites/index.php">Избранное</a>
                    <a class="button__menu shoppingCart" href="#">Корзина</a>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "MainComponent",
    data() {
        return {
            isActive: false
        }
    },
    created() {
        this.$bus.$on('closeCatalog',data=>{
            this.isActive = data.isActive
        })
    },
    methods:{
        openCatalog()
        {
            this.isActive = !this.isActive
            this.$bus.$emit('openCatalog',{
                isActive: this.isActive
            })
        }
    }
}
</script>

<style scoped>

</style>
