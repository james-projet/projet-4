<?php

class ConnexionManager extends BddManager
{

  private $bdd;

  public function __construct()
  {
    $this->bdd = new PDO('mysql:host=localhost;dbname=p4jean;charset=utf8', 'root', '');
  }

  public function stockMdp($pseudo ,$pass_hache)
  {
    $bdd = $this->bdd;
    $req = $bdd->prepare('INSERT INTO identifiant(pseudo, mdp) VALUES(:pseudo, :mdp)');
    $req->execute(array(
      'pseudo' => $pseudo,
      'mdp'   => $pass_hache,
    ));

    return $this;
  }

  public function verifMdp($pseudo ,$mdp)
  {
    $bdd = $this->bdd;
    $req = $bdd->prepare('SELECT id, mdp FROM identifiant WHERE pseudo = :pseudo');
    $req->execute(array('pseudo' => $pseudo));
    $identifiant = $req->fetch();
    $passwordCorrect = password_verify($mdp, $identifiant['mdp']);

    if (!$identifiant) {
       echo "Mauvais identifiant ou mot de passe !";
    }
    else {
           if ($passwordCorrect) {
                $_SESSION['id'] = $identifiant['id'];
                $_SESSION['pseudo'] = $pseudo;
                return $_SESSION['id'];
                return $_SESSION['pseudo'];
                header("location:signin");
            }
             else {
                echo "mauvais identifiant ou mot de passe !";
             }
         }

    }
}
