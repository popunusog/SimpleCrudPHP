<html>

<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="css/formstyle.css">
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="add.php" method="post" name="add">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Population</td>
				<td><input type="text" name="population"></td>
			</tr>
			<tr>
				<td>Area</td>
				<td><input type="text" name="area"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add" class="submit-button"></td>
			</tr>
		</table>
	</form>
</body>

</html>