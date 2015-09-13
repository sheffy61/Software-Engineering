<html>
<head>
<title>Index</title>
<link rel="stylesheet" href="css/s.css">
</head>

<div class = "rh">
<a  href="#"><b>Login</b></a>
</div>
<div class = "center">
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
<li><a href = 'addEquipment.php'> Add Item  </a></li>
<li><a href = 'searchEquipment.php'>Display items </a></li>
<li><a href = 'addlab.php'>Add a lab </a></li>
</div>
<div class = "center2" style="text-align:center" >
<p style = "text-align:center; font-size: 25px">Search for an Item </p>

<p style = "text-align:center; font-size: 15px"> Input Name to search</p>
<form  method="post" action="searchEquipment.php"  id="searchform" style = "text-align:center"> 
<input type = "text" name ="search">
<input  type="submit" name="submit" value="Search"> 
</form>  
</div>
</div>
</body>
</html>