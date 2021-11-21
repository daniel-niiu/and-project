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
		
		<h3>Add Sales Record</h3>
		<br>
		<form>
			<label form ="products">Please Select Product:</label>
			<select name="products" id="products">
			<?php
				$conn =  mysqli_connect('localhost','root','', 'company');
				$product = $conn->query("SELECT product_name FROM products");
				
				while($rows = $product->fetch_assoc())
				{
					$product_name = $rows['product_name'];
					echo "<option value='$product_name'>$product_name</option>";
					//when click product display product code, category, price & volume
				}
			?>
			</select>
			
			<br>
			<br>
			
			<label for="qty"> Quantity Sold (Unit): </label>
			<input type="number" id="qty" name="qty" min="1" max="100">
			
			<br>
			<br>
			
			<label for="total"> Total Earned (RM): </label>
			<!-- display total price auto (retail price x qty ) -->
			
			<br>
			<br>

			<label for="branch"> Branch Location: </label>
			<select name="branch" id="branch">
				<option value="Kuching"> Kuching </option>
				<option value="Samarahan"> Samarahan </option>
				<option value="Serian"> Serian </option>
				<option value="SriAman"> Sri Aman </option>
				<option value="Betong"> Betong </option>
				<option value="Sarikei">Sarikei </option>
				<option value="Mukah"> Mukah </option>
				<option value="Sibu"> Sibu </option>
				<option value="Bintulu"> Bintulu </option>
				<option value="Miri"> Miri </option> 
				<option value="Kapit">Kapit </option>
				<option value="Limbang">Limbang</option>
			</select>

			<br><br>
			<label for="date"> Today's Date: </label>
			<input type="date" id="date" name="date">

			<br><br>
			<div style="text-align:center;">
			<input type="submit" id="submit" name="Submit">
			</div>
			
			<br><br>
		</form>
</body>
</html>
<?php 
}else {
   header("Location: login.php");
}
?>