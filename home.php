<html>
<head>
<title>Index</title>
<link rel="stylesheet" href="css/s.css">

 
</head>
<div class = "center">
<div class = "rh">
<a  href="login.php"><b>Login</b></a>
</div>
<body>
<head>
	Software Engineering
<img style="position: absolute; top: 1%; left:22%; margin: 30px -30px -30px 30px;" src="Ashesi.jpg" width="120" />
<p style = "text-align:center; font-size: 30px"><b>Ashesi University College<b></p>
<p style = "text-align:center ; font-size: 25px"><b>Inventory Management System<b></p>

<ul id="accordion" style="position: absolute; top: 38%; left:-2%; margin: 30px -30px -30px 30px;" >
    <li a href="students.php"> <div>Students</div></a></li>
    <li><div>About Us</div></li>
    <li><div>Administrators</div></li>
    <li><div>Visitors</div></li>
    <li><div>Inventory</div></li>
    <li><div>Borrowers</li>
</ul>
 <script>
$("#accordion > li > div").click(function(){
 
    if(false == $(this).next().is(':visible')) {
        $('#accordion ul').slideUp(300);
    }
    $(this).next().slideToggle(300);
});
$('#accordion ul:eq(0)').show();
</script>

<nav>
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="laboratories.php">Laboratories</a> </li>
<li><a href="manufacturers.php">Manufactures</a></li>
<li><a href="students.php">Students</a> </li>
</ul>
</nav>
</head>
</div>

<div class = "center1" >
<div style="text-align: center"><img src="inven.jpg" width="850" /></div>





<p style = "float:  center; text-align:center">Search for an Item</p> 
<form  method="post" action="searchItem.php"  id="searchform" style = "text-align:center"> 
<input  type="text" size = "30" name="name"> 
<input  type="submit" name="submit" value="Search"> 
</form>  
		
<p style = "color: black"> This is the official webpage for Inventory Management for Ashesi University Collge.
		Before Using the full functionality of this website, Make sure you login in with a 
		valid username and password. Thank You.
</p>

<br><ul class = 'm'>
<li><a href = 'addManufacturer.php'>Add a manufacturer </a></li>
<li><a href = 'searchAnything.php'>Search anything </a></li>
<li><a href = '#'> Content Space </a></li><br>
<p style = "color: red">Click to perform a function</p>
	</div>
</body>
</html>	
