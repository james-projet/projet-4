<?php

class Homepage
{
  public function showHomepage($params)
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();

    $myView = new View('homepage');
    $myView->render(array('episodes' => $episodes));
  }

  public function showContact()
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();
    $myView = new View('contact');
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

  public function showSignin($params)
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();
    $myView = new View('signin');
    $myView->render(array('episodes' => $episodes));

  }

  public function deco($params)
  {
    session_destroy();
    header("location:homepage");
  }

}
