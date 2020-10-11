<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login system</title>
    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <nav>
        <a href="#" class="logo">LOGO</a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <div class="login">
          <?php
            if (isset($_SESSION['userId'])){
              echo '<form action="includes/logout.inc.php" methon="post">
                    <button type="submit" name="logout-submit">Logout</button>
                    </form>';
            } else {
                echo '<form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/Email..." />
                        <input type="password" name="pwd" placeholder="Password" />
                        <button type="submit" name="login-submit">Login</button>
                        <p class="seperation"></p>
                      </form>
                      <a href="signup.php">Signup</a>';
            }
            ?>
        </div>
      </nav>
    </header>
  </body>
</html>
