<html>
 <head>
  <title>Let's Connect</title>
 </head>
 <body>

	<i> Your Profile</i>
	<form action="/action_page.php">
	Name: <input type="text" name="Name" value=""><br>
	Zipcode: <input type="text" name="Zip" value=""><br>
	Website: <input type="text" name="Web" value=""><br>
	Demographic of Interest<br>
	Max Age:<input type="text" name="Max" value=""><br>
	Min Age:<input type="text" name="Min" value=""><br>
	Interest: <select type="text" name="Interest" value=""><br>
	<!--
	<?php 

		$host //= "localhost:8889";
		$username //= "root";
		$password //= "root";
		$db// = "connect";
		$mysqli// = new mysqli($host, $username,$password,$db);
		//if($mysqli->connect_errorno){
			//echo $mysqli->connect_error;
		}

	?> 
-->
	</select>
	<input type="submit" value="Submit">

	</form>
	


 </body>
</html>