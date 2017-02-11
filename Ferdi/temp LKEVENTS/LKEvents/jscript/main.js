// slider

$(function(){
  $('.fadein img:gt(0)').hide();
  setInterval(function(){
  $('.fadein :first-child').fadeOut()
    .next('img').fadeIn()
    .end().appendTo('.fadein');}, 
  7000);
});

// slider arrows

$(function(){
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

$(window).load(function () {
  $('.previousButton, .nextButton').hover(function(){
    $(".previousButton").css('z-index', 1);
    $('.nextButton').css('z-index', 1);
    }, function(){
    $(".previousButton").css('z-index', 0);
    $('.nextButton').css('z-index', 0);
  });
});

// cookie om settings op te slaan (nodig voor pagina refresh)

function setCookie(c_name, value, exdays) {
  var exdate = new Date();
  exdate.setDate(exdate.getDate() + exdays);
  var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
  document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
  var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
      x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
      y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
      x = x.replace(/^\s+|\s+$/g, "");
      if (x == c_name) {
          return unescape(y);
      }
    }
}

function DeleteCookie(name) {
  document.cookie = name + '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
}

$(window).load(function () {
  var IsRefresh = getCookie("IsRefresh");      // als de IsRefresh cookie bestaat
  if (IsRefresh != null && IsRefresh != "") {  // als de cookie bestaat en je vervolgens de pagina refresht
    hdr = $('.sliderimg').height();
    mnh = $(".main-nav").height();
    cth = $('.container').height();
      mn.css('margin-top',hdr,+'px');          // als het document geladen is en de cookie bestaat maak dan de navigatie vast aan de onderkant van de slider
      ct.css('top',hdr+mnh+'px');              // als het document geladen is en de cookie bestaat maak dan de container vast aan de onderkant van de navigatie
      ftr.css('top',hdr+mnh+cth+'px');
        DeleteCookie("IsRefresh");
  } else {                                     // als de cookie niet bestaat dan word de volgende code uitgevoerd
    hdr = $('.sliderimg').height();
    mnh = $(".main-nav").height();
    cth = $('.container').height();
      mn.css('margin-top',hdr,+'px');          // als het document geladen is en de cookie niet bestaat maak dan de navigatie vast aan de onderkant van de slider
      ct.css('top',hdr+mnh+'px');              // als het document geladen is en de cookie niet bestaat maak dan de container vast aan de onderkant van de navigatie
      ftr.css('top',hdr+mnh+cth+'px');
        setCookie("IsRefresh", "true", 1);
  }
});

$(window).load(function () {
    hdr = $('.sliderimg').height();
    mnh = $(".main-nav").height();
    cth = $('.container').height();
      mn.css('margin-top',hdr,+'px');          // als het document geladen is maak dan de navigatie vast aan de onderkant van de slider
      ct.css('top',hdr+mnh+'px');              // als het document geladen is maak dan de container vast aan de onderkant van de navigatie
      ftr.css('top',hdr+mnh+cth+'px');
});

window.onbeforeunload = function(){            // zorgt ervoor dat je naar de bovenkant van de pagina scrollt als je de pagina refresht
	window.scrollTo(0,0);
};