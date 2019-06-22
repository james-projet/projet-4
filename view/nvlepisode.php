<?php if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {
   echo "<p>Bonjour, " . $_SESSION['pseudo'];?>
<form class="form" action="ajoutepisode" method="post">
  <div class="">
    <input placeholder="nom" type="text" name="titre" class="nomform" />
  </div>
  <div class="">
    <textarea placeholder="episode" type="text" name="episode" id="episodeform"></textarea>
  </div>
  <div class="">
    <input type="submit" value="Envoyer" class="formbutton">
  </div>


</form>
<?php } ?>
