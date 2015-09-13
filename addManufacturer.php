<html>
<head>
<title>Index</title>

<link rel="stylesheet" href="css/s.css" >
 
</head>

<div class = "center">
<div class = "rh">
<a  href="#"><b>Login</b></a>

</div>
<body>
<head>
<img style="position: absolute; top: -1%; left:22%; margin: 30px -30px -30px 30px;" src="Ashesi.jpg" width="120" />

<p style = "text-align:center; font-size: 30px"><b>Ashesi University College<b></p>
<p style = "text-align:center ; font-size: 25px"><b>Inventory Management System<b></p>
<nav>

<ul>
<li><a href="home.php">Home</a></li>

<li><a href="laboratories.php">Laboratories</a></li>
<li><a href="manufacturers.php">Manufactures</a></li>
<li><a href="students.php">Students</a></li>
</ul>

</nav>
</head>
</div>

<div class = "center1" style="text-align:center" >
<br><ul class = 'm'>
<li><a href = 'addManufacturer.php'>Add a manufacturer </a></li>
<li><a href = 'searchManufacturer.php'>Display all Manufacturers</a></li><br>
</div>

<div class= "center2">
<p style = "font-size: 25px" align:"center">Add a Manufacturer to Database</p>
<table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee" style="text-align:center">
<th colspan="2" align="center">Add Manufacturer</th>
<form action ="addManufacturer.php" method = "GET" style="text-align:center">
<tr><td>Manufacturer Name</td>
<td><input type ="text" name ="mn"></td></tr>
<tr><td>Manufacturer ID</td>
<td> <input type = "text" name = "mid"></td></tr>
<tr><td>Address</td>
<td><input type = "text" name ="aid"></td></tr>
<tr><td colspan="2" align="center"><input type ="submit" value= "Save"></td></tr>
</form>


</table>
</table>

<?php

 if(isset($_REQUEST['mn'])){  

include("manufacturersClass.php");
$obj = new manufacturer();

$manufacturer_name=$_REQUEST['mn'];
$manufacturer_id=$_REQUEST['mid'];
$address=$_REQUEST['aid'];

if(!$obj->add_manufacturer($manufacturer_name,$manufacturer_id, $address)){

echo "Error adding".mysql_error();
}
else
{
echo " $manufacturer_name has successfully being added to the database";
}
}

?>

</div>


</body>
</html>