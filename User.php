<html>
 <head>
  <title>Let's Connect</title>
 </head>
 <body>

	<i> Your Profile</i>

	<form action="/action_page.php">
	
	Age: <input type="text" name="Age" value=""><br>
	Zipcode: <input type="text" name="Zip" value=""><br>
	Interest: <select type="text" name="Interest" value=""><br>
	<?php 

		$host = "localhost:8889";
		$username = "root";
		$password = "root";
		$db = "connect";
		$mysqli = new mysqli($host, $username,$password,$db);
		if($mysqli->connect_errorno){
			echo $mysqli->connect_error;
		}

	?> 
	</select>
	<input type="submit" value="Submit">

	
	</form>



 </body>
</html>