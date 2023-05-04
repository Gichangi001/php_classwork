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

$num = 1;

echo "<table>";
echo "<tr>";
echo "<th>Number</th>";
echo "<th>Square</th>";
echo "</tr>";

while ($num <= 5) {
  echo "<tr>";
  echo "<td>" . $num . "</td>";
  echo "<td>" . ($num * $num) . "</td>";
  echo "</tr>";
  $num++;
}

echo "</table>";

?>
</body>
</html>


