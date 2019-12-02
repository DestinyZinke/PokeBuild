<!DOCTYPE html >
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body_bg">
<div>

<h3>Register</h3>
    <form id="register-form" method="post" action="../Pokebuild/authen_register.php" >
        <table>
            <tr>
                <td><label for="user_id">User Name</label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password</label></td>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>
			
            <tr>
				
                <td><input type="submit" value="Submit" />
                <td><input type="reset" value="Reset"/>
				
            </tr>
        </table>
    </form>
		</div>
</body>
</html>