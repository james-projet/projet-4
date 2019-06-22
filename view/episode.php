<div class="backepisode">
    <h2><?= $myEpisode->getTitre();?></h2>
    <?php  if (isset($_SESSION['pseudo'])):?>
    <a id="supepisode" class="liencom" href="<?= HOST?>supprimerepisode/id/<?= $myEpisode->getId();?>" aria-label="supprimer l'episode"><i class="fas fa-trash-alt"></i> Supprimer episode</a>
    <?php  endif;?>
    <div class="letter">
      <p class="first"><?= $myEpisode->getEpisode();?></p>
    </div>
</div>



<?= include_once(VIEW.'commentaire.php');?>
