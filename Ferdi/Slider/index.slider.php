<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Slider</title>
<style>

</style>
</head>
<body>

<div class="header-image">
<div class="fadein">
    <img src="img/hardlopen.jpg">
    <img src="img/logo_vrij.png">
    <img src="img/menubarlogo.jpg">
</div>
<div class="previousButton"></div>
<div class="nextButton"></div>
</div>

<script>
$(function(){
  $('.fadein img:gt(0)').hide();
  setInterval(function(){
  $('.fadein :first-child').fadeOut()
    .next('img').fadeIn()
    .end().appendTo('.fadein');}, 
  7000);
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
</script>

</body>
</html>