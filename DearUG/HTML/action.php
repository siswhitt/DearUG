<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php
        $dbhost = 'mysql:host=classdb.it.mtu.edu;port=3307;dbname=fisforsuccess';
        $dbuser = $_GET["userName"]; ?;
        $dbpass = $_GET["pass"];;
        try {
          $dbconnect = new PDO($dbhost, $dbuser, $dbpass);
        }
        catch (PDOException $error) {
      		die("ERROR: " . $error . "<br/>");
        }
    ?>

  </body>
</html>
