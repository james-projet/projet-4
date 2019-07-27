
<div id="signaler">
  <p>Commentaire signalé</p>
    <?php if(isset($commentaires)):foreach ($commentaires as $commentaire):?>

      <div class="espacecom">
        <div class="com">
          <p><span class="pseudocom"><?= $commentaire->getPseudo()?></span><span class="datecom"> il y a <?= $commentaire->getDate_creation();?></span></p>

          <p class="messagecom"><?= $commentaire->getCommentaire();?></p>
        </div>
        <div class="signaler-com">
          <a class="liencom" href="<?= HOST?>deletecom/id/<?= $commentaire->getId();?>" aria-label="supprimer le commentaire" id="supmessage"><i class="fas fa-trash-alt"></i></a>
        </div>
      </div>

  <?php endforeach; ?>
<?php endif; ?>
</div>
