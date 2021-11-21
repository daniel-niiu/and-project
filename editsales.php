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
		
		<h3>Edit Sales Record</h3>
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

			<!-- price txtbox-->
			<label for="price"> Price of item: </label>
			<input type ="text" id="price" name="price">

			<br>

			<!-- qty txtbox -->
			<label for="qty"> Quantity: </label>
			<input type="text" name="qty" value="1"/>
			<br>

			<!-- location txtbox-->
			<label for="branch"> Branch Location:</label>
		    <select name="branch" id="branch">
				<option disabled selected> -- Select Branch -- </option>
				<optgroup label ="Sarawak">
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
				</optgroup>
				<optgroup label="Sabah">
					<option value="Beaufort">Beaufort </option>
					<option value="Beluran">Beluran</option>
					<option value="Kalabakan">Kalabakan</option>
					<option value="Keningau">Keningau</option>
					<option value="Kinabatangan">Kinabatangan</option>
					<option value="KotaBelud"> Kota Belud</option>
					<option value="KotaKinabalu">Kota Kinabalu </option>
					<option value="KotaMarudu"> Kota Marudu </option>
					<option value="KualaPenyu"> Kuala Penyu</option>
					<option value="Kudat"> Kudat</option>
					<option value="Kunak"> Kunak</option>
					<option value="LahadDatu"> Lahad Datu </option>
					<option value="Nabawan">Nabawan</option>
					<option value="Papar"> Papar </option>
					<option value="Penampang">Penampang</option>
					<option value="Pitas">Pitas </option>
					<option value="Putatan">Putatan</option>
					<option value="Ranau">Ranau</option>
					<option value="Sandakan">Sandakan</option>
					<option value="Semporna">Semporna </option>
					<option value="Sipitang">Sipitang</option>
					<option value="Tambunan">Tambunan</option>
					<option value="Tawau">Tawau </option>
					<option value="Telupid">Telupid</option>
					<option value="Tenom">Tenom</option>
					<option value="Tongod">Tongod</option>
					<option value="Tuaran">Tuaran</option>
				</optgroup>
			</select>

			<br>

			<label for="total"> Total Sales: </label>
			<input type="text" id="total" name="total">

			<br>

			<label for="staff"> Staff Name: </label>
			<input type="text" id="staff" name="staff">


			<br><br>
			<div style="text-align:center;">
			<input type="submit" id="submit" name="Submit">
			</div>
			
			<br><br>
		</form>
			
			<?php
			if (isset($_POST['editsales']))
			{
				$products = $_POST['products'];
				$price = $_POST['price'];
				$qty = $_POST['qty'];
				$branch = $_POST['branch'];
				$total = $_POST['total'];
				$staff = $_POST['staff'];

				$date = date("Y-m-d H:i:s");


				$sql = "update sales SET sales_quantity= '$qty', sales_total='$total', staff_username = '$staff', product_name = '$products' where sales_location = '$branch'";

				if(mysqli_query($conn, $sql))
				{
					echo "<p> Edited Sales Data Stored Sucessfully</p>";
				}
				else
				{
					echo "<p> Problem with editing sales data </p>";
				}


			}
				mysqli_close($conn);
							      
			?>					      
								      
</body>
</html>
<?php 
}else {
   header("Location: login.php");
}
?>
