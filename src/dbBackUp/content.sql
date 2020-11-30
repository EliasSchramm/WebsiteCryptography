-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 29. Nov 2020 um 12:46
-- Server-Version: 10.4.16-MariaDB
-- PHP-Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `content`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE `content` (
  `ID` int(11) NOT NULL,
  `HEADLINE` text NOT NULL,
  `FUN_LINE` text NOT NULL,
  `CONTENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`ID`, `HEADLINE`, `FUN_LINE`, `CONTENT`) VALUES
(17, 'Cryptographie', 'INFORMATIONEN;VERSCHLÜSSELN;UND;VERSTECKEN', '&lt;h2&gt;Was ist Cryptographie?&lt;/h2&gt;\r\n\r\n    &lt;p class=&quot;comment&quot;&gt;\r\n      &quot;Sie befasst sich auch allgemein mit dem Thema Informationssicherheit,\r\n       also der Konzeption, Definition und Konstruktion von\r\n       Informationssystemen, die widerstandsf&auml;hig gegen Manipulation\r\n       und unbefugtes Lesen sind&quot; &lt;br&gt;- &lt;br&gt;Wikipedia\r\n    &lt;/p&gt;'),
(18, 'Über das Folgende', 'VERSTEHEN;UND;AUSPROBIEREN', '&lt;p&gt;\r\n      Im Folgenden werde ich das Thema der Cryptographie aufzeigen. Allerdings habe ich nicht vor in hochtrabende Technologien abzuschweifen.\r\n      Sondern m&ouml;chte ich auf den weiterf&uuml;hrenden Seiten die einfachsten Prinzipien vorstellen. Und zwar so dass es einfach verst&auml;ndlich auch\r\n      f&uuml;r Laien ist. So wird es auch immer Beispiele zum ausprobieren geben.\r\n    &lt;/p&gt;\r\n'),
(19, 'Erste Schritte', 'EINFACHER;GEHT;ES;NICHT;!', '&lt;p&gt;Beginnen wir mit der wohl simpelsten Art der Verschl&uuml;sselung: Das inkrementieren der Zeichen. &lt;br&gt;\r\n      Damit ist gemeint das mit einem KEY +1 ein \'B\' zum \'C\' wird. Mit KEY -1 wird \'B\' zu \'A\' &lt;br&gt;\r\n      Dadurch dass diese Verschl&uuml;sselung so denkbar einfach ist, ist es problemlos m&ouml;glich sie zu brechen. Entweder durch das sture Ausprobieren von Keys oder auch Logik.\r\n      So ist es zum Beispiel m&ouml;glich nach den h&auml;ufigsten Zeichen zu suchen, annehmen das es ein \'e\' ist und anschliesen daraus den Key herleiten.\r\n    &lt;/p&gt;'),
(20, 'Erste Schritte', 'EINFACHER;GEHT;ES;NICHT;!', '&lt;form id=&quot;form1_bsp1&quot; action=&quot;&quot; method=&quot;post&quot; &gt;\r\n      &lt;label for=&quot;f1_t1&quot;&gt;Text: &lt;/label&gt;\r\n      &lt;textarea cols=&quot;40&quot; rows=&quot;4&quot; type=&quot;text&quot; name=&quot;f1_t1&quot; id=&quot;f1_t1&quot; value=&quot;Text&quot;&gt;&lt;/textarea&gt;\r\n\r\n      &lt;label for=&quot;f1_t2&quot;&gt;Key: &lt;/label&gt;\r\n      &lt;input type=&quot;number&quot; name=&quot;f1_i1&quot; id=&quot;f1_i1&quot; value=&quot;1&quot;&gt;\r\n\r\n      &lt;button type=&quot;submit&quot;&gt;VERSCHL&Uuml;SSELN&lt;/button&gt;\r\n    &lt;/form&gt;\r\n\r\n    &lt;p&gt;Output:  &lt;span id = &quot;out1&quot;&gt;&lt;/span&gt; &lt;/p&gt;\r\n\r\n    &lt;form id=&quot;form2_bsp1&quot; action=&quot;#&quot; method=&quot;post&quot;&gt;\r\n      &lt;label for=&quot;f2_t1&quot;&gt;Text: &lt;/label&gt;\r\n      &lt;textarea cols=&quot;40&quot; rows=&quot;4&quot; id=&quot;f2_t1&quot; name=&quot;f2_t1&quot; value=&quot;Text&quot;&gt; &lt;/textarea&gt;\r\n\r\n      &lt;label for=&quot;f2_t2&quot;&gt;Key: &lt;/label&gt;\r\n      &lt;input type=&quot;number&quot; id=&quot;f2_i1&quot; name=&quot;f2_i1&quot; value=&quot;1&quot;&gt;\r\n\r\n      &lt;button type=&quot;submit&quot;&gt;ENTSCHL&Uuml;SSELN&lt;/button&gt;\r\n    &lt;/form&gt;\r\n\r\n    &lt;p&gt;Output:  &lt;span id = &quot;out2&quot;&gt;&lt;/span&gt; &lt;/p&gt;'),
(21, 'Etwas Sicherer', 'NUN;ZÄHLEN;WIR', '&lt;p&gt;\r\n      Ein Grundstein liegt nun.\r\n      Im n&auml;chsten Beispiel m&ouml;chte ich mich darum k&uuml;mmern dass man problemlos h&auml;ufige Zeichen wie Leerzeichen oder \'e\'\r\n      aus dem verschl&uuml;sselten Text heraussuchen kann und damit den Text problemlos entschl&uuml;sseln kann. &lt;br&gt;\r\n      Wie macht man das? &lt;br&gt;\r\n      Nun ja, hier gibt es wieder unendlich viele M&ouml;glichkeiten. Ich m&ouml;chte allerdings die wohl simpelste Variante w&auml;hlen: Das Erh&ouml;hen des Key f&uuml;r jedes Zeichen. &lt;br&gt;\r\n      So wird z.B. bei der Zeichenkette \'Moin\' mit Key(1) das \'M\' mit Key(1) verschl&uuml;sselt, das \'o\' mit Key(2), \'i\' mit Key(3) usw.\r\n    &lt;/p&gt;'),
(22, 'Etwas Sicherer', 'NUN;ZÄHLEN;WIR', '&lt;form id=&quot;form1_bsp2&quot; action=&quot;&quot; method=&quot;post&quot; &gt;\r\n      &lt;label for=&quot;f3_t1&quot;&gt;Text: &lt;/label&gt;\r\n      &lt;textarea cols=&quot;40&quot; rows=&quot;4&quot; type=&quot;text&quot; name=&quot;f3_t1&quot; id=&quot;f3_t1&quot; value=&quot;Text&quot;&gt;&lt;/textarea&gt;\r\n\r\n      &lt;label for=&quot;f3_t2&quot;&gt;Key: &lt;/label&gt;\r\n      &lt;input type=&quot;number&quot; name=&quot;f3_i1&quot; id=&quot;f3_i1&quot; value=&quot;1&quot;&gt;\r\n\r\n      &lt;button type=&quot;submit&quot;&gt;VERSCHL&Uuml;SSELN&lt;/button&gt;\r\n    &lt;/form&gt;\r\n\r\n    &lt;p&gt;Output:  &lt;span id = &quot;out3&quot;&gt;&lt;/span&gt; &lt;/p&gt;\r\n\r\n    &lt;form id=&quot;form2_bsp2&quot; action=&quot;#&quot; method=&quot;post&quot;&gt;\r\n      &lt;label for=&quot;f4_t1&quot;&gt;Text: &lt;/label&gt;\r\n      &lt;textarea cols=&quot;40&quot; rows=&quot;4&quot; id=&quot;f4_t1&quot; name=&quot;f4_t1&quot; value=&quot;Text&quot;&gt; &lt;/textarea&gt;\r\n\r\n      &lt;label for=&quot;f4_t2&quot;&gt;Key: &lt;/label&gt;\r\n      &lt;input type=&quot;number&quot; id=&quot;f4_i1&quot; name=&quot;f4_i1&quot; value=&quot;1&quot;&gt;\r\n\r\n      &lt;button type=&quot;submit&quot;&gt;ENTSCHL&Uuml;SSELN&lt;/button&gt;\r\n    &lt;/form&gt;\r\n\r\n    &lt;p&gt;Output:  &lt;span id = &quot;out4&quot;&gt;&lt;/span&gt; &lt;/p&gt;');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `content`
--
ALTER TABLE `content`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
