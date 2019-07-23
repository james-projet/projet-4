<?php

class Homepage
{
  public function showHomepage($params)
  {
    $page = (!empty($params['page']) ? $params['page'] : 1);
    $manager = new EpisodeManager();
    $episodes = $manager->findAll($page);
    $myView = new View('homepage');
    $myView->render(array('episodes' => $episodes));
  }

  public function showContact()
  {
    $manager = new EpisodeManager();
    $myView = new View('contact');
    $myView->render(array());
  }

  public function sendMail($params)
  {
    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );
    $from = $params['email'];
    $to = "james.gaffe@yahoo.fr";
    $subject = $params['titre'];
    $message = $params['message'];
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
  }


  public function stockageMdp($params)
  {
    $pseudo = htmlspecialchars($params['pseudo']);
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
    $_SESSION['flashMessage'] = "bonjour " . $pseudo;
    header("location:homepage");


  }

  public function showInscritpion($params)
  {
    $manager = new EpisodeManager();
    $myView = new View('inscription');
    $myView->render(array());
  }

  public function showSignin($params)
  {
    $manager = new EpisodeManager();
    $myView = new View('signin');
    $myView->render(array());

  }

  public function deco($params)
  {
    session_destroy();
    header("location:homepage");
  }

  public function showConf($params)
  {
    $manager = new EpisodeManager();
    $myView = new View('conf');
    $myView->render(array());
  }

}
