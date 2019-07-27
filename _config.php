<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

//gere
class MyAutoload
{
  public static function start()
  {
    session_start();
    spl_autoload_register(array(__CLASS__, 'autoload'));
    $root = $_SERVER['DOCUMENT_ROOT'];
    $host = $_SERVER['HTTP_HOST'];

    define('HOST', 'http://'.$host.'/p4jean/');
    define('ROOT', $root.'/p4jean/');

    define('CONTROLLER', ROOT.'controller/');
    define('VIEW', ROOT.'view/');
    define('MODEL', ROOT.'model/');
    define('CLASSES', ROOT.'classes/');
    define('PUBLIC', HOST.'public/');
    define('DB_PWD', '');

  }

  public static function autoload($class)
  {
    if (file_exists(MODEL.$class.'.php'))
    {
      include_once (MODEL.$class.'.php');
    } elseif (file_exists(CLASSES.$class.'.php')) {
      include_once (CLASSES.$class.'.php');
    } elseif (file_exists(CONTROLLER.$class.'.php')) {
      include_once (CONTROLLER.$class.'.php');
    }
  }
}

 ?>
