<?php
session_start();
if(isset($_COOKIE['name'])){
?>



<html>
	<head><title>DashBoard</title>
	</head>
	
	<body>
		<fieldset>
		
		<table width="100%" border="0">
			<thead>
				<tr>
					<td width="70%"><font size="+3" color="green"><b>X</b></font><font size="+1">Company</font></td>
					<td> </td>
					<td width="20%">Logged in as <a href="dash.php">Bob</a> |</td>
					<td width="10%"><a href="logout.php">Logout</a></td>
				</tr>
				
				<tr>
					<td colspan="4"><hr></td>
				</tr>
				
				<tr>
					<td    style="border-right: 1px solid #888;"><b>Account</b><br><hr align="left" width="180"><br>
					
						<ul>
							<li><a href="dash.php">DashBoard</a>
							<li><a href="profile.php">View Profile</a>
							<li><a href="edit.php">Edit Profile</a>
							<li><a href="change.php">Change Profile Picture</a>
							<li><a href="cpass.php">Change Password</a>
							<li><a href="logout.php">LogOut </a>
							</ul>
							</td>
							<td width="100" ><b>Welcome Bob</b></td>
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
					
	</html>

<?php
}
else{
	header('location:signin.php');
}
?>	