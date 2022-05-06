<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
?>

<?php
class user
{
  private $db;

  public function __construct()
  {
    $this->db = Database::getInstance();
  }

  public function signIn($username, $password)
  {
    $query  = "SELECT first_name, last_name FROM users WHERE user = '$username' AND password = '$password'";
    $result = $this->db->multi_query($query);
    return ["query" => $query, "result" => $result];
  }

  public function signInFix($username, $password)
  {
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($this->db->link, $username);
    $password = mysqli_real_escape_string($this->db->link, $password);

    $query  = "SELECT first_name, last_name FROM users WHERE user = '$username' AND password = '$password'";
    $result = $this->db->multi_query($query);
    return ["query" => $query, "result" => $result];
  }
}
