<?php


class EpisodeManager extends BddManager
{


  public function page()
  {
      $bdd = $this->getBdd();
      $msgPages = 5;
      $reponse = $bdd->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM episode");
      $reponse->bindValue('msgPages', $msgPages, PDO::PARAM_INT);
      $reponse->execute();
      $resultFoundRows = $bdd->query('SELECT found_rows()');
      $nbTotal = $resultFoundRows->fetchColumn();
      $nbPages = ceil($nbTotal / $msgPages);

      return $nbPages;

  }
/**
*Sert a stocker tous les episodes dans un tableau
*return un tableau d objet array(object)
**/
  public function findAll($page = null)
  {

      $bdd = $this->getBdd();
      $msgPages = 5;
      $debut = ($page - 1) * $msgPages;
      $reponse = $bdd->prepare("SELECT * FROM episode LIMIT :msgPages OFFSET :debut");
      $reponse->bindValue('msgPages', $msgPages, PDO::PARAM_INT);
      $reponse->bindValue('debut', $debut,PDO::PARAM_INT);
      $reponse->execute();
      while ($donnees = $reponse->fetch())
      {
          $episode = new Episode();
          $episode->setId($donnees['id']);
          $episode->setTitre($donnees['titre']);
          $txt = substr($donnees['episode'], 0, 850);
          $decoup = strrpos($txt, ' ');
          $episode->setEpisode(substr($txt, 0, $decoup));
          $episodes[] = $episode;
      };

      return $episodes;
  }
  /**
  *Sert a renvoyer un episode par rapport a son id
  *$id = int
  *return l objet episode = objet
  **/
  public function findBy($id)
  {
    $bdd = $this->getBdd();
    $query = "SELECT id, titre, episode FROM episode WHERE id=:id";
    $reponse = $bdd->prepare($query);
    $reponse->bindValue('id', $id);
    $reponse->execute();
    $donnees = $reponse->fetch();
    $episode = new Episode();
    $episode->setId($donnees['id']);
    $episode->setTitre($donnees['titre']);
    $episode->setEpisode($donnees['episode']);
    return $episode;
  }

  public function addEpisode($titre, $episode)
  {
    $bdd = $this->getBdd();

    $req = $bdd->prepare('INSERT INTO episode (titre, episode) VALUES(?, ?)');
    $req->execute(array($titre, $episode));

    return $this;
  }

  public function delEpisode($id)
  {
    $bdd = $this->getBdd();
    $req = $bdd->prepare('DELETE FROM episode WHERE id=:id');
    $req->bindValue('id', $id);
    $req->execute();

  }

  public function editById($id, $titre, $episode)
  {
    $bdd = $this->getBdd();
    $req = $bdd->prepare('UPDATE episode SET episode=:episode, titre=:titre WHERE id=:id');
    $req->bindValue('episode', $episode);
    $req->bindValue('titre', $titre);
    $req->bindValue('id', $id);
    $req->execute();

    return $this;
  }

}
