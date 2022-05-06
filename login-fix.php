<?php include_once "inc/header.php"; ?>
<?php
include_once "classes/sql.php";
$user = new user();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"]) && isset($_POST["username"]) && isset($_POST["password"])) {
  $data = $user->signInFix($_POST["username"], $_POST["password"]);
}
?>


<div class="form-common">

  <form class="text-center border border-light p-5" method="POST">

    <p class="h4 mb-4">Sign in Fix</p>

    <!-- Email -->
    <input type="text" name="username" class="form-control mb-4" placeholder="Username">

    <!-- Password -->
    <input type="text" name="password" class="form-control mb-4" placeholder="Password">


    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit" name="login" value="login">Sign in</button>
  </form>

</div>

<?php
if (isset($data) && $data) {
  $login = $data["result"];
  $query = $data["query"];
?>
  <h5 class="text-center text-danger">Query: <?php echo $query ?></h5>
  <div class="result-box">
    <p class="h2 mb-4 mt-4 result-title">RESULT</p>

    <?php
    if (isset($login) && $login) {
      if ($result = $login->store_result()) {
        do {
          while ($row = $result->fetch_row()) {
    ?>
            <div class="alert alert-success" role="alert">
              <div>Value One: <?php echo $row["0"] ?></div>
              <div>Value Two: <?php echo $row["1"] ?></div>
            </div>
    <?php
          }
        } while ($login->next_result());
      }
    }
    ?>
  </div>

<?php } ?>


<!-- Default form login -->




<script type="text/javascript">
  document.title = "Login Fix SQL Injection";
</script>
<?php include_once "inc/footer.php"; ?>