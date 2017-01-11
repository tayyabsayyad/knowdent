<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Knowdent</title>
</head>

<body>
		<div id="Header">
			<br>
			<center><p><h1>Knowdent</h1></p></center>
	<div id="firstdiv">
		<div style="margin-left:600px;">
			<a href="home.php?parameter=1">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="signin.php">Signup(If not registered)</a>
		</div> 
		</div>
		</div>
		
		<div id="seconddiv">
			<div style="text-align:center; font-size:30px; color:#660066;">
			<?php
			if(@$_GET['r']==1){
				echo '<strong>User successfully registered...Please Sign in to continue shopping</strong>';
				}
			else{
				echo '<strong>Sign in to continue shopping</strong>';
			} 
			?>
		</div>	
			<center><div id="fourthdiv">
				<br><br>
				<form method="post" action="login_verify.php">
				<table id="logintable" cellspacing="10">
					<tr>
						<td>Email: </td>
						<td> <input type="email" name="email" id="email" style="height:auto; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td> <input type="password" name="password" id="password" style="height:auto; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td> </td>
						<td> <input type="submit" value="Login" style="height:auto; width:150px;"> &nbsp&nbsp&nbsp <input type="reset" value="clear" 
					style="height:auto; width:150px;"></td>
					</tr>
				</table>
				</form>
			</div></center>
	</div>	
	
	<?php
		
		if(@$_GET['n']==1){
			echo '<div style="text-align:center; font-size:20px; color:#660066;">
			<strong>User not registered please sign in to continue....</strong>
		</div>';	
		}
		
		if(@$_GET['m']==1){
			echo '<div style="text-align:center; font-size:20px; color:#660066;">
			<strong>Please check your password...</strong>
		</div>';	
		}
		?>