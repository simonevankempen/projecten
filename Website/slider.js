$(function(){
  $('.fadein img:gt(0)').hide();
  setInterval(function(){
  $('.fadein :first-child').fadeOut()
    .next('img').fadeIn()
    .end().appendTo('.fadein');}, 
  5000);
});

$(function () {
    $('.fadein img:gt(0)').hide();
    $('.nextButton').on('click', function () {
        $('.fadein :first-child').fadeOut()
            .next('img').fadeIn()
            .end().appendTo('.fadein');
    });
    $('.previousButton').on('click', function () {
        $('.fadein :last-child').fadeIn()
            .insertBefore($('.fadein :first-child').fadeOut());
    });
});