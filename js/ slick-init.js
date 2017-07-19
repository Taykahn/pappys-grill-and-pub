jQuery(document).ready(function($){
 $('.slider-for').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: true,
 asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
 slidesToShow: 1,
 slidesToScroll: '-1',
 asNavFor: '.slider-for',
 dots: false,
 centerMode: true,
 focusOnSelect: true,
 arrows: true,
 centerPadding: '0px', 
 autoplay: true, 
 autoplaySpeed: 0, 
 speed: 9000, 
 cssEase: 'linear'
 });
});