<div class="">
  <img src="<?= HOST?>public/photos/alaska.jpg" alt="montagne" id="montagne">
</div>
<div class="title">
    <h1>Jean Forteroche</h1>
    <p>Billet simple pour l'Alaska</p>
</div>

<nav class="navbar navbar-expand-sm navbar-light" >
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto col-sm-12">
           <li class="nav-item active col-sm-1" id="firstmenu">
              <a class="nav-link" id="home" href="<?= HOST?>homepage">A Propos...</a>
           </li>
           <li class="nav-item col-sm-1">
              <a class="nav-link" href="<?= HOST?>all">Billet simple pour l'Alaska</a>
           </li>
            <li class="nav-item col-sm-1">
              <a class="nav-link" href="<?= HOST?>contact">Contact</a>
            </li>
            <?php  if (!isset($_SESSION['pseudo'])):?>
            <li class="nav-item col-sm-1">
              <a class="nav-link" href="<?= HOST?>signin">Se connecter</a>
            </li>
            <?php  endif;?>
            <?php  if (isset($_SESSION['pseudo'])):?>
            <li class="nav-item col-sm-1" id="commenu">
              <a class="nav-link" href="<?= HOST?>showcomsignaler" >Commentaire signalé</a>
            </li>
            <li class="nav-item col-sm-1">
              <a class="nav-link" href="<?= HOST?>editepisode">nouveau chapitre</a>
            </li>
            <li class="nav-item col-sm-1">
              <a class="nav-link" href="<?= HOST?>deco">se déconnecter</a>
            </li>
            <a id="salut">Salut <?= $_SESSION['pseudo'];?></a>
            <?php  endif;?>
        </ul>
    </div>
  </nav>
