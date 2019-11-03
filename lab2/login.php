<?php
	session_start();
if(isset($_POST['login'])){
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		
		
		if(empty($uname) == true || empty($pass) == true){
			echo "fill all!";
		}
		else{
            $name='data.txt';
	$read = fopen($name, 'r');
	
		$fetch = fread($read, filesize($name));
	fclose($read);
	$lines=explode("\n", $fetch);
	foreach ($lines as $line) {
		$user = explode("|", $line);
	
		if($user[2] == $uname && $user[3] == $pass){
					setcookie("name", $user[0], time()+3600, "/");
			$_SESSION['name']=$user[0];
			header('location: dash.php');
		}
		
		
	}	
	
	}
	
	
			}
		
?>



<html>
	<head><title>LogIn</title>
	</head>
	
	<body>
		<fieldset>
		
		<table width="100%" border="0">
			<thead>
				<tr>
					<td width="70%"><font size="+3" color="green"><b>X</b></font><font size="+1">Company</font></td>
					<td width="10%"><a href="publichome.php">Home</a>|</td>
					<td width="10%"><a href="login.php">login</a>|</td>
					<td width="10%"><a href="registration.php">Registration</a></td>
				</tr>
				
				<tr>
					<td colspan="4"><hr></td>
				</tr>
				
				<tr>
					<td colspan="4" height="100">
					
					<form>
						<fieldset>
							<legend><h3>LogIn</h3></legend>
							<table border="0" align="center">
							<tr>
					
				<tr>
					<td>User Name:</td>
					<td><input type="text" name="uname" /></td>
					
				</tr>
				
				<td>Password: </td>
						<td><input type="password" name="pass" /></td>
						</tr>
						<tr>
						<td colspan="4"><hr></td>
						</tr>
					<tr>
					<td>
						<input type="checkbox" name="check" value="check">Rember Me
						
					</td>
				</tr>	
						
				<tr>
						<td align="left">
						<input type="submit" name="" value="submit">
						
					</td>
					<td><a href="forgot.php">Forgot Password?</a></td>
				</tr>
				
						
					
			</table>
		</fieldset>
	</form>
	
	</td>
				</tr>
				
				
				<tr>
					<td colspan="4"><hr></td>
				</tr>
				
				
				<tr>
					<td colspan="4" align="center"><p>Copyright 2017</p></td>
				</tr>
				
				</thead>
			</table>
		</fieldset>
	</body>
					
					