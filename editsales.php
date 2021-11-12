<?php
    $conn =  mysqli_connect('localhost','root','');
    @mysqli_select_db($conn,'mitp');
    $product = $conn->query("SELECT product_name FROM products");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Safeway Solutions Sdn Bhd</title>
</head>

<body>
<h1> Safeway Solutions Sendirian Berhad</h1>

<a href="addsales.php"> Add Sales Record </a>
<a href="editsales.php"> Edit Sales Record </a>
<a href="displaydata.php"> Display Sales Record </a>
<a href=""> Sales Prediction </a>
<a href="logout.php"> Log Out </a>

<h3>Add Sales Record</h3>
<form>
    <label form ="products">Please Select Product:</label>
    <select name="products" id="products">
    <?php
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

    <label for="branch"> Branch Location </label>
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

<br>
<br>
<label for="date"> Today's Date: </label>
<input type="date" id="date" name="date">

<br>
<br>
<input type="submit" id="submit" name="Submit">
</form>
</body>


</html>