<?php if (isset($echec)){ echo "<p>mauvais identifiant ou mot de passe</p>";};?>
<form action="login" method="post" class="form">
  <p>Login</p>
  <div class="">
    <input placeholder="pseudo" type="text" name="pseudo" class="pseudo" />
  </div>
  <div class="">
    <input placeholder="mot de passe" type="password" name="mdp" id="mdp" />
  </div>
  <div class="">
    <input type="submit" value="Envoyer" class="button">
  </div>
</form>
