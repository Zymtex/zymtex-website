<?php

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial scale=1">

    <title>Login</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  </head>

  <body>
    <!--- Header ------------------------------------------------------------>
      <header>
        <div id="logo">
          <a href="https://www.youtube.com/channel/UCMfcVi3B_ue3lDDrDUTlNTQ" target="_blank">
            <img src="img/logo.png" alt="LOGO">
          </a>
        </div>

        <nav id="main-nav">
          <ul>
            <a href="index.php"><li>Home</li></a>
          </ul>
        </nav>
      </header>


      <!--- Login ------------------------------------------------------------>
      <section id="login">
          <h3>Login</h3>
          <hr>
            <form class="myform" action="index.php" method="post">
              <input type="text" class="inputvalues" placeholder="Username"/><br>
              <input type="password" class="inputvalues" placeholder="Password"/><br>
              <input type="submit" id="login_button" value="Login"/><br>
              <a href="register.php"><input type="button" id="register_button" value="Register"/></a><br>
            </form>
      </section>


    <!--- Fußzeile ------------------------------------------------------------>
      <footer>
        <p>
          &copy; 2014-2018 Zymtex
        </p>
      </footer>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="js/mobile-menu.js"></script>
  </body>
</html>
