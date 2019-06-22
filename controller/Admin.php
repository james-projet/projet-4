<?php

/**
 *
 */
class Admin
{

  public function deco($params)
  {
    session_destroy();
    header("location:homepage");
  }

  public function deleteEpisode($params)
  {
    $id = $params['id'];
    $manager = new EpisodeManager();
    $episodes = $manager->delEpisode($id);
    header("location:" . HOST . "homepage");

  }
}
