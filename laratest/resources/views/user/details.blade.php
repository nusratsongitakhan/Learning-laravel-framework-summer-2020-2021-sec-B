<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
     
    <a href='/user/list'> Back </a> |
    <a href='/logout'> logout</a>

    <h3>Details</h3>
	<table border="1">
		<tr>
            <td>ID</td>
			<td>Name</td>
            <td>Email</td>
        </tr>
        <tr>
			
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
        </tr>
        
 	</table>
</body>
</html>