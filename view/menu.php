<nav class="menu">
      <ol>
        <li class="menu-item"><a href="<?= HOST?>homepage">A Propos...</a></li>
        <li class="menu-item">
          <a href="<?= HOST?>all">Billet pour l'Alaska</a>
          <ol class="sub-menu">
            <li class="menu-item"><a href="<?= HOST?>episode/id/<?= $episodes[0]->getId()?>"><?= $episodes[0]->getTitre()?></a></li>
            <li class="menu-item"><a href="<?= HOST?>episode/id/<?= $episodes[1]->getId()?>"><?= $episodes[1]->getTitre()?></a></li>
            <li class="menu-item"><a href="<?= HOST?>episode/id/<?= $episodes[2]->getId()?>"><?= $episodes[2]->getTitre()?></a></li>
          </ol>
        </li>
        <li class="menu-item"><a href="<?= HOST?>signin">Se connecter</a></li>
        <li class="menu-item"><a href="<?= HOST?>contact">Me Contacter</a></li>
        <?php  if (isset($_SESSION['pseudo'])):?>
        <li class="menu-item"><a href="<?= HOST?>showcomsignaler">Commentaire signaler</a></li>
        <li class="menu-item"><a href="<?= HOST?>editepisode">Nouveau chapitre</a></li>
        <li class="menu-item"><a href="<?= HOST?>deco">Se deconnecter</a></li>
        <li class="menu-item"><a href="<?= HOST?>editepisode">Salut <?= $_SESSION['pseudo']?></a></li>
        <?php  endif;?>
      </ol>
    </nav>
