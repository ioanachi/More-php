<?php
/*
Task-ul 2 trebuie sa ruleze pana cand conditia din functie
e true cu while;
*/
function calculeazaValoare($parametru){
  if ($parametru<30) {
    $rezultat = $parametru +3;

    echo $rezultat." ".'<30<br />' ;

  }else {
    echo $parametru.' >30';
  }
}


$a=2;
while (($a+3)<30){
  calculeazaValoare ($a);
  $a=$a+3;
}




?>
