<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
    <a href='/home'> Back </a> |
	<a href='/logout'> logout</a>
  
    <h3> Create</h3>

	<form method="post">
	<table>

		<tr>
            <td>ID</td>
			<td>Name</td>
            <td>Email</td>
        </tr>
		<tr>
			
            <td><input type='text' name='id'></td>
			<td><input type="text" name="name"></td>
            <td><input type="email" name="email"></td>
		</tr>	
	
		<tr>
			<td><input type="submit" name="create" value="Create"></td>
		</tr>
	</table>
	</form>
</body>
</html>