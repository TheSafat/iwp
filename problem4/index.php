<!doctype html>
<html>
<head>
	<title> personal profile</title>
</head>

<body>
	<h1> personal profile </h1>
	<form action="action.php" method="POST">
		<table>
			<tr>
				<td><label name="name"> name </label></td>
				<td><input type="text" name="name" required placeholder="enter name"></td>
			</tr>
			<tr>
				<td><label name="Father name"> Father name </label></td>
				<td><input type="text" name="father" placeholder="enter father name" required></td>
			</tr>
			<tr>
				<td><label name="Mother name"> Mother name </label></td>
				<td><input type="text" name="mother" placeholder="enter mother name" required></td>
			</tr>
			<tr>
				<td><label name="date of birth"> date of birth </label></td>
				<td><input type="date" name="date" placeholder="enter date of birth" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btn" value="enter"></td>
			</tr>
		</table>
	</form>
</body>

</html>