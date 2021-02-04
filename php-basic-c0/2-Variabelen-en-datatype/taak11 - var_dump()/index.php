<?php

$naam              = "Osama AL Hamoud"; //Data type [1] String
$nummer            = 5;                 //Data type [2] Integer
$decimale_getallen = 5.55;              //Data type [3] Floating Point Number
$var4              = true;              //Data type [4] Bloolean / مشان الترو ول فالاص 
$var_5             = array(             //Je kan ook meerdere waardes in een variabele opslaan اكثر من متغير تقدر تحطو بي اريه وحده يختصر عليك عناء كثير
    "<li>A</li<" => "V",
    "<li>B</li<" => 50,
    "<li>C</li<" => 50.65,
);

echo "<h2> Get Type </h2>";
echo gettype($naam)    . "<br/>";
echo gettype($nummer)  . "<br/>";
echo gettype($decimale_getallen) . "<br/>";
echo gettype($var4)    . "<br/>";
echo gettype($var_5)    . "<br/>";





echo "<h2> Varaible var_dump </h2>";

var_dump($naam);  echo "<br/>";
var_dump($nummer); echo  "<br/>";
var_dump($decimale_getallen); echo  "<br/>";
var_dump($var4); echo  "<br/>";
var_dump($var_5); echo  "<br/>";
