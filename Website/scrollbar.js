 var mn = $(".menu");
    mns = "menu-scrolled";
    hdr = $('.fadein').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
  } else {
    mn.removeClass(mns);
  }
});

runslide();

function runslide() {
    $('#slide1').fadeIn(3000).delay(3500).fadeOut(1500, function() {
        $('#slide2').fadeIn(3000).delay(3500).fadeOut(1500, function() {
            $('#slide3').fadeIn(3000).delay(3500).fadeOut(1500, function() {
                runslide();
            });
        });
    });
}