<?php

class Ccommentaire
{

  public function signalerCom($params)
  {
    $idsignaler = $params['signaler'];
    $id  = $params['id'];

    $comanager = new CommentaireManager();
    $co = $comanager->signalerCommentaire($idsignaler);
    $_SESSION['flashMessage'] = "Le commentaire a bien été signalé";
    header("location:" . HOST . "episode/id/" . $id);
  }

  public function showSignalerCom($params)
  {
    $manager = new EpisodeManager();
    $comManager = new CommentaireManager();
    $commentaires = $comManager->findSignaler();

    $myView = new View('comsignaler');
    $myView->render(array('commentaires' => $commentaires));
  }

  public function deleteCom($params)
  {
    $id = $params['id'];
    $comManager = new CommentaireManager();
    $deletecommentaires = $comManager->deleteCommentaire($id);
    header("location:" . HOST . "showcomsignaler");
  }



  public function stockCommentaire($params)
  {
    $episode_id = $params['episode_id'];
    $pseudo = htmlspecialchars($params['pseudo']);
    $commentaire = htmlspecialchars($params['commentaire']);
    $signaler = '0';

    $manager = new CommentaireManager();

    $stockage = $manager->stockageCommentaire($pseudo, $commentaire, $episode_id, $signaler);
    header("location:episode/id/$episode_id");
  }



}
