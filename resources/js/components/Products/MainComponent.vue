<template>
    <div class="container" id="b1">
        <ul class="breadcrumb">
            <li></li>
            <li><a href="../../index.php">Главная</a></li>
            <li><a href="#">Бытовая техника</a></li>
            <li><a href="/pages/categories/index.php/index.php">Водонагреватели</a></li>
            <li>Midea</li>
        </ul>
        <div class="container__title">
            <h1 class="container__title_h1">{{product.name}}</h1>
        </div>
        <div class="sort__box">
            <div class="sort__box_boxElement">
                <div class="sort__box_itemBox sort__box_itemBox_flex">
                    <div class="sort__box_itemBox_item">
                        <div class="element__bottom_stars element__bottom_stars_product">
                            <ul class="reviews_star_list">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <span class="element__bottom_stars_text elm__color">15 отзывов</span>
                        </div>
                    </div>
                    <div class="sort__box_itemBox_item">
                        <div class="button__favorites button__favorites_product">В избранное</div>
                    </div>
                    <div class="sort__box_itemBox_item">
                        <label class="radio radio__mg">
                            <input class="element__bottom_compareBox_checkbox" type="checkbox"  name="checkbox">
                            <div class="element__bottom_compareBox_checkbox_check check__product elm__color">Добавить к сравнению</div>
                        </label>
                    </div>
                    <div class="sort__box_itemBox_item">
                        <div class="videoReviews__button">Видеообзоры</div>
                    </div>
                </div>
            </div>
            <div ckass="code__product">
                <span class="code__product_title_value"><span class="code__product_title">Код товара:</span>{{product.code}}</span>
            </div>
        </div>

        <div class="productCard__box">
            <div class="productCard__box_imgElement">
                <div class="productCard__box_imgElement_slider">
                    <div class="productCard__box_imgElement_slider_item">
                        <img src="/css/img/imgElement_slider_item1.png" alt="">
                    </div>
                    <div class="productCard__box_imgElement_slider_item">
                        <img src="/css/img/imgElement_slider_item2.png" alt="">
                    </div>
                    <div class="productCard__box_imgElement_slider_item">
                        <img src="/css/img/imgElement_slider_item3.png" alt="">
                    </div>
                    <div class="productCard__box_imgElement_slider_item">
                        <img src="/css/img/imgElement_slider_item4.png" alt="">
                    </div>
                    <div class="box_imgElement_slider_button"></div>
                </div>
                <img src="/css/img/imgElement_slider_itemBig.png" alt="">
            </div>
            <div class="productCard__box_textElement">
                <div class="productCard__box_textElement_topBlock">
                    <div class="topBlock_color">
                        <span class="topBlock_color_text">Цвет<span class="topBlock_color_text_value"> белый</span></span>
                        <div class="topBlock_color_itemBox">
                            <div class="topBlock_color_item">
                                <div class="topBlock_color_item_color1"></div>
                            </div>
                            <div class="topBlock_color_item">
                                <div class="topBlock_color_item_color2"></div>
                            </div>
                            <div class="topBlock_color_item">
                                <div class="topBlock_color_item_color3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="topBlock_promoCode">
                        <span class="topBlock_promoCode_title">Промокод:<span class="topBlock_promoCode_title_value">DoMu72</span></span>
                    </div>
                </div>
                <div class="subcategories__item_modifiedBox_item_iconInfo iconInfo_display">
                    <div class="subcategories__item_modifiedBox_item_iconInfo_icon iconInfo_icon_width">
                        <img src="/css/img/iconInfo_img1.svg" alt="">
                        <span>80Л</span>
                    </div>
                    <div class="subcategories__item_modifiedBox_item_iconInfo_icon iconInfo_icon_width">
                        <img src="/css/img/iconInfo_img2.svg" alt="">
                        <span>37-58C</span>
                    </div>
                    <div class="subcategories__item_modifiedBox_item_iconInfo_icon iconInfo_icon_width">
                        <img src="/css/img/iconInfo_img3.svg" alt="">
                        <span>2 кВт</span>
                    </div>
                </div>
                <div class="productCard__box_textElement_centerBlock">
                    <span class="productCard__box_textElement_centerBlock_title">Основные характеристики</span>
                    <div class="productCard__box_textElement_centerBlock_elements">
                        <span class="centerBlock_element_left">Тип товара</span>
                        <span class="centerBlock_element_right">Водонагреватель</span>
                    </div>
                    <div class="productCard__box_textElement_centerBlock_elements">
                        <span class="centerBlock_element_left">Производитель</span>
                        <span class="centerBlock_element_right">Midea</span>
                    </div>
                    <div class="productCard__box_textElement_centerBlock_elements">
                        <span class="centerBlock_element_left">Цвет</span>
                        <span class="centerBlock_element_right">Белый</span>
                    </div>
                    <div class="productCard__box_textElement_centerBlock_elements">
                        <span class="centerBlock_element_left">Производство</span>
                        <span class="centerBlock_element_right">Китай</span>
                    </div>
                    <div class="productCard__box_textElement_centerBlock_elements">
                        <span class="centerBlock_element_left">Гарантия</span>
                        <span class="centerBlock_element_right">1 год</span>
                    </div>
                    <div class="productCard__box_textElement_centerBlock_elements">
                        <span class="centerBlock_element_left">Тип водонагревателя</span>
                        <span class="centerBlock_element_right">Накопительный</span>
                    </div>
                    <a href="#" class="centerBlock_link">Перейти к описанию</a>
                </div>
                <div class="productCard__box_textElement_bottomBlock">
                    <button class="bottomBlock__buttonConsult">Получить консультацию</button>
                </div>
            </div>
            <div class="productCard__box_infoElement">
                <div class="productCard__box_infoElement_price">
                    <span class="productCard__box_infoElement_priceOld">34 790 ₽</span>
                    <span class="productCard__box_infoElement_priceNew">14 800 ₽</span>
                </div>
                <div class="productCard__box_infoElement_textBox">
                    <span class="productCard__box_infoElement_textBox_title">На выставке<span class="productCard__box_infoElement_textBox_value">Товар закончился</span></span>
                    <span class="productCard__box_infoElement_textBox_title">Склад Тюмень<span class="productCard__box_infoElement_textBox_value textBox_value_before textBox_value_before_style">В наличии</span></span>
                    <span class="productCard__box_infoElement_textBox_title">Кол-во баллов<span class="productCard__box_infoElement_textBox_value textBox_value_before_style">21</span></span>
                </div>
                <div class="productCard__box_infoElement_infoIcon">
                    <span class="productCard__box_infoElement_infoIcon_item infoIcon_item1">Узнать о поступлении товара</span>
                    <span class="productCard__box_infoElement_infoIcon_item infoIcon_item2 medium">Вместе с вами этот товар смотрят еще:<span class="infoIcon_item_value">7 человек</span></span>
                    <span class="productCard__box_infoElement_infoIcon_item infoIcon_item3 medium">Товар купили:<span class="infoIcon_item_value">170 раз</span></span>
                </div>
                <div class="productCard__box_buttonBlock">
                    <button class="productCard__box_buttonBlock_button">Добавить в корзину</button>
                    <span class="productCard__box_buttonBlock_text">Нашли дешевле? Снизим цену</span>
                </div>
                <div class="productCard__box_phoneBlock">
                    <span class="productCard__box_phoneBlock_text">Заказать:</span>
                    <a href="tel:+7 3452 57-70-10" class="productCard__box_phoneBlock_number">+7 3452 57-70-10</a>
                </div>
            </div>
        </div>

        <div class="home__container_four">
            <div class="tab__box">
                <button class="tablinks" onclick="openTab(event, 'Description')" id="defaultOpen">Описание</button>
                <button class="tablinks" onclick="openTab(event, 'Characteristics')">Характеристики</button>
                <button class="tablinks" onclick="openTab(event, 'Reviews')">Отзывы</button>
                <button class="tablinks" onclick="openTab(event, 'Certificates')">Сертификаты</button>
                <button class="tablinks" onclick="openTab(event, 'Instruction')">Инструкция</button>
                <div class="tab__box_line"></div>
            </div>
            <div id="Description" class="tabcontent tbcont">
                <div class="tab__box_elementBox">
                    <h2 class="tab__box_title_element">Описание товара</h2>
                    <p class="tab__box_elementBox_text">Ударная волна отталкивает наносекундный лептон. Струя синфазно стабилизирует вращательный погранслой, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Гомогенная среда, как и везде в пределах наблюдаемой вселенной, воспроизводима в лабораторных условиях. Кварк перманентно расщепляет бозе-конденсат по мере распространения сигнала в среде
                        с инверсной населенностью. Неоднородность, по данным астрономических наблюдений, отталкивает луч.</p>
                </div>
            </div>
            <div id="Characteristics" class="tabcontent tbcont">
                <div class="tab__box_elementBox tab__box_elementBox_width">
                    <h2 class="tab__box_title_element">Характеристики</h2>
                    <div class="tab__box_elementBox_characteristics characteristics_mg">
                        <div class="tab__box_elementBox_characteristics_title">Заводские данные <img src="/css/img/charac_str.svg" alt="" class="charac_str_style"></div>
                        <div class="tab__box_elementBox_characteristics_content">
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Гарантия</span>
                                <span class="characteristics_content_itemRight">1 год</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Производство</span>
                                <span class="characteristics_content_itemRight">Китай</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab__box_elementBox_characteristics">
                        <div class="tab__box_elementBox_characteristics_title">Основные характеристики <img src="/css/img/charac_str.svg" alt="" class="charac_str_style"></div>
                        <div class="tab__box_elementBox_characteristics_content">
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Тип товара</span>
                                <span class="characteristics_content_itemRight">Водонагреватель</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Производитель</span>
                                <span class="characteristics_content_itemRight">Midea</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Модель</span>
                                <span class="characteristics_content_itemRight">MWH-8015-CVM</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Тип водонагревателя</span>
                                <span class="characteristics_content_itemRight">Накопительный</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Цвет</span>
                                <span class="characteristics_content_itemRight">Белый</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Объем, л</span>
                                <span class="characteristics_content_itemRight">80</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Форма корпуса</span>
                                <span class="characteristics_content_itemRight">Цилиндрическая</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Точки водоразбора</span>
                                <span class="characteristics_content_itemRight">Напорный</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Тип термостата</span>
                                <span class="characteristics_content_itemRight">Капиллярный термостат</span>
                            </div>
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Диапазон рабочей температуры, °С</span>
                                <span class="characteristics_content_itemRight">30-75</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab__box_elementBox_characteristics">
                        <div class="tab__box_elementBox_characteristics_title">Дополнительная информация <img src="/css/img/charac_str.svg" alt="" class="charac_str_style"></div>
                        <div class="tab__box_elementBox_characteristics_content">
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Test</span>
                                <span class="characteristics_content_itemRight">Test 1234</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab__box_elementBox_characteristics">
                        <div class="tab__box_elementBox_characteristics_title">Питание и производительность <img src="/css/img/charac_str.svg" alt="" class="charac_str_style"></div>
                        <div class="tab__box_elementBox_characteristics_content">
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Test</span>
                                <span class="characteristics_content_itemRight">Test 1234</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab__box_elementBox_characteristics">
                        <div class="tab__box_elementBox_characteristics_title">Безопасность <img src="/css/img/charac_str.svg" alt="" class="charac_str_style"></div>
                        <div class="tab__box_elementBox_characteristics_content">
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Test</span>
                                <span class="characteristics_content_itemRight">Test 1234</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab__box_elementBox_characteristics">
                        <div class="tab__box_elementBox_characteristics_title">Габариты и вес <img src="/css/img/charac_str.svg" alt="" class="charac_str_style"></div>
                        <div class="tab__box_elementBox_characteristics_content">
                            <div class="characteristics_content_items">
                                <span class="characteristics_content_itemLeft">Test</span>
                                <span class="characteristics_content_itemRight">Test 1234</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab__box_elementBox_characteristics">
                        <button class="tab__box_elementBox_characteristics_consultationButton">Получить консультацию</button>
                    </div>
                </div>
            </div>
            <div id="Reviews" class="tabcontent tbcont">
                <div class="tab__box_elementBox">
                    <h2 class="tab__box_title_element">Отзывы о товаре</h2>
                    <div class="sort__box sort__box_border">
                        <div class="sort__box_boxElement sort__box_boxElement_mobile">
                            <span class="sort__box_title">Сортировать по:</span>
                            <div class="sort__box_itemBox">
                                <div class="sort__box_itemBox_item">Дате</div>
                                <div class="sort__box_itemBox_item">Оценке</div>
                                <div class="sort__box_itemBox_item">С фото</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab__box_elementBox_rseviews">
                        <div class="tab__box_elementBox_rseviews_left">
                            <div class="tab__box_elementBox_rseviews_left_top">
                                <div class="reviews__user_info">
                                    <img src="/css/img/user_reviews_photo.png" alt="">
                                    <div class="reviews__user_info_name">
                                        <span class="reviews__user_info_name_text">Андрей</span>
                                        <ul class="reviews_star_list">
                                            <li id="reviews_star_list_style"></li>
                                            <li id="reviews_star_list_style"></li>
                                            <li id="reviews_star_list_style"></li>
                                            <li id="reviews_star_list_style"></li>
                                            <li id="reviews_star_list_style"></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="tab__box_elementBox_rseviews_left_top_date">21 декабря 2021</span>
                            </div>
                            <p class="tab__box_elementBox_rseviews_left_center">Ударная волна отталкивает наносекундный лептон. Струя синфазно стабилизирует вращательный погранслой, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Гомогенная среда, как и везде в пределах наблюдаемой вселенной, воспроизводима в лабораторных условиях. Кварк перманентно расщепляет бозе-конденсат по мере распространения сигнала в среде
                                с инверсной населенностью. Неоднородность, по данным астрономических наблюдений, отталкивает луч.</p>
                        </div>
                        <div class="tab__box_elementBox_rseviews_right">
                            <div class="tab__box_elementBox_rseviews_right_top">
                                <div class="rseviews_right_top_content">
                                    <ul class="reviews_star_list">
                                        <li id="reviews_star_list_style"></li>
                                        <li id="reviews_star_list_style"></li>
                                        <li id="reviews_star_list_style"></li>
                                        <li id="reviews_star_list_style"></li>
                                        <li id="reviews_star_list_style"></li>
                                    </ul>
                                    <span>4,5<span>/5</span></span>
                                </div>
                            </div>
                            <div class="tab__box_elementBox_rseviews_right_center">
                                <div class="amount__star_box">
                                    <div class="amount__star_box_item">
                                        <span class="amount__star_box_item_text">5 звезд</span>
                                        <div class="amount__star_box_item_line">
                                            <div class="amount__star_box_item_line_active width__all"></div>
                                        </div>
                                        <span class="amount__star_box_item_text">14</span>
                                    </div>
                                    <div class="amount__star_box_item">
                                        <span class="amount__star_box_item_text">4 звезд</span>
                                        <div class="amount__star_box_item_line">
                                            <div class="amount__star_box_item_line_active width__medium"></div>
                                        </div>
                                        <span class="amount__star_box_item_text">10</span>
                                    </div>
                                    <div class="amount__star_box_item">
                                        <span class="amount__star_box_item_text">3 звезд</span>
                                        <div class="amount__star_box_item_line">
                                            <div class="amount__star_box_item_line_active width__small"></div>
                                        </div>
                                        <span class="amount__star_box_item_text">0</span>
                                    </div>
                                    <div class="amount__star_box_item">
                                        <span class="amount__star_box_item_text">2 звезд</span>
                                        <div class="amount__star_box_item_line">
                                            <div class="amount__star_box_item_line_active width__small"></div>
                                        </div>
                                        <span class="amount__star_box_item_text">0</span>
                                    </div>
                                    <div class="amount__star_box_item">
                                        <span class="amount__star_box_item_text">1 звезд</span>
                                        <div class="amount__star_box_item_line">
                                            <div class="amount__star_box_item_line_active width__light"></div>
                                        </div>
                                        <span class="amount__star_box_item_text">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab__box_elementBox_rseviews_right_bottom">
                                <button class="write__review">Написать отзыв</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Certificates" class="tabcontent tbcont">
                <div class="tab__box_elementBox">
                    <!-- <div class="home__container_nine home__container_eleven">
                        <div class="home__container_title">
                            <span class="container_title_left">Видеообзоры на товары</span>
                        </div>
                        <div class="video__box slaider_five">
                            <div class="prev"></div>
                            <div class="next"></div>
                            <div class="slaider_five_item">
                                <iframe class="video__style" width="208" height="150" src="https://www.youtube.com/embed/OeJuH0zX5fg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span class="title__video_text">Видео №1</span>
                            </div>
                            <div class="slaider_five_item">
                                <iframe class="video__style" width="208" height="150" src="https://www.youtube.com/embed/OeJuH0zX5fg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span class="title__video_text">Видео №2</span>
                            </div>
                            <div class="slaider_five_item">
                                <iframe class="video__style" width="208" height="150" src="https://www.youtube.com/embed/OeJuH0zX5fg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span class="title__video_text">Видео №3</span>
                            </div>
                            <div class="slaider_five_item">
                                <iframe class="video__style" width="208" height="150" src="https://www.youtube.com/embed/OeJuH0zX5fg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span class="title__video_text">Видео №4</span>
                            </div>
                            <div class="slaider_five_item">
                                <iframe class="video__style" width="208" height="150" src="https://www.youtube.com/embed/OeJuH0zX5fg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span class="title__video_text">Видео №5</span>
                            </div>
                            <div class="slaider_five_item">
                                <iframe class="video__style" width="208" height="150" src="https://www.youtube.com/embed/OeJuH0zX5fg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <span class="title__video_text">Видео №6</span>
                            </div>
                        </div>
                    </div> -->
                    <div class="home__container_two">
                        <div class="home__container_title home__container_title__margin">
                            <span class="container_title_left">Документация и сертификаты</span>
                        </div>
                        <div class="slaider_three">
                            <div class="prev"></div>
                            <div class="next"></div>
                            <a href="#" class="slaider__three_box">
                                <img src="/css/img/certificates1.png" alt="">
                            </a>
                            <a href="#" class="slaider__three_box">
                                <img src="/css/img/certificates2.png" alt="">
                            </a>
                            <a href="#" class="slaider__three_box">
                                <img src="/css/img/certificates1.png" alt="">
                            </a>
                            <a href="#" class="slaider__three_box">
                                <img src="/css/img/certificates2.png" alt="">
                            </a>
                            <a href="#" class="slaider__three_box">
                                <img src="/css/img/certificates1.png" alt="">
                            </a>
                            <a href="#" class="slaider__three_box">
                                <img src="/css/img/certificates2.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Instruction" class="tabcontent tbcont">
                <div class="tab__box_elementBox">
                    <a class="certificates__link" href="/css/test.txt" download>Инструкция по использованию. pdf</a>
                </div>
            </div>
        </div>

        <div class="home__container_two">
            <div class="home__container_title">
                <span class="container_title_left">Рекомендуемые товары</span>
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
        <div class="seo__container">
            <div class="seo__container_box">
                <span class="seo__container_box_title">Сeo-текст</span>
                <span class="seo__container_box_text">
                Ударная волна отталкивает наносекундный лептон. Струя синфазно стабилизирует вращательный погранслой, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Гомогенная среда, как и везде в пределах наблюдаемой вселенной, воспроизводима в лабораторных условиях. Кварк перманентно расщепляет бозе-конденсат по мере распространения сигнала в среде с инверсной населенностью. Неоднородность, по данным астрономических наблюдений, отталкивает луч.

               <span>Ударная волна отталкивает наносекундный лептон. Струя синфазно стабилизирует вращательный погранслой, но никакие ухищрения экспериментаторов не позволят наблюдать этот эффект в видимом диапазоне. Гомогенная среда, как и везде в пределах наблюдаемой вселенной, воспроизводима в лабораторных условиях. Кварк перманентно расщепляет бозе-конденсат по мере распространения сигнала в среде с инверсной населенностью. Неоднородность, по данным астрономических наблюдений, отталкивает луч.</span>
            </span>
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
      product: Object,
    },
    mounted() {
        let recaptchaScript = document.createElement('script')
        recaptchaScript.setAttribute('src', 'js/scripts.js')
        document.head.appendChild(recaptchaScript)
    }

}
</script>

<style scoped>

</style>
