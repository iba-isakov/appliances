<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/libs/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/libs/slick.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/libs/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/libs/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/css/libs/jquery.fancybox.min.css"/>

    <link rel="stylesheet" type="text/css" href="/css/style.css?v01">
    <link rel="stylesheet" type="text/css" href="/css/media.css?v01">
</head>
<body>
    <div id="app" class="wrapper">
        <div class="header">
            <div class="header__block">
                <div class="header__block_el_left">
                    <a href="/index.php" class="header__block_el_left_logo">
                        <img src="/css/img/domu-logo.png" alt="">
                    </a>
                    <button id="button__open_catalog" class="butt_catalog"><span>Каталог товаров</span></button>
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
        @yield("content")
        <footer class="footer__box">
            <div class="footer__element_box">
                <div class="footer__element_one">
                    <div class="elm__logo">
                        <img src="/css/img/logo-footer.png" alt="">
                    </div>
                    <span class="elm__logo_text">BT72.RU - Интернет магазин
                    бытовой техники в Тюмени,
                    Работаем с 2014 года<br>
                    ООО "РегионКомплект"</span>
                    <a href="https://ww.net.ru/" class="text__left">
                        <div class="logoCom__left">
                            <img src="/css/img/ww-logo.png" alt="">
                        </div>
                        <span>Сайт разработан
                <br>в digital studio WW</span>
                    </a>
                </div>
                <div class="footer__element_two">
                    <div class="footer__list footer__list_mobile_pt">
                        <ul id="ul_oneOpen" class="footer__list_box">
                            <li><span>компания</span></li>
                            <li><a href="#">Вакансии</a></li>
                            <li><a href="/pages/news/index.php">Новости</a></li>
                            <li><a href="#">Персональные данные</a></li>
                            <li><a href="#">Проверка оплаты счета</a></li>
                            <li><a href="#">Партнерам</a></li>
                        </ul>
                    </div>
                    <div class="footer__list footer__list_mobile_pt">
                        <ul id="ul_threeOpen" class="footer__list_box">
                            <li><span>покупателям</span></li>
                            <li><a href="#">Бонусная программа</a></li>
                            <li><a href="#">Кредиты</a></li>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Обмен, возврат гарантия</a></li>
                            <li><a href="#">Способы оплаты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__element_three">
                    <ul class="footer__list_box">
                        <li><span>Контакты</span></li>
                    </ul>
                    <div class="footer__social">
                        <a class="social__item insta__footer" href="#"></a>
                        <a class="social__item youtube__footer" href="#"></a>
                        <a class="social__item telegram__footer" href="#"></a>
                        <a class="social__item wp__footer" href="#"></a>
                        <a class="social__item vb__footer" href="#"></a>
                    </div>
                    <form action="" class="footer__form">
                        <span>Рассылка о новостях и акциях</span>
                        <input type="text" placeholder="Введите e-mail">
                    </form>
                    <div class="contacts__footer">
                        <a class="tel" href="tel:+73452577010">+7 3452 57-70-10</a>
                        <a class="address" href="#">Тюмень, Авторемонтная 18/5</a>
                        <a class="mail" href="mailto:sale@bt72.ru">sale@bt72.ru</a>
                        <div class="footer__time">
                            <p><span>Пн-Пт:</span> 10:00 - 19:00</p>
                            <p><span class="span_pt">Сб:</span>11:00 - 16:00</p>
                            <p><span class="span_pt">Вс:</span>Выходной</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text__bott">
                <span>© 2021 REGIONKOM. Все права защищены</span>
                <a href="#">Политика конфиденциальности</a>
            </div>

            <div class="footer__nav_menu">
                <div class="button__menu_box">
                    <a class="button__menu home" href="/index.php">Главная</a>
                    <a class="button__menu come" href="#">Войти</a>
                    <div class="button__menu catalog">Каталог</div>
                    <a class="button__menu favorites" href="/pages/favorites/index.php">Избранное</a>
                    <a class="button__menu shoppingCart" href="#">Корзина</a>
                </div>
            </div>

            <a href="#" class="button__up">
                <img src="/css/img/butt__up.svg" alt="">
            </a>

        </footer>

        <div class="menu__catalog menu__mobile_catalog_open none" >
            <div class="menu__catalog_box">
                <div class="catalog__close_butt"></div>
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
                <header-catalog-component
                    :categories='@json(\App\Models\Category::getCategories())'
                    ></header-catalog-component>
            </div>
        </div>

        <div class="modal__enterBox">
        </div>

        <div class="modal__registration">
        </div>

        <div class="modal__smsCode">
        </div>

        <div class="modal__aboutProduct">
        </div>
    </div>

</body>
</html>
