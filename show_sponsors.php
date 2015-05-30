<!DOCTYPE html>
<html>
	<head>
		<title>Sponsors</title>
		<meta charset="UTF-8">
	</head>
<body>
	<h2>Въведи спонсор:</h2>
<form method="post" action="input_sponsors">
	<table cellpadding="7" border="0">
		<tr>
			<td>Sponsor:</td><td><input type="text" name="sponsor"></td>
		</tr>
		<tr>
			<td>Sector:</td><td><input type="text" name="sector"></td>
		</tr>
		<tr>
			<td>Country:</td><td><input type="text" name="country"></td>
		</tr>
		<tr>
			<td>President:</td><td><input type="text" name="president"></td>
		</tr>
		<tr>
			<td></td><td align="right"><input type="submit" value="Въведи"></td>
		</tr>
	</table>
</form>
	<div style="color: red;">

		<?php echo validation_errors(); ?>

	</div>
</body>
</html>

