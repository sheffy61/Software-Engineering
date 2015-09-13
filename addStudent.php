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
<li><a href="Home.php">Home</a></li>
<li><a href="laboratories.php">Laboratories</a></li>
<li><a href="manufacturers.php">Manufactures</a></li>
<li><a href="student.php">Students</a></li>
</ul>
</nav>
</head>
</div>

<div class = "center1" style="text-align:center" >
<br><ul class = 'm'>
<li><a href = 'addStudent.php'>Add a Student </a></li>
<li><a href = 'searchStudent.php'>Search for a Student </a></li><br>
</div>
<div class= "center2">


<p style = "font-size: 25px">Add a Student to Database</p>
<table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee" style="text-align:center">
<th colspan="2" align="center">Add Person</th>


<form action ="addStudent.php" method = "GET" style="text-align:center">
<tr><td>Person Name</td>

<td><input type ="text" name ="pn" id="personName" required></td></tr>
<tr><td>Person Id</td>
<td> <input type = "text" name = "pid" id="personId" required></td></tr>
<tr><td>Address</td>
<td><input type = "text" name ="aid" id="address" required></td></tr>
<tr><td>Major</td>
<td><input  type = "text" name = "mj" id="major" required></td><tr>
<tr><td colspan="2" align="center"><input type ="submit" value= "Save"></td></tr>
</form>


</table>
</table>

<script>
      function checknStudent()  {
        var PersonName = document.getElementById('personName').value; 
        var x = /[a-z]{2,100}$/.test(personName);
        if(!x){
          alert("incorrect Person Name");
          
        }
        var personId = document.getElementById('personId').value; 
        var y = /[1-9]{10}$/.test(personId);
        if(!y){
          alert("You must enter at least two characters for the Person ID");
            }
        var Address = document.getElementById('address').value; 
        var z = /[a-z]{2,100}$/.test(address);
        if(!z){
          alert("You must enter at least two characters for the address");
          }
          var major = document.getElementById('major').value; 
        var z = /[a-z]{2,100}$/.test(major);
        if(!z){
          alert("You must enter at least two characters for the major");
          }
    }
        
  </script>

<?php
if(isset($_REQUEST['pn'])){  

include("personClass.php");
$obj = new persons();

$person_name=$_REQUEST['pn'];
$person_id=$_REQUEST['pid'];
$address=$_REQUEST['aid'];
$major=$_REQUEST['mj'];

if(!$obj->add_person($person_name,$person_id, $address,$major)){

echo "Error adding".mysql_error();
}
else
{
echo " $person_name has successfully being added to the database";
}
}
?>

</div>


</body>
</html>