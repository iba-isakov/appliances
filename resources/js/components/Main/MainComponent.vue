<template>
    <div class="container" id="b1">
        <div class="home__container_one__mobileBlock">
            <div class="home__container_one__mobileBlock_item">
                <img src="/css/img/mobile_icon.svg" alt="">
                <span class="home__container_one__mobileBlock_item_text">Авторизуйтесь,<br>чтобы получить скидку до <span class="home__container_one__mobileBlock_item_text_color">20%</span></span>
            </div>
            <div class="home__container_one__mobileBlock_item">
                <img src="/css/img/mobile_icon1.svg" alt="">
                <span class="home__container_one__mobileBlock_item_text">Бесплатное хранение заказа</span>
            </div>
        </div>
        <div class="home__container_one">
            <div class="slaider__one slaider__one_desktop">
                <a href="/pages/shares/index.php" class="slaider__one_box">
                    <img src="/css/img/sl-one.png" alt="">
                </a>
            </div>
            <div class="slaider__one slaider__one_mobile">
                <a href="/pages/shares/index.php" class="slaider__one_box">
                    <img src="/css/img/test_slider.png" alt="">
                </a>
                <a href="/pages/shares/index.php" class="slaider__one_box test__block_img">
                    <img src="/css/img/test_slider.png" alt="">
                </a>
                <a href="/pages/shares/index.php" class="slaider__one_box test__block_img">
                    <img src="/css/img/test_slider.png" alt="">
                </a>
            </div>
            <div class="slaider_two">
                <a href="/pages/shares/index.php" class="slaider__two_box">
                    <img src="/css/img/sl-two-1.png" alt="">
                </a>
                <a href="/pages/shares/index.php" class="slaider__two_box">
                    <img src="/css/img/sl-two-2.png" alt="">
                </a>
                <a href="/pages/shares/index.php" class="slaider__two_box">
                    <img src="/css/img/sl-two-3.png" alt="">
                </a>
                <a href="/pages/shares/index.php" class="slaider__two_box">
                    <img src="/css/img/sl-two-4.png" alt="">
                </a>
            </div>
            <div class="home__container_one_link_box">
                <span class="link__box_title">Акции</span>
                <ul class="link__box_list">
                    <li><a href="/pages/shares/index.php">Тип акций №1</a></li>
                    <li><a href="/pages/shares/index.php">Рассрочка</a></li>
                    <li><a href="/pages/shares/index.php">Сезонные акции</a></li>
                    <li><a href="/pages/shares/index.php">Тип акций №2</a></li>
                </ul>
                <a href="/pages/shares/index.php" class="all_butt">Все акции</a>
            </div>
        </div>
        <div class="home__container_two">
            <div class="home__container_title">
                <span class="container_title_left">Популярные товары</span>
                <a href="#" class="container_title_right">Посмотреть все товары</a>
            </div>
            <carousel class="slaider_three"
                      :navigationNextLabel="`<img src='/css/img/next.png'>`"
                      :navigationPrevLabel="`<img src='/css/img/prev.png'>`"
                      :navigationEnabled="true"
                      :paginationEnabled="false"
                      :perPage="6"
            >
                <slide v-for="product in products">
                <a  :href="`product/${product.id}`" class="slaider__three_box">
                    <img src="/css/img/nophoto.jpg" alt="">
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
                            <span class="price_old">{{product.retail_price}} ₽</span>
                            <span class="price_new">{{product.crossed_out_price}} ₽</span>
                        </div>
                        <button class="add__butt"></button>
                    </div>
                    <div class="buttons_hover_box">
                        <button class="butt_hv _one"></button>
                        <button class="butt_hv _two"></button>
                    </div>
                </a>
                </slide>
            </carousel>
