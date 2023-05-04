<?php
$points = 4;

if ($points >= 5) {
  echo "Distinction";
} elseif ($points >= 4) {
  echo "Credit";
} elseif ($points >= 3) {
  echo "Average";
} elseif ($points >= 2) {
  echo "Pass";
} else {
  echo "Fail";
}
?>