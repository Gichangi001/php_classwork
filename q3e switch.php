<?php

$points_scored = 2;

switch ($points_scored) {
  case 5:
    echo "Distinction";
    break;
  case 4:
    echo "Credit";
    break;
  case 3:
    echo "Average";
    break;
  case 2:
    echo "Pass";
    break;
  case 1:
    echo "Fail";
    break;
  default:
    echo "Invalid points scored";
    break;
}

?>



