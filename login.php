<html>
	<head>
	</head>
	<body>
<div class = "center">
<div class = "rh">
<link rel="stylesheet" href="css/s.css" >
</div>
<body>
<head>
<img style="position: absolute; top: -1%; left:22%; margin: 30px -30px -30px 30px;" src="Ashesi.jpg" width="120" />

<p style = "text-align:center; font-size: 30px"><b>Ashesi University College<b></p>
<p style = "text-align:center ; font-size: 25px"><b>Inventory Management System<b></p>
<nav>
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Laboratories</a> </li>
<li><a href="#">Manufactures</a></li>
<li><a href="#">Students</a> </li>
</ul>
</nav</head>
</div>

<div class = "center1" >
<div style="text-align: center" "background-image: a.jpg"><img src="a.jpg" width="850" /></div>

<form action ="login.php" method ="GET" style = "text-align:center">
<p style = "text-align:center ; font-size: 25px"><b> Welcome! Please login to proceed<b></p>

<div><br> Username: <input type ="text" size="30" name ="un"></div>
<div><br> Password: <input type ="text" size="36" name ="pw"></div>
<div><br><input type="submit" value ="Log in" onclick = 'ConfirmUser()'></div>
<script>
			function ConfirmUser(){
				var obj = document.getElementById('un');
				var obj1 = document.getElementById('pw');

				if(obj.value = "Sheriff" && obj1.value = "pty"){
					document.location = 'home.php';
				}
				else>

					alert("your username or password is incorrect. please try again");
				return;

			}

			</script>		
		</form>
		<?php
		if(isset($_REQUEST['un'])){
			$link=mysql_connect("localhost","root","");
			if(!$link){
				echo "error authenticating";
				exit();
			}
			if(!mysql_select_db("webtech",$link)){
				echo "error authenticating";
				exit();
			}

			$username = $_REQUEST['un'];
			$pword = $_REQUEST['pw'];

			$str_query = "select user_id from user where user_name = '$username' and pword = '$pword'";
			$result = mysql_query($str_query,$link);
			if(!$result){

				print'<script type= "text/javascript">';
				print 'alert("your username or password is incorrect. please try again")';
				print '</script>';
			}
			else{
		      print'<script type= "text/javascript">';
			  print 'document.location = "home.php"';
			  print '</script>';
			}

		   //$row=mysql_fetch_assoc($result);
			//if(!row)
			
		}
		?>
	</body>
</html>
