<template>
    <div class="container" id="b1">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li v-for="breadCrumb in breadCrumbs"><a :href="`/category/${breadCrumb.id}`">{{breadCrumb.name}}</a></li>
            <li><a :href="`/category/${category.id}`">{{ category.name }}</a></li>
        </ul>
        <div class="container__title">
            <h1 class="container__title_h1">{{category.name}}</h1>
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
            </div>
            <div class="container__top_right">
                <div class="img_akchia">
                    <img src="/css/img/Group 6601.png" alt="">
                </div>
                <div class="categories__box">
                    <a href="/pages/subcategories/index.php" class="categories__box_item">
                        <img src="/css/img/sl-three1.png" alt="">
                        <div class="categories__box_item_text">
                            <span>Korting </span>
                            <span>25 шт</span>
                        </div>
                    </a>
                    <a href="/pages/subcategories/index.php" class="categories__box_item">
                        <img src="/css/img/sl-three1.png" alt="">
                        <div class="categories__box_item_text">
                            <span>Korting </span>
                            <span>25 шт</span>
                        </div>
                    </a>
                    <a href="/pages/subcategories/index.php" class="categories__box_item">
                        <img src="/css/img/sl-three1.png" alt="">
                        <div class="categories__box_item_text">
                            <span>Korting </span>
                            <span>25 шт</span>
                        </div>
                    </a>
                    <a href="/pages/subcategories/index.php" class="categories__box_item">
                        <img src="/css/img/sl-three1.png" alt="">
                        <div class="categories__box_item_text">
                            <span>Korting </span>
                            <span>25 шт</span>
                        </div>
                    </a>
                </div>
                <div class="home__container_two">
                    <div class="home__container_title">
                        <span class="container_title_left">Популярные товары в категории</span>
                    </div>
                    <div class="slaider_three">
                        <div class="prev"></div>
                        <div class="next"></div>
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
                </div>
            </div>
        </div>
        <div class="home__container_two">
            <div class="slaider_three">
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
            <div class="slaider_three">
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
            <div class="slaider_three">
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
            <div class="slaider_three">
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
        <div class="seo__container">
            <div class="seo__container_box">
                <span class="seo__container_box_title">Сeo-текст</span>
                <span class="seo__container_box_text">
                Ударная волна отталкивает наносекундный лептон. Струя синфазно стабилизирует вращательный погранслой, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Гомогенная среда, как и везде в пределах наблюдаемой вселенной, воспроизводима в лабораторных условиях. Кварк перманентно расщепляет бозе-конденсат по мере распространения сигнала в среде с инверсной населенностью. Неоднородность, по данным астрономических наблюдений, отталкивает луч.

               <span>Ударная волна отталкивает наносекундный лептон. Струя синфазно стабилизирует вращательный погранслой, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Гомогенная среда, как и везде в пределах наблюдаемой вселенной, воспроизводима в лабораторных условиях. Кварк перманентно расщепляет бозе-конденсат по мере распространения сигнала в среде с инверсной населенностью. Неоднородность, по данным астрономических наблюдений, отталкивает луч.</span>
            </span>
            </div>
        </div>
        <div class="home__container_nine home__container_twelve">
            <div class="reviews__box slaider_six">
                <div class="slaider_six_item">
                    <div class="slaider_six_item_user">
                        <img src="/css/img/Ellipse 40.png" alt="">
                        <span class="slaider_six_item_user_name">Иван Петров</span>
                    </div>
                    <p class="slaider_six_item_text">
                        Экстремум функции, общеизвестно, продуцирует невероятный интеграл
                        от функции, обращающейся в бесконечность в изолированной точке. Интеграл по бесконечной области проецирует невероятный криволинейный интеграл.
                    </p>
                    <button class="slaider_six_item_butt">Все отзывы</button>
                    <img class="slaider_six_item_imgOne-position" src="/css/img/iphone.png" alt="">
                    <img class="slaider_six_item_imgTwo-position" src="/css/img/cot1.png" alt="">
                </div>
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
      category: Object,
        parentCategories: Array,
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
