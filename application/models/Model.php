

<?php
class Model extends CI_Model {



  public function format($betrag = double){
    return number_format($betrag, 2, ',', '.') . " &euro;<br />"; // 12.345,68 €
  }

  public function formatProzent($betrag = double){
    return number_format($betrag, 3, ',', '.') . " %;<br />"; // 12.345,68 €
  }


      }
