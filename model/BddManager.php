<?php

/**
 *
 */
abstract class BddManager
{
  private $bdd;

  public function __construct()
  {
      $this->bdd = new PDO('mysql:host=localhost;dbname=p4jean;charset=utf8', 'root', DB_PWD);
  }

  public function getBdd()
  {
      return $this->bdd;
  }
}
