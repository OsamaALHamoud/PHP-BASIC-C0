<?php

$prod_prijs1 =10 ;
$prod_prijs2 =12 ;
$prod_prijs3 =12 ;




if($prod_prijs1 < 10){
    echo 1.50 . "<br/>";

}

elseif($prod_prijs2 < 20){
    echo 1.25 . "<br/>"; 

}


if($prod_prijs1 < 20){
    echo 1.50 . "<br/>";

}

elseif($prod_prijs2 < 20){
    echo 1.25 . "<br/>"; 

}


if($prod_prijs1 > 20){
    echo 1.50 . "<br/>";

}

elseif($prod_prijs2 < 20){
    echo 1 . "<br/>"; 

}


