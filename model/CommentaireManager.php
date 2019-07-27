<?php
class CommentaireManager extends BddManager
{
  /**
   * Sert a renvoyer un commentaire par rapport a son id
   * @param Int
   * @return Array(object)
   **/
  public function findCommentaireById($id)
  {
    $commentaires = array();
    $bdd = $this->getBdd();
    $reponse = $bdd->prepare('SELECT c.id, c.pseudo, c.commentaire, DATE_FORMAT(date_creation, \'%d/%m %Hh%im\') AS date, c.episode_id, c.signaler
                              FROM commentaire c
                              INNER JOIN episode e
                              ON c.episode_id = e.id
                              WHERE c.episode_id=:id');
    $reponse->bindValue('id', $id);
    $reponse->execute();
    while ($donnees = $reponse->fetch())
    {
     $commentaire = new Commentaire();
     $commentaire->setId($donnees['id']);
     $commentaire->setPseudo($donnees['pseudo']);
     $commentaire->setCommentaire($donnees['commentaire']);
     $commentaire->setDate_creation($donnees['date']);
     $commentaire->setEpisode_id($donnees['episode_id']);
     $commentaire->setSignaler($donnees['signaler']);

     $commentaires[] = $commentaire;
   };

      return $commentaires;

  }
  /**
   * Sert a stocker les commentaire en BDD
   * $pseudo= string , $commentaire = string, $episode_id = int
   * @this
   **/
  public function stockageCommentaire($pseudo, $commentaire, $episode_id, $signaler)
  {
    $bdd = $this->getBdd();

    $req = $bdd->prepare('INSERT INTO commentaire (pseudo, commentaire, episode_id, date_creation, signaler) VALUES(?, ?, ?, NOW(), ?)');
    $req->execute(array($pseudo, $commentaire, $episode_id, $signaler));

    return $this;
  }

  public function signalerCommentaire($idsignaler)
  {
    $bdd = $this->getBdd();
    $req = $bdd->prepare('UPDATE commentaire SET signaler="1" WHERE id=:idsignaler');
    $req->bindValue('idsignaler', $idsignaler);
    $req->execute();

    return $this;
  }

  public function findSignaler()
  {
    $bdd = $this->getBdd();
    $req = $bdd->query("SELECT * FROM commentaire WHERE signaler='1'");
    while ($donnees = $req->fetch())
    {
     $commentaire = new Commentaire();
     $commentaire->setId($donnees['id']);
     $commentaire->setPseudo($donnees['pseudo']);
     $commentaire->setCommentaire($donnees['commentaire']);
     $commentaire->setDate_creation($donnees['date_creation']);
     $commentaire->setEpisode_id($donnees['episode_id']);

     $commentaires[] = $commentaire;
   };

      if(isset($commentaires)){
        return $commentaires;
      }
  }

  public function deleteCommentaire($id)
  {
     $bdd = $this->getBdd();
     $req = $bdd->prepare('DELETE FROM commentaire WHERE id=:id');
     $req->bindValue('id', $id);
     $req->execute();

  }
}
