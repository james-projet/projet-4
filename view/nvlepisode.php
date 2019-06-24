<?php if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {?>
<form id="form-episode" action="ajoutepisode" method="post">
  <div class="">
    <input placeholder="titre" type="text" name="titre" class="pseudo" />
  </div>
  <div class="">
    <textarea placeholder="episode" type="text" name="episode" id="episodeform"></textarea>
  </div>
  <div class="">
    <input type="submit" value="Envoyer" class="button">
  </div>


</form>
<?php } ?>
