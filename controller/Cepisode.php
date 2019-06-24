<?php


class Cepisode
{
  public function showAll($params)
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();
    $myView = new View('allepisode');
    $myView->render(array('episodes' => $episodes));
  }

  public function showNvlEpisode($params)
  {
    $manager = new EpisodeManager();
    $episodes = $manager->findAll();
    $myView = new View('nvlepisode');
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



  public function stockEpisode($params)
  {
    $titre = $params['titre'];
    $episode = $params['episode'];
    $manager = new EpisodeManager();
    $nvlepisodes = $manager->addEpisode($titre, $episode);
    header("location:" . HOST . "homepage");
  }

  public function deleteEpisode($params)
  {
    $id = $params['id'];
    $manager = new EpisodeManager();
    $episodes = $manager->delEpisode($id);
    header("location:" . HOST . "homepage");

  }
}
