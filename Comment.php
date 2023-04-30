<html>
	<head>

        <title>Comment Added</title>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style type="text/css">
  	<?php include("ProjectCssfile.css") ?>
</style>
	</head>

	<body style="text-align: center;">
	
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
				<a target= "_blank" class="navbar-brand" href="https://www.kcmo.gov/">Kansas City</a>
                </div>
            <ul class="nav navbar-nav">
                <!--may need to change name of files-->
                <li><a href="Home.html">Home</a></li>
                <li><a href="Restaurant.html">Restaraunts</a></li>
                <li><a href="Museums.html">Museums</a></li>
				<li><a href="Adventure parks.html"> Adventure parks</a></li>
                <li><a href="Only in Kansas City.html">Only in Kansas City</a></li>
                <li><a href="AboutUs.html">About Us</a></li>
                <li class="active"><a href="Comment_Page.php">Comments</a></li>
            </ul>
            </div>
        </nav>
		<?php

		// servername => localhost
		// username => Hussein
		// password => Hussein@123
		// database name => test
		$conn = mysqli_connect("localhost", "Hussein", "Hussein@123", "test");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all values from the form data(input)
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
	
		
		// Performing insert query execution
		// here our table name is shop
		$sql = "INSERT INTO final VALUES ('$name','$email','$comment')";
		echo "<br>"; 
		echo "<br>";

		$sqls = "SELECT * FROM final";

		$sqlss = mysqli_query($conn, $sqls);
		
		if(mysqli_query($conn, $sql)){
			echo "<br>";
			echo "<br>";
			echo "<br>";
			
			echo '<span style="font-size: 30px;"> '."Thank you ... Your feedback\comment uploaded successfully!";
			echo "<br>";
			
		} else{
			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}	
	
		// Close connection
		mysqli_close($conn);
		?>

		<br>
		<hr>
		<br>

		<footer>
		&nbsp;<a href="mailto:kmf5x7@umsystem.edu">Kevin Floyd</a><br>   
		&nbsp;<a href="mailto:anfnnw@umkc.edu">Andrew Floyd</a><br>
		&nbsp; <a href="mailto:hsgf5@umsystem.edu">Hussein Sakkoky</a><br>
        <p>&nbsp;Copyright &copy; HAK Studios, 2022</p>
		</footer>
	</body>
</html>