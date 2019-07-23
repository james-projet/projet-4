<?php


class Cepisode
{
  public function showAll($params)
  {
    $page = (!empty($params['page']) ? $params['page'] : 1);
    $manager = new EpisodeManager();
    $nbPage = $manager->page();
    $episodes = $manager->findAll($page);
    $myView = new View('allepisode');
    $myView->render(array('episodes' => $episodes, 'nbPage' => $nbPage));
  }

  public function showNvlEpisode($params)
  {
    $manager = new EpisodeManager();
    $myView = new View('nvlepisode');
    $myView->render(array());
  }

  public function showEpisode($params)
  {

    $id = $params['id']; // $request->get('id');
    $manager = new EpisodeManager();
    $comManager = new CommentaireManager();
    $myEpisode = $manager->findBy($id); // objet
    $commentaires = $comManager->findCommentaireById($id);

    $myView = new View('episode');
    $myView->render(array('myEpisode' => $myEpisode, 'commentaires' => $commentaires, 'id' =>$id));
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
