


<?php

//GEGEBENE WERTE für Aufgabenstellung:
$darlehensbetrag = 100000;
$agio	= 2500;
$gesamtRestsumme = 	$darlehensbetrag + $agio;
$anuitaet =	 10000;


//ZINSUMRECHNUNG VON Jährlich auf monatlich:
$zinssatzGanzeZahl = 10;
$zinssatzProzentPA = $zinssatzGanzeZahl / 100;
$zinssatzProMonat = $zinssatzProzentPA / 12;



echo "<br>  Die Gesamtrestschuld = ". $gesamtRestsumme;
echo "<br>  Der Jährliche Zinssatz entspricht: ". $zinssatzGanzeZahl;
echo "<br>  Geteilt durch 100 ist ". $zinssatzProzentPA;
echo "<br>  Ein Monatlicher Zinssatz (Geteilt durch 12) ist ". $zinssatzProMonat;


//Tabellenerstellung:
echo '<table>';
echo "<th>Restschuld</td>   <td>Zinsen</td>   <td>Tilgungsanteil</td>";
//Schleife zur Berechnung
$i = 0;
while ($i < 10 ){
  echo "<tr>";
    if ($i == 0) {
      $restschuld = $gesamtRestsumme;
    } else {
      $restschuld = $restschuld - $tilgung;
    }
      $zinsen = $zinssatzProMonat * $restschuld;
      $tilgung = $anuitaet - $zinsen;
      echo "<td>".$restschuld."</td>";
      echo "<td>".$zinsen."</td>";
      echo "<td>".$tilgung."</td>";
      // code...
    }
  echo "</tr>";

  $i = $i +1;
}


echo '</table>';
 ?>
