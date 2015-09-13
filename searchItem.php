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
	                 <li><a href="home.php">Home</a></li>

	                 <li><a href="laboratories.php">Laboratories</a>
	                
	             </li>

	                 <li><a href="manufacturers.php">Manufacturers</a>

	             </li>

	                 <li><a href="students.php">Students</a></li>
	            
	            	</ul>

	            </nav>
	        </head>
	</div>

	 <div class = "center1" style="text-align:center" >
	 	<br><ul class = 'm'>
	<li><a href = 'addStudent.php'>Add a Student </a></li>
	<li><a href = '#'>View Profile of One Student</a></li><br>
	</div>
	<div class = "center1" >
	           	<div style="text-align: center"></div>

	<p style = "text-align:center; font-size: 30px"><b>List of Students<b></p>
	</div>

	<div class = "center1" style="text-align:center" >
	        <?php
								include_once("personClass.php");
		
								$obj=new persons();
								$search_text="";
								if(isset($_REQUEST['txtSearch'])){
									$search_text=$_REQUEST['txtSearch'];
								}
								$obj->search_by_name($search_text);
								
								echo "<table border='1'>";
								echo "<tr style='background-color:olive; color:white; text-align:center'>
								<td>Name of Person</td>
								<td>Person ID</td>
								<td>Address</td>
								<td>Major</td>
								<td> Edit /Delete</td>
								</tr>";
								
								$row=$obj->fetch();
								$style="";
								$i=0;
								while($row){
									if($i%2==0){
										$style="style='background-color:Khaki'";
									}else{
										$style="";
									}
									echo "<tr $style >";
									echo "<td><span class='clickspot' onclick='getDesc({$row['person_id']})'>{$row['person_name']}<span></td>";
									echo "<td>{$row['person_id']}</td>";
								    echo "<td>{$row['address']}</td>";
									echo "<td>{$row['major']}</td>";
									echo "<td><a href='ed.php'>edit</a> -- <a href='forall.php?person_name={$row['person_name']}'>delete</a></td>";
									echo "</tr>";
									$row=$obj->fetch();
									$i++;
								}

	if(isset($_REQUEST['person_name'])){
	           echo $_REQUEST ['person_name'];

			$obj =new persons();
			$person_name=$_REQUEST['person_name'];

			if(!$obj->delete_person($person_name)){
									echo "Error deleting".mysql_error();
									}
									else
									{
										header("location:forall.php");
								}
							}
				
			?>    
	</div>

	</body>
	</html>








						