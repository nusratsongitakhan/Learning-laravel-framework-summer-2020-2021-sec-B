<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
     
     <a href='/user/list'> Back </a> 
    <a href='/logout'> logout</a>
    <h3>Edit</h3>
    <form method="post">
	<table border="1">
		<tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
			
        </tr>
        <tr>
           <td><input value="{{$user['id']}}" name='id'></td>
            <td><input value="{{$user['name']}}" name='name'></td>
            <td><input value="{{$user['email']}}" name='email'></td>
        </tr>
        
			<td><input type="submit" name="Submit" value="submit" ></td>
		</tr>

 	</table>
    </form>
</body>
</html>