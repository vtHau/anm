<?php
$filepath = realpath(dirname(__FILE__));
include($filepath . '/../config/config.php'); ?>

<?php
class Database
{
  public $host   = DB_HOST;
  public $user   = DB_USER;
  public $pass   = DB_PASS;
  public $dbname = DB_NAME;

  private static $_instance;
  public $link;
  public $error;

  public static function getInstance()
  {
    if (!self::$_instance) {
      self::$_instance = new self();
    }

    return self::$_instance;
  }

  public function __construct()
  {
    $this->link = new mysqli(
      $this->host,
      $this->user,
      $this->pass,
      $this->dbname
    );
    if (!$this->link) {
      $this->error = "Connection fail" . $this->link->connect_error;
      return false;
    }
  }

  public function multi_query($query)
  {
    $this->link->multi_query($query) or
      die($this->link->error . __LINE__);
    return $this->link;
  }
}
