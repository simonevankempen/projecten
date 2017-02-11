mn = $(".main-nav");
ct = $(".container");
ftr = $(".footer");
mns = "main-nav-scrolled";
hdr = $('.sliderimg').height();
mnh = $('.main-nav').height();
cth = $('.container').height();

$(window).load(function () {
  $(window).resize(function(){
    hdr = $('.sliderimg').height();            // variabele om de height tijdens het resizen constant te blijven bepalen
    mnh = $(".main-nav").height();
    cth = $('.container').height();
      if( $(this).scrollTop() > hdr ) {
        mn.addClass(mns);                      // als de slider niet meer zichtbaar is word de navigatie aan de top van het scherm geplakt
        mn.css('margin-top',0+'px');           // houd de slider aan de top als je resized terwijl slider en navigatie zichtbaar zijn en door het resizen niet meer zichtbaar zijn
        ct.css('top',mnh+'px');
        ftr.css('top',mnh+cth+'px');
      } else {                                 
        mn.removeClass(mns);                   // als de slider zichtbaar is word de navigatie aan de onderkant van de slider geplakt
        mn.css('margin-top',hdr+'px');         // zet de navigatie vast aan de onderkant van de slider
        ct.css('top',hdr+mnh+'px');
        ftr.css('top',hdr+mnh+cth+'px');
      }
  });
});

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {            
    mn.addClass(mns);                          // als de slider niet meer zichtbaar is word de navigatie aan de top van het scherm geplakt
    mn.css('margin-top',0+'px');
  } else {
    mn.removeClass(mns);                       // als de slider zichtbaar is word de navigatie aan de onderkant van de slider geplakt
    mn.css('margin-top',hdr+'px');
    ct.css('top',hdr+mnh+'px');
    ftr.css('top',hdr+mnh+cth+'px');
  }
});




$('.handle').on('click', function(){
    $('nav ul').toggleClass('showing');
});
