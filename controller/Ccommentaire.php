<?php

class Ccommentaire
{

  public function signalerCom($params)
  {
    $idsignaler = $params['signaler'];
    $id  = $params['id'];

    $comanager = new CommentaireManager();
    $co = $comanager->signalerCommentaire($idsignaler);
    header("location:" . HOST . "episode/id/" . $id);
  }

  public function showSignalerCom($params)
  {
    $manager = new EpisodeManager();
    $comManager = new CommentaireManager();
    $episodes = $manager->findAll();
    $commentaires = $comManager->findSignaler();

    $myView = new View('comsignaler');
    $myView->render(array('episodes' => $episodes, 'commentaires' => $commentaires));
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
    $pseudo = $params['pseudo'];
    $commentaire = $params['commentaire'];
    $signaler = '0';

    $manager = new CommentaireManager();

    $stockage = $manager->stockageCommentaire($pseudo, $commentaire, $episode_id, $signaler);
    header("location:episode/id/$episode_id");
  }



}
