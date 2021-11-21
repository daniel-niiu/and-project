<?php 
  session_start();

  if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="style/style.css">

<title>Safeway Solutions </title>
</head>

<body>
			<div class="d-flex justify-content-center align-items-center flex-column">
		<ul id="nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="#">Sales</a>
		<ul>
		<li><a href="displaysales.php">All Sales</a></li>
		<li><a href="displaymonthlysales.php">Monthly</a></li>
		<li><a href="areasalesimpact.php">Regional Sales</a></li>
		<li><a href="festivalsalesimpact.php">Festival Sales</a></li>
		</ul>
		</li>
		<li><a href="addsales.php">Add Record</a></li>
		<li><a href="editsales.php">Edit Record</a></li>
		<li><a href="#">Visual Charts</a>
		<ul>
		<li><a href="monthlysaleschart.php">Monthly Sales</a></li>
		<li><a href="regionalchart.php">Regional Sales</a></li>
		<li><a href="festivalchart.php">Festival Sales</a></li>
		</ul>
		</ul>	

		<img class="text-center pb-5 display-4" src ="img/lube.png">	


			</div>	

		<div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 10vh;">
	
	 	<i class="bi bi-person-fill" style="font-size: 14rem"></i>
        <h1 class="text-center display-4" style="margin-top: -60px;font-size: 2rem"><?=$_SESSION['user_full_name']?></h1>
        <a href="logout.php" class="btn btn-warning">LOGOUT</a>
        <br>
		<?php
			echo "2021-11-01: Sales lower than previous month by RM 2845.00";
		?>
		<br><br>
        <div class="table_container">

				<table>
				<tr>
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
				echo "<tr><td>" . $row["sales_date"]. "</td><td>" . $row["sales_location"] . "</td><td>" . $row["sales_quantity"] . "</td><td>" . $row["sales_total"]. "</td></tr>";
				}
				echo "</table>";
				} else { echo "0 results"; }
				$conn->close();
				?>
				</table>
			</div>
		</div>
</body>
</html>
<?php 
}else {
   header("Location: login.php");
}
 ?>