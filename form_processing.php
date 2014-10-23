<!DOCTYPE HTML>
<html>
   <head>
    <title>Praktikum3</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type"text/css" href="style.css">
   </head>
   <body>
    <?php
      $username = $_POST['username'];
      $password = $_POST['password'];
      $submit = $_POST['submit'];
    ?>
      <pre><?php /* print_r($_POST); ?></pre><br>
      <?php 
        echo "Tere {$username}! Teie parool on {$password}.";
      */?>
      <?php /*
        if (isset($_POST["username"])) {
          $username = $_POST["username"];
        } else {
          $username = "puudub";
        }
      ?>
      <?php
        if (isset($_POST["password"])) {
          $password = $_POST["password"];
        } else {
          $password = "puudub";
        }
      */?>
      <?php
          $username = isset($_POST["username"]) ? ($_POST["username"]) : "Puudub" ;
          $password = isset($_POST["password"]) ? ($_POST["password"]) : "Puudub" ;
          $submit = isset($_POST["username"]) ? ($_POST["username"]) : "Puudub" ;
          $submit = isset($_POST["password"]) ? ($_POST["password"]) : "Puudub" ;

            if ($submit == $_POST["username"] && $submit == $_POST["password"]) {
                echo "Tere {$username}! Teie parool on {$password}";} 
              else {
                echo "Kasutajanimi või parool on puudu.";}
      ?>

   </body>
</html>