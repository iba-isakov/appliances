<template>
    <div class="container" id="b1">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li><a href="#">Бытовая техника</a></li>
            <li><a href="/pages/categories/index.php/index.php">Водонагреватели</a></li>
            <li><a href="/pages/categories/index.php/index.php">Midea</a></li>
            <li>Водонагреватель Midea MWH-8015-CVM</li>
        </ul>
        <div class="container__title">
            <h1 class="container__title_h1">Водонагреватели Midea</h1>
            <span class="container__title_value">36 товаров</span>
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
                <button class="sort__box_buttonBox_line"></button>
                <button class="sort__box_buttonBox_square"></button>
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
                    <div class="slaider_three">
                        <!-- <a href="#" class="slaider__three_box">
                            <img src="/css/img/sl-three1.png" alt="">
                            <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                                    <span class="price_old">34 790 ₽</span>
                                    <span class="price_new">24 800 ₽</span>
                                </div>
                                <button class="add__butt"></button>
                            </div>
                            <div class="buttons_hover_box">
                                <button class="butt_hv _one"></button>
                                <button class="butt_hv _two"></button>
                            </div>
                        </a> -->
                        <a href="#" class="slaider__three_box">
                            <img src="/css/img/sl-three1.png" alt="">
                            <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                                    <span class="price_old">34 790 ₽</span>
                                    <span class="price_new">24 800 ₽</span>
                                </div>
                                <button class="add__butt"></button>
                            </div>
                            <div class="buttons_hover_box">
                                <button class="butt_hv _one"></button>
                                <button class="butt_hv _two"></button>
                            </div>
                        </a>
                        <a href="#" class="slaider__three_box">
                            <img src="/css/img/sl-three1.png" alt="">
                            <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                                    <span class="price_old">34 790 ₽</span>
                                    <span class="price_new">24 800 ₽</span>
                                </div>
                                <button class="add__butt"></button>
                            </div>
                            <div class="buttons_hover_box">
                                <button class="butt_hv _one"></button>
                                <button class="butt_hv _two"></button>
                            </div>
                        </a>
                        <a href="#" class="slaider__three_box">
                            <img src="/css/img/sl-three1.png" alt="">
                            <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                                    <span class="price_old">34 790 ₽</span>
                                    <span class="price_new">24 800 ₽</span>
                                </div>
                                <button class="add__butt"></button>
                            </div>
                            <div class="buttons_hover_box">
                                <button class="butt_hv _one"></button>
                                <button class="butt_hv _two"></button>
                            </div>
                        </a>
                        <a href="#" class="slaider__three_box">
                            <img src="/css/img/sl-three1.png" alt="">
                            <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                                    <span class="price_old">34 790 ₽</span>
                                    <span class="price_new">24 800 ₽</span>
                                </div>
                                <button class="add__butt"></button>
                            </div>
                            <div class="buttons_hover_box">
                                <button class="butt_hv _one"></button>
                                <button class="butt_hv _two"></button>
                            </div>
                        </a>
                    </div>
                    <div class="subcategories__item_modifiedBox">
                        <div class="subcategories__item_modifiedBox_element">
                            <a href="#" class="subcategories__item_modifiedBox_item">
                                <img src="/css/img/modified_img.png" alt="">
                                <div class="subcategories__item_modifiedBox_item_infoCenter">
                                <span class="subcategories__item_modifiedBox_item_infoCenter_title">Водонагреватель Midea MWH-8015-CVM, установка вертикальная,
                                                                                                    80 л, нержавеющая сталь, 2 кВт, 49.8 см x 95.5 см x 27.2 см
                                </span>
                                    <span class="value__product">В наличии:<span class="value__product_number">156шт</span></span>
                                    <span class="value__productCode">Код товара:<span class="value__productCodeNumber">153644567</span></span>
                                    <div class="subcategories__item_modifiedBox_item_iconInfo">
                                        <div class="subcategories__item_modifiedBox_item_iconInfo_icon">
                                            <img src="/css/img/iconInfo_img.svg" alt="">
                                        </div>
                                        <div class="subcategories__item_modifiedBox_item_iconInfo_icon">
                                            <img src="/css/img/iconInfo_img.svg" alt="">
                                        </div>
                                        <div class="subcategories__item_modifiedBox_item_iconInfo_icon">
                                            <img src="/css/img/iconInfo_img.svg" alt="">
                                        </div>
                                        <div class="subcategories__item_modifiedBox_item_iconInfo_icon">
                                            <img src="/css/img/iconInfo_img.svg" alt="">
                                        </div>
                                        <div class="subcategories__item_modifiedBox_item_iconInfo_icon">
                                            <img src="/css/img/iconInfo_img.svg" alt="">
                                        </div>
                                        <div class="subcategories__item_modifiedBox_item_iconInfo_icon">
                                            <img src="/css/img/iconInfo_img.svg" alt="">
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
                                        <span class="price_old">34 790 ₽</span>
                                        <span class="price_new">24 800 ₽</span>
                                    </div>
                                    <a href="#" class="subcategories__item_modifiedBox_item_infoRight_text">Рассрочка 12 месяцев</a>
                                    <div class="subcategories__item_modifiedBox_item_infoRight_buttons">
                                        <div class="button__favorites"></div>
                                        <div class="button__notify">Уведомить</div>
                                    </div>
                                </div>
                            </a>
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
        <div class="home__container_two">
            <div class="home__container_title">
                <span class="container_title_left">Вместе с этим товаром, чаще всего покупают</span>
            </div>
            <div class="slaider_three">
                <div class="prev"></div>
                <div class="next"></div>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
            </div>
        </div>
        <div class="home__container_two">
            <div class="home__container_title">
                <span class="container_title_left">Ранее просмотренные товары</span>
            </div>
            <div class="slaider_three">
                <div class="prev"></div>
                <div class="next"></div>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                <a href="#" class="slaider__three_box">
                    <img src="/css/img/sl-three1.png" alt="">
                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>
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
                            <span class="price_old">34 790 ₽</span>
                            <span class="price_new">24 800 ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
            </div>
        </div>
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
export default {
    name: "MainComponent",
    props:{
      category : Object,
        parentCategories: Array,
    },
    mounted() {
        let recaptchaScript = document.createElement('script')
        recaptchaScript.setAttribute('src', 'js/scripts.js')
        document.head.appendChild(recaptchaScript)
        console.log(this.category)
    },
    computed:{
        breadCrumbs(){
          let breadCrumbs = []
            this.parentCategories.forEach(function (category){
                breadCrumbs.push({
                    name: category.name,
                    id: category.id,
                })
            })
            return breadCrumbs.reverse()
        }
    },
}
</script>

<style scoped>

</style>
