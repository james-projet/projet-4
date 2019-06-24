<p>Commentaire signaler</p>
<?php if (isset($_SESSION['id']) and isset($_SESSION['pseudo']))
{
   foreach ($commentaires as $commentaire):?>

    <div class="espacecom">
      <div class="com">
        <p><span class="pseudocom"><?= $commentaire->getPseudo()?></span><span class="datecom"> il y a <?= $commentaire->getDate_creation();?></span></p>

        <p class="messagecom"><?= $commentaire->getCommentaire();?></p>
      </div>
      <div class="signaler-com">
        <a class="liencom" href="<?= HOST?>deletecom/id/<?= $commentaire->getId();?>" aria-label="supprimer le commentaire"><i class="fas fa-trash-alt"></i></a>
      </div>
    </div>

<?php endforeach;
} ?>
