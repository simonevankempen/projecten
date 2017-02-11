<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <form action="mailto:506356@edu.rocmn.nl?subject=blabla" class="registration_form" method="post" enctype="text/plain">
  <fieldset>
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
	  <textarea name="verhaal" class="textarea" rows="10" cols="70"></textarea>
	  </div>
	 <div class="submit">
      <input id="gobutton" type="submit" value="submit" />
	  <input id="gobutton" type="reset" value="reset" />
	 </div>
</div>
</form>
</fieldset>

    </body>
</html>