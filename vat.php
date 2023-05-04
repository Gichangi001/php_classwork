<?php

//The VAT rate percentage.
$vat = 16;

//The price, excluding VAT.
$priceExcludingVat = 1200;

//Calculate VAT to be paid.
$vatToPay = ($priceExcludingVat / 100) * $vat;

//The total price, including VAT.
$totalPrice = $priceExcludingVat + $vatToPay;

//Print out the final price, with VAT added.
//Format it to two decimal places with number_format.
$allPrice = $totalPrice * 4;


echo "Vat amount for each item is:";
echo ($vatToPay);
echo "<br><br>";


echo "Total amount for each is:";
echo number_format($totalPrice, 2);
echo "<br><br>";


echo "Total amount for all four:";
echo number_format($allPrice, 2);


?>