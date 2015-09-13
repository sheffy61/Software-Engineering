
<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="css/s.css">
		<script>
			
		</script>
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
                 <li><a href="index.php">Home</a></li>

                 <li><a href="la.php">Laboratories</a>

                 <ul>
                 	<li><a href="la.php">Lab 1</a></li>
                 	<li><a href="#">Lab 2</a></li>
                 	<li><a href="#">Lab 3</a></li>
                 </ul>
             </li>

                 <li><a href="#">Manufactures</a>

                 <ul>
                 	<li><a href="#">Items</a></li>
                 </ul>

             </li>

                 <li><a href="per.php">Students</a></li>
            
            	</ul>

            </nav>
        </head>
</div>

 <div class = "center1" >

 

	<p style = "text-align:center">Click to display and search for items in Inventory</p> 

		    <form  method="post" action="searchhh.php"  id="searchform" style = "text-align:center"> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form>  

	    <p style = "text-align:center"> Fill the form below to add an Item to thee list of Inventory </p>
	    <table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
	    	<th colspan="2" align="center">Add Equipment to Inventory</th>


            <form action ="lab1.php" method = "GET" style="postion:center">
            	<tr><td>Equipment Name</td>

			<td><input type ="text" name ="pn"></td></tr>
			<tr><td>Equipment Id</td>
			<td> <input type = "text" name = "pid"></td></tr>
			<tr><td>Manufacturer Id</td>
			<td><input type = "text" name ="mid"></td></tr>
			<tr><td>Price</td>
			<td><input  type = "text" name = "pr"></td><tr>
			<tr><td>Description</td>
			<td><input type ="text" name ="pd" cols = "3" rows ="5"></td></tr>
            <tr><td colspan="2" align="center"><input type ="submit" value= "Save"></td></tr>
		</form>
	</table>


		<?php
							   if(isset($_REQUEST['pn'])){		
								include("inventory.php");
								$obj=new inventory();

								$equipment_name=$_REQUEST['pn'];
								$description=$_REQUEST['pd'];
								$equipment_id=$_REQUEST['pid'];
								$price=$_REQUEST['pr'];
								$manufacturer_id=$_REQUEST['mid'];

								if(!$obj->add_equipment($equipment_name,$description, $equipment_id,$price,$manufacturer_id)){

								echo "Error adding".mysql_error();
								}
								else
								{
									echo " $equipment_name has successfully being added to the database";
								}
							}
						?>
</table>

</div>
</table>
</div>
</body>
</html>
