<?php
	if(isset($_POST['btn'])){
		extract($_POST);
	}
?>

<!doctype html>
<html>

<head>
</head>

<body>
	<h1 align="center"> Personal Info </h2>
	<table align="center">
		<tr><td>Name: </td> <td> <?php echo $name ?> </td></tr>
		<tr><td>Father Name: </td> <td> <?php echo $father ?> </td></tr>
		<tr><td>Mother Name: </td> <td> <?php echo $mother ?> </td></tr>
		<tr><td>Date of Birth: </td> <td> <?php echo $date ?> </td></tr>
	</table>
</body>

</html>