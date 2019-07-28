<?php foreach ($episodes as $episode): ?>
  <div class="all-episode">
      <div class="text-episode">
        <h3><?= $episode->getTitre()?></h3>
        <p><?= $episode->getEpisode()?></p>
        <a href="<?= HOST?>episode/id/<?= $episode->getId()?>">Lire la suite</a>
      </div>
  </div>
<?php endforeach; ?>
<div class="page">
<?php for($i = 1; $i <= $nbPage; $i++):;?>
      <a href="<?= HOST?>all/page/<?= $i;?>"><?= $i;?></a>
<?php endfor;?>
</div>