<!--                <a href="#" class="slaider__three_box">-->
<!--                    <img src="/css/img/sl-three1.png" alt="">-->
<!--                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>-->
<!--                    <div class="slaider__three_box_reviews">-->
<!--                        <ul class="reviews_star_list">-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                        </ul>-->
<!--                        <span class="slaider__three_box_reviews_text">Отзывы (2)</span>-->
<!--                    </div>-->
<!--                    <div class="slaider_three_price">-->
<!--                        <div class="price_box_value">-->
<!--                            <span class="price_old">34 790 ₽</span>-->
<!--                            <span class="price_new">24 800 ₽</span>-->
<!--                        </div>-->
<!--                        <button class="add__butt"></button>-->
<!--                    </div>-->
<!--                    <div class="buttons_hover_box">-->
<!--                        <button class="butt_hv _one"></button>-->
<!--                        <button class="butt_hv _two"></button>-->
<!--                    </div>-->
<!--                </a>-->
<!--                <a href="#" class="slaider__three_box">-->
<!--                    <img src="/css/img/sl-three1.png" alt="">-->
<!--                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>-->
<!--                    <div class="slaider__three_box_reviews">-->
<!--                        <ul class="reviews_star_list">-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                        </ul>-->
<!--                        <span class="slaider__three_box_reviews_text">Отзывы (2)</span>-->
<!--                    </div>-->
<!--                    <div class="slaider_three_price">-->
<!--                        <div class="price_box_value">-->
<!--                            <span class="price_old">34 790 ₽</span>-->
<!--                            <span class="price_new">24 800 ₽</span>-->
<!--                        </div>-->
<!--                        <button class="add__butt"></button>-->
<!--                    </div>-->
<!--                    <div class="buttons_hover_box">-->
<!--                        <button class="butt_hv _one"></button>-->
<!--                        <button class="butt_hv _two"></button>-->
<!--                    </div>-->
<!--                </a>-->
<!--                <a href="#" class="slaider__three_box">-->
<!--                    <img src="/css/img/sl-three1.png" alt="">-->
<!--                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>-->
<!--                    <div class="slaider__three_box_reviews">-->
<!--                        <ul class="reviews_star_list">-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                        </ul>-->
<!--                        <span class="slaider__three_box_reviews_text">Отзывы (2)</span>-->
<!--                    </div>-->
<!--                    <div class="slaider_three_price">-->
<!--                        <div class="price_box_value">-->
<!--                            <span class="price_old">34 790 ₽</span>-->
<!--                            <span class="price_new">24 800 ₽</span>-->
<!--                        </div>-->
<!--                        <button class="add__butt"></button>-->
<!--                    </div>-->
<!--                    <div class="buttons_hover_box">-->
<!--                        <button class="butt_hv _one"></button>-->
<!--                        <button class="butt_hv _two"></button>-->
<!--                    </div>-->
<!--                </a>-->
<!--                <a href="#" class="slaider__three_box">-->
<!--                    <img src="/css/img/sl-three1.png" alt="">-->
<!--                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>-->
<!--                    <div class="slaider__three_box_reviews">-->
<!--                        <ul class="reviews_star_list">-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                        </ul>-->
<!--                        <span class="slaider__three_box_reviews_text">Отзывы (2)</span>-->
<!--                    </div>-->
<!--                    <div class="slaider_three_price">-->
<!--                        <div class="price_box_value">-->
<!--                            <span class="price_old">34 790 ₽</span>-->
<!--                            <span class="price_new">24 800 ₽</span>-->
<!--                        </div>-->
<!--                        <button class="add__butt"></button>-->
<!--                    </div>-->
<!--                    <div class="buttons_hover_box">-->
<!--                        <button class="butt_hv _one"></button>-->
<!--                        <button class="butt_hv _two"></button>-->
<!--                    </div>-->
<!--                </a>-->
<!--                <a href="#" class="slaider__three_box">-->
<!--                    <img src="/css/img/sl-three1.png" alt="">-->
<!--                    <span class="slaider__three_box_text">Духовой шкаф Midea MO78100CX</span>-->
<!--                    <div class="slaider__three_box_reviews">-->
<!--                        <ul class="reviews_star_list">-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                            <li></li>-->
<!--                        </ul>-->
<!--                        <span class="slaider__three_box_reviews_text">Отзывы (2)</span>-->
<!--                    </div>-->
<!--                    <div class="slaider_three_price">-->
<!--                        <div class="price_box_value">-->
<!--                            <span class="price_old">34 790 ₽</span>-->
<!--                            <span class="price_new">24 800 ₽</span>-->
<!--                        </div>-->
<!--                        <button class="add__butt"></button>-->
<!--                    </div>-->
<!--                    <div class="buttons_hover_box">-->
<!--                        <button class="butt_hv _one"></button>-->
<!--                        <button class="butt_hv _two"></button>-->
<!--                    </div>-->
<!--                </a>-->
        </div>
        <div class="home__container_three">
            <img src="/css/img/rssrochka.png" alt="">
            <a href="/pages/shares/index.php" class="home__container_three_butt">Подробнее</a>
        </div>
        <div class="home__container_four">
            <div class="tab__box">
                <button class="tablinks" onclick="openTab(event, 'Faucets')" id="defaultOpen">Смесители</button>
                <button class="tablinks" onclick="openTab(event, 'Accessories')">Аксессуары</button>
                <button class="tablinks" onclick="openTab(event, 'KitchenSinks')">Кухонные мойки</button>
            </div>
            <div id="Faucets" class="tabcontent tbcont">
                <div class="slaider__four">
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="slaider__four_box slaider__three_box">
                        <img src="/css/img/sl-four1.png" alt="">
                        <div class="slaider__four_text_oneElement">
                            <span class="text_oneElement_center">Кухонная <br>сантехника</span>
                            <a href="#" class="text_oneElement_bottom">Перейти в каталог</a>
                        </div>
                    </div>
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
            <div id="Accessories" class="tabcontent tbcont">
                TEST CHIPIGI
            </div>
            <div id="KitchenSinks" class="tabcontent tbcont">
                TEST CHIPIGI
            </div>
        </div>
        <div class="home__container_five">
            <div class="icon__box">
                <div class="icon__box_item">
                    <img src="/css/img/icon1.png" alt="">
                    <span>Авторизуйтесь, чтобы получить скидку до 20%</span>
                </div>
                <div class="icon__box_item">
                    <img src="/css/img/icon2.png" alt="">
                    <span>Бесплатное хранение заказа</span>
                </div>
                <div class="icon__box_item">
                    <img src="/css/img/icon3.png" alt="">
                    <span>Страхование техники от утраты и повреждений</span>
                </div>
                <div class="icon__box_item">
                    <img src="/css/img/icon5.png" alt="">
                    <span>Любые способы оплаты покупок</span>
                </div>
            </div>
        </div>
        <div class="home__container_six">
            <div class="tab__box">
                <div class="test__butt">
                    <button class="tablinks tablink" onclick="openTabs(event, 'Faucet')" id="defOpen">Смесители</button>
                </div>
                <div class="test__butt">
                    <button class="tablinks tablink" onclick="openTabs(event, 'Hobs')">Варочные поверхности</button>
                </div>
                <div class="test__butt">
                    <button class="tablinks tablink" onclick="openTabs(event, 'Ovens')">Духовые шкафы</button>
                </div>
                <div class="test__butt">
                    <button class="tablinks tablink" onclick="openTabs(event, 'Dishwashers')">Посудомоечные машины</button>
                </div>
                <div class="test__butt">
                    <button class="tablinks tablink" onclick="openTabs(event, 'microwaves')">Микроволновые печи</button>
                </div>
                <div class="test__butt">
                    <button class="tablinks tablink" onclick="openTabs(event, 'Refrigerators')">Холодильники и морозильники</button>
                </div>
                <div class="test__butt">
                    <button class="tablinks tablink" onclick="openTabs(event, 'Washing')">Стиральные машины</button>
                </div>
            </div>
            <div id="Faucet" class="tabcontent tabcont">
                <div class="slaider__four">
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="slaider__four_box slaider__three_box">
                        <img src="/css/img/ct6.png" alt="">
                        <div class="slaider__four_text_oneElement">
                            <span class="text_oneElement_center">Встраиваемая<br>техника</span>
                            <a href="#" class="text_oneElement_bottom">Перейти в каталог</a>
                        </div>
                    </div>
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
            <div id="Hobs" class="tabcontent tabcont">
                TEST CHIPIGI
            </div>
            <div id="Ovens" class="tabcontent tabcont">
                TEST CHIPIGI
            </div>
            <div id="Dishwashers" class="tabcontent tabcont">
                TEST CHIPIGI
            </div>
            <div id="microwaves" class="tabcontent tabcont">
                TEST CHIPIGI
            </div>
            <div id="Refrigerators" class="tabcontent tabcont">
                TEST CHIPIGI
            </div>
            <div id="Washing" class="tabcontent tabcont">
                TEST CHIPIGI
            </div>
        </div>
        <div class="home__container_seven">
            <div class="tab__box">
                <button class="tablinks tblinks" onclick="openTb(event, 'WaterHeaters')" id="dfOpen">Водонагреватели</button>
                <button class="tablinks tblinks" onclick="openTb(event, 'microwave')">Микроволновые печи</button>
                <button class="tablinks tblinks" onclick="openTb(event, 'Access')">Аксессуары</button>
                <button class="tablinks tblinks" onclick="openTb(event, 'Dishwasher')">Посудомоечные машины</button>
                <button class="tablinks tblinks" onclick="openTb(event, 'dryers')">Стиральные и сушильные машины</button>
                <button class="tablinks tblinks" onclick="openTb(event, 'freezers')">Холодильники и морозильники</button>
            </div>
            <div id="WaterHeaters" class="tabcontent tbcontent">
                <div class="slaider__four">
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="slaider__four_box slaider__three_box">
                        <img src="/css/img/ct7.png" alt="">
                        <div class="slaider__four_text_oneElement">
                            <span class="text_oneElement_center">Бытовая<br>техника</span>
                            <a href="#" class="text_oneElement_bottom">Перейти в каталог</a>
                        </div>
                    </div>
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
            <div id="microwave" class="tabcontent tbcontent">
                TEST CHIPIGI
            </div>
            <div id="Access" class="tabcontent tbcontent">
                TEST CHIPIGI
            </div>
            <div id="Dishwasher" class="tabcontent tbcontent">
                TEST CHIPIGI
            </div>
            <div id="dryers" class="tabcontent tbcontent">
                TEST CHIPIGI
            </div>
            <div id="freezers" class="tabcontent tbcontent">
                TEST CHIPIGI
            </div>
        </div>
        <div class="home__container_eight">
            <div class="images__box">
                <div class="images__box_item">
                    <img src="/css/img/Korting.png" alt="">
                </div>
                <div class="images__box_item">
                    <img src="/css/img/Midea.png" alt="">
                </div>
                <div class="images__box_item">
                    <img src="/css/img/Teka.png" alt="">
                </div>
                <div class="images__box_item">
                    <img src="/css/img/elikor.png" alt="">
                </div>
                <div class="images__box_item">
                    <img src="/css/img/elica.png" alt="">
                </div>
                <div class="images__box_item">
                    <img src="/css/img/bosch.png" alt="">
                </div>
                <div class="images__box_item">
                    <img src="/css/img/comfee.png" alt="">
                </div>
            </div>
        </div>

        <div class="home__container_element_mobile">
            <div class="home__container_element_mobile_box">
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm1.png" alt="">
                    <span>Сплит-системы</span>
                </div>
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm2.png" alt="">
                    <span>Вытяжки для кухни</span>
                </div>
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm3.png" alt="">
                    <span>Встраиваемая техника</span>
                </div>
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm4.png" alt="">
                    <span>Бытовая техника</span>
                </div>
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm5.png" alt="">
                    <span>Кухонная сантехника</span>
                </div>
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm6.png" alt="">
                    <span>Мелкая бытовая техника</span>
                </div>
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm7.png" alt="">
                    <span>Посуда и средства за уходом</span>
                </div>
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm8.png" alt="">
                    <span>Уценка</span>
                </div>
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm9.png" alt="">
                    <span>Распродажа</span>
                </div>
                <div class="home__container_element_mobile_box_item">
                    <img src="/css/img/img_mobile_itm10.png" alt="">
                    <span>Бренды</span>
                </div>
            </div>
        </div>
        <div class="home__container_one home__container_one_mobile">
            <div class="slaider__one slaider__one_mobile">
                <div class="slaider__one_box">
                    <img src="/css/img/test_slider.png" alt="">
                </div>
                <div class="slaider__one_box test__block_img">
                    <img src="/css/img/test_slider.png" alt="">
                </div>
                <div class="slaider__one_box test__block_img">
                    <img src="/css/img/test_slider.png" alt="">
                </div>
            </div>
        </div>
        <div class="home__container_element_mobile">
            <div class="home__container_element_mobile_box">
                <a href="/pages/delivery/index.php" class="element_mobile_box_item">
                    <img src="/css/img/directions_car.svg" alt="">
                    <span>Доставка товаров</span>
                </a>
                <a href="/pages/shares/index.php" class="element_mobile_box_item">
                    <img src="/css/img/akc.png" alt="">
                    <span>Акции и скидки</span>
                </a>
                <a href="#" class="element_mobile_box_item">
                    <img src="/css/img/icon_ph.svg" alt="">
                    <span>Контакты</span>
                </a>
            </div>
        </div>

        <div class="home__container_nine">
            <div class="home__container_nine_title">
                <span class="title__box">Midea</span>
            </div>
            <div class="slaider__four">
                <div class="prev"></div>
                <div class="next"></div>
                <div class="slaider__four_box slaider__three_box">
                    <img src="/css/img/ct7.png" alt="">
                    <div class="slaider__four_text_oneElement position__text">
                        <span class="text_oneElement_center">Мелкая бытовая<br>техника</span>
                        <a href="#" class="text_oneElement_bottom">Перейти в каталог</a>
                    </div>
                </div>
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
        <div class="home__container_nine home__container_ten">
            <div class="home__container_title">
                <span class="container_title_left">Новости</span>
                <a href="/pages/shares/index.php" class="container_title_right">Посмотреть все новости</a>
            </div>
            <div class="news__box">
                <a href="/pages/news/article.php" class="news__box_item">
                    <div class="news__box_item_img">
                        <img src="/css/img/image 29.png" alt="">
                        <div class="news__box_item_img-teg">Статья</div>
                    </div>
                    <div class="news__box_item_title">
                        <span class="news__box_item_title_span-left">Заголовок новости</span>
                        <span class="news__box_item_title_span-right">8 сентября</span>
                    </div>
                    <div class="news__box_item_text">
                        <div>Бином Ньютона, конечно, отражает линейно зависимый интеграл от функции, обращающейся...</div>
                    </div>
                </a>
                <a href="/pages/news/article.php" class="news__box_item">
                    <div class="news__box_item_img">
                        <img src="/css/img/image 28.png" alt="">
                        <div class="news__box_item_img-teg">Видеообзор</div>
                    </div>
                    <div class="news__box_item_title">
                        <span class="news__box_item_title_span-left">Заголовок новости</span>
                        <span class="news__box_item_title_span-right">8 сентября</span>
                    </div>
                    <div class="news__box_item_text">
                        <div>Бином Ньютона, конечно, отражает линейно зависимый интеграл от функции, обращающейся...</div>
                    </div>
                </a>
                <div class="news__box_item item_linkAll">
                    <a href="/pages/news/index.php" class="news__box_item_linkAll">Читать все новости</a>
                </div>
            </div>
        </div>
        <div class="home__container_nine home__container_eleven">
            <div class="home__container_title">
                <span class="container_title_left">Видеообзоры на товары</span>
            </div>
            <div class="video__box slaider_five">
                <div class="prev"></div>
                <div class="next"></div>>
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
import { Carousel, Slide } from "vue-carousel";
export default {
    name: "MainComponent",
    props: {
        products: Array,
    },
    mounted() {
        let recaptchaScript = document.createElement('script')
        recaptchaScript.setAttribute('src', 'js/scripts.js')
        document.head.appendChild(recaptchaScript)
    },
    components:{
        Carousel,
        Slide,
    }
}
</script>

<style scoped>

</style>
