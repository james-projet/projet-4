<?php

class Cepisode
{
  public function stockEpisode($params)
  {
    $titre = $params['titre'];
    $episode = $params['episode'];
    $manager = new EpisodeManager();
    $nvlepisodes = $manager->addEpisode($titre, $episode);
    $_SESSION['flashMessage'] = "votre épisode a été crée avec succès.";
    header("location:" . HOST . "all");
  }

  public function edit($params)
  {
    $id = $params['id'];
    $manager = new EpisodeManager();
    $myEpisode = $manager->findBy($id);
    $myView = new View('edit');
    $myView->render(array('myEpisode' => $myEpisode, 'id' => $id));
  }

  public function editEpisode($params)
  {
    $id = $params['id'];
    $titre = $params['titre'];
    $episode = $params['episode'];
    $manager = new EpisodeManager();
    $edit = $manager->editById($id, $titre, $episode);
    $_SESSION['flashMessage'] = "votre épisode a été edité.";
    header("location:" . HOST . "all");
  }

  public function deleteEpisode($params)
  {
    $id = $params['id'];
    $manager = new EpisodeManager();
    $episodes = $manager->delEpisode($id);
    $_SESSION['flashMessage'] = "votre épisode a été supprimé.";
    header("location:" . HOST . "all");
  }
}
