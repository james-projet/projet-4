<?php

class Homepage
{
  /**
  *Sert a creer la vue
  *$params = tableau des elements de l url
  **/
  public function showHomepage($params)
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();

    $myView = new View('homepage');
    $myView->render(array('episodes' => $episodes));
  }

  public function showEpisode($params)
  {

    $id = $params['id']; // $request->get('id');
    $manager = new EpisodeManager();
    $comManager = new CommentaireManager();
    $episodes = $manager->findAll(); // tableau d'objet => récupérer les données dans un tableau
    $myEpisode = $manager->findBy($id); // objet
    $commentaires = $comManager->findCommentaireById($id);

    $myView = new View('episode');
    $myView->render(array('episodes' => $episodes, 'myEpisode' => $myEpisode, 'commentaires' => $commentaires, 'id' =>$id));
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

  public function showContact()
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();
    $myView = new View('contact');
    $myView->render(array('episodes' => $episodes));
  }

  public function showSignin($params)
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();
    $myView = new View('signin');
    $myView->render(array('episodes' => $episodes));

  }

  public function stockageMdp($params)
  {
    $pseudo = $params['pseudo'];
    $pass_hache = password_hash($params['mdp'], PASSWORD_DEFAULT);

    $manager = new ConnexionManager();
    $stockage = $manager->stockMdp($pseudo, $pass_hache);
    header("location:homepage");

  }

  public function Login($params)
  {
    $pseudo = $params['pseudo'];
    $mdp = $params['mdp'];

    $comanager = new ConnexionManager();
    $co = $comanager->verifMdp($pseudo ,$mdp);
    header("location:homepage");

  }

  public function showInscritpion($params)
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();
    $myView = new View('inscription');
    $myView->render(array('episodes' => $episodes));
  }

  public function signalerCom($params)
  {
    $idsignaler = $params['signaler'];

    $comanager = new CommentaireManager();
    $co = $comanager->signalerCommentaire($idsignaler);
    header("location:" . HOST . "homepage");
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

  public function showNvlEpisode($params)
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();
    $myView = new View('nvlepisode');
    $myView->render(array('episodes' => $episodes));
  }

  public function stockEpisode($params)
  {
    $titre = $params['titre'];
    $episode = $params['episode'];
    $manager = new EpisodeManager();
    $nvlepisodes = $manager->addEpisode($titre, $episode);
    header("location:" . HOST . "homepage");
  }


}
