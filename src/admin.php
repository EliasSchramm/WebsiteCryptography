<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php

      //SQL

      $sql_server = "127.0.0.1";
      $sql_user = "root";
      $sql_pwd = "";
      $sql_link = mysqli_connect($sql_server, $sql_user, $sql_pwd)
       or die("Keine Verbindung möglich: " . mysqli_error());
      mysqli_select_db($sql_link, "content") ;

      //Vars

      $adminPWD = "pwd";

      //Set MODE

      if(isset($_GET['mode'])){
        $mode = $_GET['mode'];
      }else {
        $mode = "none";
      }

      //Get Cookie
      $coockie_exists = isset($_COOKIE['EPS-ADMIN-LOGIN']);

      //NO Cookie and NO mode
      if(!$coockie_exists && $mode == "none"){

    ?>

        <form class="" action="admin.php?mode=login" method="post">
          <input type="text" name="password" value="">
          <button type="submit" name="button">LOGIN</button>
        </form>

      <?php

      //NO Cookie and MODE is 'login'
      }elseif (!$coockie_exists && $mode == "login") {

        $pwd = $_POST['password'];

        if($pwd == $adminPWD){
          setcookie("EPS-ADMIN-LOGIN", "success", time()+3600 * 10);
          header("Location: admin.php");
          die();
        }else{
          header("Location: admin.php");
          die();
        }

    //Cookie and NO mode
    }elseif ($coockie_exists && $mode == "none") {

      $query = "SELECT ID, HEADLINE FROM content";
      $result = mysqli_query($sql_link, $query) or die("Anfrage fehlgeschlagen: " . mysql_error());

      echo "<section class='content_section'>";
      echo "<table>\n";

      while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          echo "<tr>";
          $id = $line["ID"];

          foreach ($line as $col_value) {
              echo "<td>$col_value</td>";
          }

          echo '<td> <form class="" action="admin.php?mode=edit_page&id='.$id.'" method="post">
            <button type="submit" name="button">EDIT</button>
          </form> </td>';

          echo '<td> <form class="" action="admin.php?mode=delete_page&id='.$id.'" method="post">
            <button type="submit" name="button">DELETE</button>
          </form> </td>';

          echo "</tr>";
      }

      echo "</table>";
    ?>
      <form class="" action="admin.php?mode=create_page" method="post">
        <button type="submit" name="button">CREATE_PAGE</button>
      </form>

      <?php
      echo "</section>";

    }elseif ($coockie_exists && $mode == "create_page") {
      $query = "INSERT INTO content (ID, HEADLINE, FUN_LINE, CONTENT) VALUES (NULL, 'HEADLINE', 'FUN_LINE', 'CONTENT') ";
      $result = mysqli_query($sql_link, $query) or die("Anfrage fehlgeschlagen: " . mysql_error());
      header("Location: admin.php");
      die();
    }elseif ($coockie_exists && $mode == "delete_page") {
      $query = "DELETE FROM content WHERE content.ID =".$_GET["id"];
      $result = mysqli_query($sql_link, $query) or die("Anfrage fehlgeschlagen: " . mysql_error());
      header("Location: admin.php");
      die();
    }elseif ($coockie_exists && $mode == "edit_page") {
      $query = "SELECT * FROM content WHERE content.ID =".$_GET['id'];
      $result = mysqli_query($sql_link, $query) or die("Anfrage fehlgeschlagen: " . mysqli_error());

      $line = mysqli_fetch_array($result, MYSQLI_ASSOC);

      $id = $line["ID"];
      $headline = $line["HEADLINE"];
      $fun_line = $line["FUN_LINE"];
      $content =  $line["CONTENT"];

      echo '<form class="" action="admin.php?mode=save_page&id='.$id.'" method="post">
        <textarea cols="50" rows="1" name="HEADLINE">'.$headline.'</textarea><br>
        <textarea cols="50" rows="1" name="FUN_LINE">'.$fun_line.'</textarea><br>
        <textarea cols="100" rows="30" name="CONTENT_C">'.$content.'</textarea>
        <button type="submit" name="button">SAVE</button>
      </form>';
    }elseif ($coockie_exists && $mode == "save_page") {
      $id = $_GET["id"];
      $headline = $_POST["HEADLINE"];
      $fun_line = $_POST["FUN_LINE"];
      $content =  htmlentities($_POST["CONTENT_C"]);

      $query = 'UPDATE content SET HEADLINE = "'.$headline.'", FUN_LINE = "'.$fun_line.'", CONTENT = "'.$content.'" WHERE content.ID ='.$id ;
      $result = mysqli_query($sql_link, $query) or die("Anfrage fehlgeschlagen: " . mysqli_error($sql_link));

      header("Location: admin.php?mode=edit_page&id=".$id);
      die();
    }
      ?>

    <a href="admin.php">ZURÜCK</a>
  </body>
</html>
