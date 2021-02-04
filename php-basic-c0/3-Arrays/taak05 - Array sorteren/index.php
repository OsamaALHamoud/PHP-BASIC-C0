<?php
 

$nuber_laag_hoog = array (676,5345,78657,3,46,21,47,);




 echo "<h2> Dat is RSort van Hoog naar Laag ";
  
rsort($nuber_laag_hoog);

echo "<pre>";

// بل طريقه هي لو كان عندك ارقام وكلام يرتبلك حسب بيدت الحرف مثال abs\
// print_r($nuber_laag_hoog sort_regular);
// print_r($nuber_laag_hoog sort_string);


print_r($nuber_laag_hoog);

echo "</pre>";
echo "<h2> Dat is RSort van laag naar hoog ";
  
sort($nuber_laag_hoog);

echo "<pre>";


print_r($nuber_laag_hoog);

echo "</pre>";