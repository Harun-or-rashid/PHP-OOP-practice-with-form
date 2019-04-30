	<?php
	class ab{

		public $name;
		public $position;
		public $email;

	 	
	 	
	 	
	 	
		 	

	 	    }

	 	    if (isset($_POST['submit'])) {
		 		$name=$_POST['name']; 
		 		$position=$_POST['position'];
		 		$email=$_POST['email'];
	 	    

	}
		//echo $name;

	?>
	<html>
		<head>
			<title></title>
		</head>

		<body>
			<form action="b.php" method="post">
				Name:<br>
				<input type="text" name="name"><br>

				Position:<br>
				<input type="text" name="position"><br>

				Email:<br>
				<input type="text" name="email"><br>

				<input type="submit" name="submit" value="Search"><br>

			</form>
		</body>
	</html>