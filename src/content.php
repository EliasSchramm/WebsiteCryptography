<div class="c">

  <?php

  $sql_server = "127.0.0.1";
  $sql_user = "root";
  $sql_pwd = "";
  $sql_link = mysqli_connect($sql_server, $sql_user, $sql_pwd)
   or die("Keine Verbindung möglich: " . mysqli_error());
   mysqli_select_db($sql_link, "content") ;

   $query = "SELECT * FROM content";
   $result = mysqli_query($sql_link, $query) or die("Anfrage fehlgeschlagen: " . mysql_error());




   while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
     $content = html_entity_decode($line['CONTENT']);
         echo '<section class="content_section">
           <h1>'.$line['HEADLINE'].'</h1>
           <h2 class="animated" animated="'.$line['FUN_LINE'].'" sec="120" index="0" subindex="0" hold="500" reverse="50">ss</h2>
           <hr>
           '.$content.'
           <p class="menu"> <span onclick="switchPage(-1)">-ZURÜCK-</span> | <span onclick="switchPage(+1)">-WEITER-</span> </p>
         </section>';
   }

   ?>





</div>
