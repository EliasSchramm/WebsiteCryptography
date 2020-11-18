<div class="c">
  <section class="content_section">
    <h1>Cryptographie</h1>
    <h2 class="animated" animated="INFORMATIONEN;VERSCHLÜSSELN;UND;VERSTECKEN" sec="120" index="0" subindex="0" hold="500" reverse="50">ss</h2>
    <hr>
    <h2>Was ist Cryptographie?</h2>

    <p class="comment">
      "Sie befasst sich auch allgemein mit dem Thema Informationssicherheit,
       also der Konzeption, Definition und Konstruktion von
       Informationssystemen, die widerstandsfähig gegen Manipulation
       und unbefugtes Lesen sind" <br>- <br>Wikipedia
    </p>
    <p class="menu"> <span onclick="switchPage(-1)">-ZURÜCK-</span> | <span onclick="switchPage(+1)">-WEITER-</span> </p>
  </section>

  <section class="content_section">
    <h1>Über das Folgende</h1>
    <h2 class="animated" animated="VERSTEHEN;UND;AUSPROBIEREN" sec="120" index="0" subindex="0" hold="500" reverse="50">ss</h2>
    <hr>

    <p>
      Im Folgenden werde ich das Thema der Cryptographie aufzeigen. Allerdings habe ich nicht vor in hochtrabende Technologien abzuschweifen.
      Sondern möchte ich auf den weiterführenden Seiten die einfachsten Prinzipien vorstellen. Und zwar so dass es einfach verständlich auch
      für Laien ist. So wird es auch immer Beispiele zum ausprobieren geben.
    </p>

    <p class="menu"> <span onclick="switchPage(-1)">-ZURÜCK-</span> | <span onclick="switchPage(+1)">-WEITER-</span> </p>

  </section>

  <section class="content_section">
    <h1>Erste Schritte</h1>
    <h2 class="animated" animated="EINFACHER;GEHT;ES;NICHT;!" sec="120" index="0" subindex="0" hold="500" reverse="50">ss</h2>
    <hr>
    <p>Beginnen wir mit der wohl simpelsten Art der Verschlüsselung: Das inkrementieren der Zeichen. <br>
      Damit ist gemeint das mit einem KEY +1 ein 'B' zum 'C' wird. Mit KEY -1 wird 'B' zu 'A' <br>
      Dadurch dass diese Verschlüsselung so denkbar einfach ist, ist es problemlos möglich sie zu brechen. Entweder durch das sture Ausprobieren von Keys oder auch Logik.
      So ist es zum Beispiel möglich nach den häufigsten Zeichen zu suchen, annehmen das es ein 'e' ist und anschliesen daraus den Key herleiten.
    </p>
    <p class="menu"> <span onclick="switchPage(-1)">-ZURÜCK-</span> | <span onclick="switchPage(+1)">-WEITER-</span> </p>
  </section>

  <section class="content_section">
    <h1>Erste Schritte</h1>
    <h2 class="animated" animated="EINFACHER;GEHT;ES;NICHT;!" sec="120" index="0" subindex="0" hold="500" reverse="50">ss</h2>
    <hr>
    <form id="form1_bsp1" action="" method="post" >
      <label for="f1_t1">Text: </label>
      <input type="text" name="f1_t1" id="f1_t1" value="Text">

      <label for="f1_t2">Key: </label>
      <input type="number" name="f1_i1" id="f1_i1" value="1">

      <button type="submit">VERSCHLÜSSELN</button>
    </form>

    <p>Output:  <span id = "out1"></span> </p>

    <form id="form2_bsp1" action="#" method="post">
      <label for="f2_t1">Text: </label>
      <input type="text" name="f2_t1" value="Text">

      <label for="f2_t2">Key: </label>
      <input type="number" name="f2_i1" value="1">

      <input type="button" name="" value="ENTSCHLÜSSELN">
    </form>

    <p>Output:  <span id = "out2"></span> </p>
    <p class="menu"> <span onclick="switchPage(-1)">-ZURÜCK-</span> | <span onclick="switchPage(+1)">-WEITER-</span> </p>

  </section>

  <section class="content_section">
    <h1>Seite 4</h1>
    <p class="menu"> <span onclick="switchPage(-1)">-ZURÜCK-</span> | <span onclick="switchPage(+1)">-WEITER-</span> </p>
  </section>

  <section class="content_section">
    <h1>Seite 5</h1>
    <p class="menu"> <span onclick="switchPage(-1)">-ZURÜCK-</span> | <span onclick="switchPage(+1)">-WEITER-</span> </p>
  </section>


</div>
