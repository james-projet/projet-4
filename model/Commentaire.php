<?php

class Commentaire
{
  private $id;
  private $pseudo;
  private $commentaire;
  private $date_creation;
  private $episode_id;
  private $signaler;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getPseudo()
  {
    return $this->pseudo;
  }

  public function setPseudo($pseudo)
  {
    $this->pseudo = $pseudo;
  }

  public function getCommentaire()
  {
    return $this->commentaire;
  }

  public function setCommentaire($commentaire)
  {
    $this->commentaire = $commentaire;
  }

  public function getDate_creation()
  {
    return $this->date_creation;
  }

  public function setDate_creation($date_creation)
  {
    $this->date_creation = $date_creation;
  }

  public function getEpisode_id()
  {
    return $this->episode_id;
  }

  public function setEpisode_id($episode_id)
  {
    $this->episode_id = $episode_id;
  }

  public function getSignaler()
  {
    return $this->signaler;
  }

  public function setSignaler($signaler)
  {
    $this->signaler = $signaler;
  }



}




 ?>
