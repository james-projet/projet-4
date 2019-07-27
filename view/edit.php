<form class="form-episode" action="<?= HOST;?>editepisode/id/<?= $id;?>" method="post">
  <div class="">
    <input placeholder="<?= $myEpisode->getTitre(); ?>" type="text" name="titre" class="pseudo"></input>
  </div>
  <div class="">
    <textarea placeholder="episode" type="text" name="episode" id="episodeform"><?= $myEpisode->getEpisode(); ?></textarea>
  </div>
  <div class="">
    <input type="submit" value="Envoyer" class="button">
  </div>

</form>
