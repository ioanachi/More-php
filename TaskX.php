<?php
/*
Pas 1:
Fa un prgram (un fisier PHP) pe care de fiecare data cand il incarci sa genereze un numar random din 3 numere (ex: 592)

Pas 2:
Apoi, trebuie sa adaugi si un caracter pe langa celelalte numere chiar la inceput.
Ex de ce o sa apara cand incarc fisierul:
T483 sau G239 sau L983

Cum faci:
1. Ai o functie PHP ce iti genereaza numere intre un minim si un maxim. Gaseste-o si foloseste-o sa gasesti numarul din 3 numere si sa completezi pasul 1.Din moment ce cerinta e de 3 numere initial, o sa ai un minim de.....(aici tu gandesti cat) si un maxim de... aici tu gandesti cat. Ai mai folosit functia asta sa generezi un numar random. Acum dai minim si maxim si o folosesti cu un anumit scop.

2. Ca sa generezi un caracter Random: hai sa facem de la 0. Faci o variabila string in care bagi tot alfabetul manual (ex 'ABCDEFGHIJKLMNOPQRSTUVXYZ') apoi il spargi in array si faci alegi un numar random cu maximul lenght-ului de array-ul format din alfabet, si apoi il afisezi.

Poti face asta cu cate functii vrei, sau cu nici o functie, cu cate loop-uri vrei sau cu nici un loop.
POTI LUA CE ABORDARE VREI... vreau doar ca scop sa imi genereze un numar unic la task de ficare data format din 4 caractere : O litera la inceput si 3 numere de la 0 la 9 inclusiv ex: Y702

O sa folosesc script-ul asta sa generez denumirea task-urilor pe viitor. Task-urile tale o sa se cheme ceva de genul K811 OOP Basics pe viitor.


$nr = [1,2,3,4,5,6,7,8,9];
$a = ["a","b","c"];
$b = 0;
for ($i=0; $i < count ($nr); $i++) {
  if ($b<= count ($a)){
  echo $nr[$i].$nr[$i].$nr[$i].$a[$b]."<br/>";
  $b++;
}
}
function randNr ($nr){
$i = [0,1,2,3,4,5,6,7,8,9];
$a = ["a","b","c"];

echo $nr[$i].$a[I].$nr[$i].$nr[$i];
}
*/

$nr = [1,2,3,4,5,6,7,8,9];
//$litere = [a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,z];
//$a = ["a","b","c","d","f",'g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','z'];
//$primul = mt_rand (0,count($a));
//$b = strtoupper ($a[$primul]);

function tenTimes($i,$j){
  $a = ["a","b","c","d","f",'g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','z'];
  $primul = mt_rand (0,(count($a)-1));
  $b = strtoupper ($a[$primul]);
  echo $b.mt_rand (0,$i)."<br/>";


//while ($r <= $j) {
for ($r=0; $r < $j; $r++) {
  echo tenTimes ($i,$r)."<br/>";



}
}

tenTimes(100,10)

 ?>
