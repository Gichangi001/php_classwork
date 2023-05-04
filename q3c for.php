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
<table>
  <tr>
    <th>Number</th>
    <th>Square</th>
  </tr>
  <?php
  for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $i * $i . "</td>";
    echo "</tr>";
  }
  ?>
</table>
</body>
</html>