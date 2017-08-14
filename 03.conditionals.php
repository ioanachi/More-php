<?php
/*
Task-ul 2 trebuie sa ruleze pana cand conditia din functie
e true;
*/
function calculeazaValoare($parametru){
  if ($parametru<30) {
    $rezultat = $parametru +3;

    echo $rezultat." ".'<30<br />' ;
    calculeazaValoare($rezultat);
  }else {
    echo $parametru.' >30';
  }


}
calculeazaValoare(4);



?>
