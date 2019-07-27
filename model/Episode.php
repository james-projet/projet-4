<?php

class Episode
{
  private $id;
  private $titre;
  private $episode;
  private $commentaires;//tableau d objet de commentaire

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getTitre()
  {
    return $this->titre;
  }

  public function setTitre($titre)
  {
    $this->titre = $titre;
  }

  public function getEpisode()
  {
    return $this->episode;
  }

  public function setEpisode($episode)
  {
    $this->episode = $episode;
  }

  public function getCommentaires()
  {
    return $this->commentaires;
  }

  public function setCommentaires($commentaires)
  {
    $this->commentaires = $commentaires;
  }
}




 ?>
