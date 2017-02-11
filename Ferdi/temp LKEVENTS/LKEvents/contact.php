<?php
define("TITLE" ,"Contact");
include('includes/header.php');

?>

<div class="container">
  <div class="container_box_left">
    <form action="mailto:506356@edu.rocmn.nl?subject=LK Events" class="registration_form" method="post" enctype="text/plain">
      <legend>CONTACT</legend>
        <div id="round">
          <div class="elements">
            <label for="name">Uw naam(verplicht)</label><br>
            <input type="text" class="round" id="naam" placeholder="naam" size="25" required/>
          </div>
          <div class="elements">
            <label for="e-mail">Uw email(verplicht)</label><br>
            <input type="text" class="round" id="email" placeholder="email" size="25" required/>
          </div>
          <div class="elements">
            <label for="e-mail">Onderwerp</label><br>
            <input type="text" class="round" id="onderwerp" placeholder="onderwerp" size="25" required/>
          </div>
          <div class="elements">
            <label for="opmerking">Uw bericht</label><br>
            <textarea name="verhaal" class="round" rows="10" cols="27"></textarea>
          </div>
          <div class="submit">
            <input id="gobutton" type="submit" value="submit"/>
            <input id="gobutton" type="reset" value="reset"/>
          </div>
        </div>
    </form>
  </div>
  <div class="container_box_right">
    <div class="google_maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4124.442871339716!2d5.091731606541012!3d52.07229492013745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6658ff310c351%3A0x883e6d630f223ac5!2sMarco+Pololaan+2%2C+3526+GJ+Utrecht!5e0!3m2!1snl!2snl!4v1463646031961" width="600px" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>



</div>

<?php

include('includes/footer.php');

?>

