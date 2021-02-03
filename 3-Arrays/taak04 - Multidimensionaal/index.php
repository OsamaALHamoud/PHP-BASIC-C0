<?php

$dite_week = array(
    "Eerste dag "   =>  array   ("Apple" , "Banana"),
    "Twede dag  "   =>  array   ("milk"  , "bread"),
    "dierede dag"   =>  array   ("Rice"  , "soep" ),
    "vierde dag "   =>  array   ("Vis"   , "kip" ),

);

echo "<pre>";
print_r($dite_week);

echo "</pre>";

echo ["vierde dag"][0];