<?php

class Connexion{

  private $id;
  private $pseudo;
  private $mdp;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setPseudo($pseudo)
  {
    $this->pseudo = $pseudo;
  }

  public function getPseudo()
  {
    return $pseudo->pseudo;
  }

  public function getMdp()
  {
    return $this->mdp;
  }

  public function setMdp($mdp)
  {
    $this->mdp = $mdp;
  }

}
