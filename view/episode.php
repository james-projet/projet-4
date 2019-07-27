<div class="backepisode">
    <h2><?= $myEpisode->getTitre();?></h2>
    <?php  if (isset($_SESSION['pseudo'])):?>
    <a class="liencom" href="<?= HOST?>supprimerepisode/id/<?= $myEpisode->getId();?>" aria-label="supprimer l'episode" id="supepisode"><i class="fas fa-trash-alt"></i> Supprimer episode</a>
    <a class="liencom" href="<?= HOST?>edit/id/<?= $myEpisode->getId();?>" aria-label="editer l'episode" id="editepisode">Editer l'episode</a>
    <?php  endif;?>
    <div class="letter">
      <p><?= $myEpisode->getEpisode();?></p>
    </div>
</div>

<?= include_once(VIEW.'commentaire.php');?>
