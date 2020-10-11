<?php
    require "header.php";
?>

<main>
<?php 
  if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
      echo '<p class="loginerror">Fill in all the fields!</p>';
    } else if ($_GET['error'] == "sqlerror") {
      echo '<p class="loginerror">Our server is down. Please try again!</p>';
    } else if ($_GET['error'] == "wrongpwd") {
      echo '<p class="loginerror">Invalid password!</p>';
    } else if ($_GET['error'] == "nouser") {
      echo '<p class="loginerror">User doesnt exist!</p>';
    } 
  } else if ($_GET['login'] == "success") {
    echo '<p class="loginsuccess">Login Successfull!</p>';
  }

  if (isset($_SESSION['userId'])) {
    echo '<p class="log-status">You are logged in!</p>';
  } else {
    echo '<p class="log-status">You are logged out!</p>';
  }
?>
</main>

<?php
    require "footer.php";
?>
