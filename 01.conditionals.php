<?php
function test($parametru = true){
  return !$parametru;
}
$conditie = true;
function conditieFunctie($cond){
  if($cond){
    echo 'e adevarata<br/>';
} else {
  echo 'Schimbam valoarea <br/>';
  $cond = test($cond);
  conditieFunctie($cond);
  }
}

conditieFunctie(!$conditie);





 ?>
