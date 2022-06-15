/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/scripts.js ***!
  \*********************************/
// перенос блоков
$(document).ready(function ($) {
  // перенос блоков при загрузке экрана
  if ($(window).width() < 1025) {
    $('.dropdown_box').prependTo('.menu__catalog_box');
    $('.search__catalog').appendTo('.menu__catalog_box');
  } else {
    $('.dropdown_box').prependTo('.header__block_el_center');
    $('.search__catalog').appendTo('.header__block_el_left_mobile');
  } // перенос блоков при изменении ширины экрана


  $(window).on('resize', function () {
    if ($(window).width() < 1025) {
      $('.dropdown_box').prependTo('.menu__catalog_box');
      $('.search__catalog').appendTo('.menu__catalog_box');
    } else {
      $('.dropdown_box').prependTo('.header__block_el_center');
      $('.search__catalog').appendTo('.header__block_el_left_mobile');
    }
  });
}); // open catalog button
// $('#button__open_catalog, .catalog__close_butt, .catalog').on('click',function () {
//   $('.menu__mobile_catalog_open').toggleClass('flex none');
// });
// open filter button

$('.filter__box_close, .open__filter__box').on('click', function () {
  $('.container__top_left').toggleClass('flex');
}); // активная вкладка в избранном

$('.filter__favorites_item').on('click', function () {
  $(this).toggleClass('filter__favorites_item_active');
});
$('.filter__favorites_item').on('click', function () {
  $(this).children('.filter__favorites_item_value').toggleClass('flex');
}); // footer мобилка открытие списков

$('#ul_oneOpen, #ul_twoOpen, #ul_threeOpen').on('click', function () {
  $(this).toggleClass('footer__list_box_openAll');
}); // открытие характеристик

$('.tab__box_elementBox_characteristics').on('click', function () {
  $(this).children('.tab__box_elementBox_characteristics_content').toggleClass('flex');
  $(this).children('.charac_str_style').toggleClass('charac_str_style_transform');
});
$('.tab__box_elementBox_characteristics_title').on('click', function () {
  $(this).children('.charac_str_style').toggleClass('charac_str_style_transform');
}); // переворот шеврона у каталога
// $('.catalog__block_list_item').on('click',function () {
//   $(this).children('.chevron__catalog').toggleClass('chevron__catalog_style');
// });
// Реакция на "свернуть все окна" в корзине

$('.slideWindow').on('click', function () {
  $(this).siblings('.slideWindow__target').toggleClass('slideWindow__target_active');
  $(this).find('.slideWindow__img').toggleClass('slideWindow__img_rotate');
}); // Tabs click

function openTab(evt, tabName) {
  // Объявить все переменные
  var i, tabcontent, tablinks; // Получить все элементы с помощью class="tabcontent" и спрятать их

  tabcontent = document.getElementsByClassName("tbcont");

  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  } // Получить все элементы с помощью class="tablinks" и удалить class "active"


  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  } // Показать текущую вкладку и добавить "active" класс для кнопки, которая открыла вкладку


  document.getElementById(tabName).style.display = "flex";
  evt.currentTarget.className += " active";
} // Получите элемент с id="defaultOpen" и нажмите на него
// document.getElementById("defaultOpen").click();


function openTabs(evt, tabName) {
  // Объявить все переменные
  var i, tabcontent, tablinks; // Получить все элементы с помощью class="tabcontent" и спрятать их

  tabcontent = document.getElementsByClassName("tabcont");

  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  } // Получить все элементы с помощью class="tablinks" и удалить class "active"


  tablinks = document.getElementsByClassName("tablink");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  } // Показать текущую вкладку и добавить "active" класс для кнопки, которая открыла вкладку


  document.getElementById(tabName).style.display = "flex";
  evt.currentTarget.className += " active";
} // Получите элемент с id="defaultOpen" и нажмите на него
// document.getElementById("defOpen").click();


function openTb(evt, tabName) {
  // Объявить все переменные
  var i, tabcontent, tablinks; // Получить все элементы с помощью class="tabcontent" и спрятать их

  tabcontent = document.getElementsByClassName("tbcontent");

  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  } // Получить все элементы с помощью class="tablinks" и удалить class "active"


  tablinks = document.getElementsByClassName("tblinks");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  } // Показать текущую вкладку и добавить "active" класс для кнопки, которая открыла вкладку


  document.getElementById(tabName).style.display = "flex";
  evt.currentTarget.className += " active";
} // Получите элемент с id="defaultOpen" и нажмите на него
// document.getElementById("dfOpen").click();
/******/ })()
;