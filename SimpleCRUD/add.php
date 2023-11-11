<html>

<head>
	<title>Add Data</title>
</head>

<body>
	<?php
	// Include the database connection file
	require_once("connection.php");

	if (isset($_POST['submit'])) {
		// Escape special characters in string for use in SQL statement	
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$population = mysqli_real_escape_string($conn, $_POST['population']);
		$area = mysqli_real_escape_string($conn, $_POST['area']);

		// Check for empty fields
		if (empty($name) || empty($population) || empty($area)) {
			if (empty($name)) {
				echo "<font color='red'>Name field is empty.</font><br/>";
			}

			if (empty($population)) {
				echo "<font color='red'>Age field is empty.</font><br/>";
			}

			if (empty($area)) {
				echo "<font color='red'>Email field is empty.</font><br/>";
			}

			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// Insert data into database
			$result = mysqli_query($conn, "INSERT INTO country (`name`, `population`, `area`) VALUES ('$name', '$population', '$area')");

			// Display success message
			echo "<p><font color='green'>Data added successfully!</p>";
			echo "<a href='index.php'>View Result</a>";
		}
	}
	?>
</body>

</html>