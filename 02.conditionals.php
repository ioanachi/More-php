<?php
/*
functia calculeazaValoare e apelata
Parametrul care i se da are valoare 12
In functie trebuie:
 * sa se verifice daca valoarea e < 30
 * Daca e mai mica, sa se adauge 3 si sa se afiseze
 (valoarea curenta < 30)
 daca nu, sa se afiseze (valoare curenta) > 30.

 Functia trebuie sa functioneze cu orice parametru i
 se da.
 Ex: o sa fie chemata calculeazaValoare(12);

*/
function calculeazaValoare($parametru){
  if ($parametru<30) {
    $rezultat = $parametru +3;

    echo $rezultat." ".'<30' ;
  }else {
    echo $parametru.' >30';
  }

}


calculeazaValoare(4);



?>
