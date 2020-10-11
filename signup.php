<?php
    require "header.php";
?>

<main>
  <section class="signup">
    <h1>Signup</h1>
    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo '<p class="signuperror">Fill in all the fields!</p>';
        } else if ($_GET['error'] == "invaliduidmail") {
          echo '<p class="signuperror">Invalid username and e-mail!</p>';
        } else if ($_GET['error'] == "invaliduid") {
          echo '<p class="signuperror">Invalid username!</p>';
        } else if ($_GET['error'] == "invalidmail") {
          echo '<p class="signuperror">Invalid e-mail!</p>';
        } else if ($_GET['error'] == "passwordcheck") {
          echo '<p class="signuperror">Passwords do not match!</p>';
        } else if ($_GET['error'] == "usertaken") {
          echo '<p class="signuperror">Username is already taken!</p>';
        }
      } else if ($_GET['signup'] == "success") {
        echo '<p class="signupsuccess">Signup Successfull!</p>';
      }
    ?>
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username" />
      <input type="text" name="mail" placeholder="Email" />
      <input type="password" name="pwd" placeholder="Password" />
      <input type="password" name="pwd-repeat" placeholder="Repeat Password" />
      <button type="submit" name="signup-submit">Signup</button>
    </form>
  </section>
</main>

<?php
    require "footer.php";
?>
