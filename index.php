<?php 
  session_start();

  if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
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
	 <div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 100vh;">
	 	<i class="bi bi-person-fill" style="font-size: 14rem"></i>
        <h1 class="text-center display-4" style="margin-top: -60px;font-size: 2rem"><?=$_SESSION['user_full_name']?></h1>
        <a href="logout.php" class="btn btn-warning">LOGOUT</a>

        <table>
				<tr>
				<th>Product ID</th>
				<th>Product name</th>
				<th>Category</th>
				<th>Price</th>
				</tr>
				<?php
				$conn = mysqli_connect("localhost", "root", "", "company");
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT * FROM products";
				$result = $conn->query($sql);
				if ($result !== false && $result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["product_id"]. "</td><td>" . $row["product_name"]. "</td><td>" . $row["category"] . "</td><td>"
				. $row["price"]. "</td></tr>";
				}
				echo "</table>";
				} else { echo "0 results"; }
				$conn->close();
				?>
				</table>





	 </div>
</body>
</html>
<?php 
}else {
   header("Location: login.php");
}
 ?>
