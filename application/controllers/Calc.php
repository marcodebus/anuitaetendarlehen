<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calc extends CI_Controller {

	public function index()
	{
    echo '<html><head></head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head><body>';
    //Modell für ZINSUMRECHNUNG
    $this->load->model('Model');
    //GEGEBENE WERTE für Aufgabenstellung:
    $darlehensbetrag = 100000;
    $agio	= 2500;
    $gesamtRestsumme = 	$darlehensbetrag + $agio;
    $anuitaet =	 10000;


    //ZINSUMRECHNUNG VON Jährlich auf monatlich:
    $zinssatzGanzeZahl = 10;
    $zinssatzProzentPA = $zinssatzGanzeZahl / 100;
    $zinssatzProMonat = $zinssatzProzentPA / 12;



    echo "<h1>Muster Darlehensberechnung</h1><h6><br>  Die Gesamtrestschuld = ". $this->Model->format($gesamtRestsumme);
    echo "<br>  Der Jährliche Zinssatz entspricht: ". $this->Model->formatProzent($zinssatzGanzeZahl);
    echo "<br>  Geteilt durch 100 ist ". $this->Model->formatProzent($zinssatzProzentPA);
    echo "<br>  Ein Monatlicher Zinssatz (Geteilt durch 12) ist ". $this->Model->formatProzent($zinssatzProMonat) . '<br></h6>';


    //Tabellenerstellung:
    echo '<table class="table">';
    echo "<th>Restschuld</th>   <th>Zinsen</td>   <th>Tilgungsanteil</th>";
    //Schleife zur Berechnung
    $i = 0;
    $j = false;
    while ($j != true ){
      echo "<tr>";
        if ($i == 0) {
          $i = $i +1;
          $restschuld = $gesamtRestsumme;
        } else {
          $restschuld = $restschuld - $tilgung;
        }
          $zinsen = $zinssatzProMonat * $restschuld;
          $tilgung = $anuitaet - $zinsen;

          echo "<td>".$this->Model->format($restschuld)."</td>";
          echo "<td>".$this->Model->format($zinsen)."</td>";


          if ($restschuld < $tilgung){
            $test = ($restschuld - $tilgung);
            echo '<td>'.$this->Model->format($restschuld).'</td>';
            $j = true;
          }else{
              echo "<td>".$this->Model->format($tilgung - $zinsen)."</td>";

          }
      echo "</tr>";

    }


    echo '</table></body></html>';
	}






}



 ?>
