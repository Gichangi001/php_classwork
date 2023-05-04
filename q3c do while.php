<html>
<body>
<style type="text/css"> 
table{
	width: 800px;
	margin: auto;
	table-layout: fixed;
	margin-top: 50px;
	
}
 table, th, td {
border: 1px solid black;
 border-collapse: collapse;
 style: 100%;
}
</style>
<?php
$i = 1;

echo "<table>";
echo "<tr>";
echo "<th>Number</th>";
echo "<th>Square</th>";
echo "</tr>";

do {
  $square = $i * $i;
  echo "<tr>";
  echo "<td>" . $i . "</td>";
  echo "<td>" . $square . "</td>";
  echo "</tr>";
  $i++;
} while ($i <= 5);

echo "</table>";
?>
</body>
</html>