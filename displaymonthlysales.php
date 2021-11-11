<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Product Name</th>
<th>Sales Date</th>
<th>Sales Location</th>
<th>Units Sold</th>
<th>Sales Total (RM)</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "company");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM sales";
$result = $conn->query($sql);
if ($result !== false && $result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["product_name"]. "</td><td>" . $row["sales_date"]. "</td><td>" . $row["sales_location"] . "</td><td>" . $row["sales_quantity"] . "</td><td>" . $row["sales_total"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>