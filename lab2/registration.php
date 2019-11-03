<?php
if(isset($_POST['signup'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$gender =$_POST["gender"];
		$day =$_POST["day"];
		$month =$_POST["month"];
		$year =$_POST["year"];
		
		
		if(empty($name)==true ||empty($uname)==true || empty($email)==true || empty($pass) == true ||empty($cpass) == true || empty($gender)==true ||empty($year)==true ||empty($day)==true ||empty($month)==true){
			echo "fill all!";
		}
		elseif ($pass!=$cpass) {
		echo "password doesn't match";	
		}
		
		else{
            //$_POST['name'] = $name;
			$user = fopen('data.txt', 'a+');
			$data=fwrite($user, "$name"."|"."$email"."|"."$uname"."|"."$pass"."|"."$cpass"."|"."$gender"."|"."$day"."/"."$month"."/"."$year"."\n");
			
	fclose($user);
		header('location: login.php');
	}
			}
		
	
		
		
		
		
?>



<html>
	<head><title>Registration</title>
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
							<legend><h3>Registration</h3></legend>
							<table border="0" align="center">
							<tr>
						<td>Name: </td>
						<td><input type="text" name="name"  /></td>
						</tr>
						<tr>
						<td colspan="4"><hr></td>
						</tr>
							<tr>
								<td>Email: </td>
								<td><input type="email" name="email" /></td>
						</tr>
				<tr>
					<td colspan="4"><hr></td>
				</tr>
				<tr>
					<td>User Name:</td>
					<td><input type="text" name="uname" /></td>
				</tr>
				<tr>
					<td colspan="4"><hr></td>
				</tr>
				<td>Password: </td>
						<td><input type="password" name="pass" /></td>
						</tr>
						<tr>
						<td colspan="4"><hr></td>
						</tr>
						
						<td>Confirm Password: </td>
						<td><input type="password" name="cpass"   /></td>
						</tr>
						<tr>
						<td colspan="4"><hr></td>
						</tr>
					
				
				<tr >
					
					<td colspan="4"><fieldset><legend>Gender</legend>
					
						<input type="radio" name="gender" value="Male"/> Male
						<input type="radio" name="gender" value="Female"/> Female 
						<input type="radio" name="other" value="Other"/> Other 
						</fieldset>
					</td>
					
				</tr>
				<tr>
					<td colspan="4"><fieldset><legend>Date of Birth</legend>
					<input type="text" name="day" value="">/
					<input type="text" name="month" value="">/
					<input type="text" name="year" value="">(dd/mm/yyyy)
					</fieldset>
					</td>
				</tr>
					
				<tr>
					<td></td>
					
					<td>
						<input type="submit" name="signup" value="Submit">
						<input type="reset" name="reset" value="reset"><br>
						Already a menmber? <a href="login.php">login In</a>
					</td>
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
					
					