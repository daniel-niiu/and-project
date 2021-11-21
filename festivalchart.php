<?php 
  session_start();

  if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Festivalchart</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php  
				 $connect = mysqli_connect("localhost", "root", "", "company");  
				 $query = "SELECT sales_total,festival FROM festival group by festival";
				 $result = mysqli_query($connect, $query);  
?>  

 				<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Festival', 'Total Sales'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["festival"]."', ".$row["sales_total"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of sales by by Festival',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  


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

	 <div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 20vh;">
		
	 	<i class="bi bi-person-fill" style="font-size: 14rem"></i>
        <h1 class="text-center display-4" style="margin-top: -60px;font-size: 2rem"><?=$_SESSION['user_full_name']?></h1>
        <a href="logout.php" class="btn btn-warning">LOGOUT</a>
        <br>

 					<div style="width:900px;">  
                <h3 align="center">Total Sales by Festival impact</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
         







     

 		</div>




	 </div>
</body>
</html>
<?php 
}else {
   header("Location: login.php");
}
 ?>
       