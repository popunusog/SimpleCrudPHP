<html>

<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="css/formstyle.css">
</head>

<body>
	<h2>Edit Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="edit.php" method="post" name="edit">
		<table>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
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
				<td><input type="submit" name="submit" value="Edit" class="submit-button"></td>
			</tr>
		</table>
	</form>
</body>

</html>