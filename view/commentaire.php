<form action="<?= HOST?>stockage" method="post" id="formcom">

    <div class="forminput" >
      <label>Votre pseudo   </label>
      <input  type="text" placeholder="pseudo"  name="pseudo" id="pseudoform" required/>
    </div>

    <div class="forminput">
      <label>Votre message   </label>
      <input type="text" placeholder="message" name="commentaire" required/>
    </div>

    <div>
      <input type="submit" value="Envoyer" class="button" />
      <input type="hidden" name="episode_id" value="<?= $id;?>">
    </div>
</form>
<?php foreach ($commentaires as $commentaire):?>
<div class="espacecom">
    <div class="com">
      <p><span class="pseudocom"><?= $commentaire->getPseudo()?></span><span class="datecom"> le <?= $commentaire->getDate_creation();?></span></p>

      <p class="messagecom"><?= $commentaire->getCommentaire();?></p>
    </div>
    <div class="signaler-com">
      <a class="liencom" href="<?= HOST?>comsignaler/signaler/<?= $commentaire->getId();?>/id/<?= $id ;?>" aria-label="signaler un commentaire"><i class="fas fa-exclamation-triangle"></i></a>

    </div>
</div>

<?php endforeach;?>
