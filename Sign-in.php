<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Knowdent</title>
</head>

<body>
		<div id="Header">
			<br>
			<center><p><h1>KnowDent</h1></p></center>
	<div id="firstdiv">
		<div style="margin-left:600px;">
			<a href="home.php?parameter=1">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</div> 
		</div>
		</div>
		
		<div id="seconddiv">
			<div style="text-align:center; font-size:30px; color:#660066;">
			<strong>Please Enter Personal Details...</strong>
		</div>	
			<center><div id="fourthdiv">
				<br><br>
				<form method="post" action="signin_action.php">
				<table id="signintable" cellspacing="10">
					<tr>
						<td>First Name: </td>
						<td> <input type="text" name="fname" id="fname" style="height:auto; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Last Name: </td>
						<td> <input type="text" name="lname" id="lname" style="height:auto; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td> M<input type="radio" name="radio1" id="radio1" >
							F<input type="radio" name="radio1" id="radio1" ></td>
					</tr>
					<tr>
						<td>Age: </td>
						<td> 
							<select>
							<option value="child">Child</option>
							<option value="teen">Teen</option>
							<option value="adult">Adult</option>
							<option value="seniorcitizen">Senior Citizen</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Email Id: </td>
						<td> <input type="email" name="email" id="email" style="height:auto; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td> <input type="password" name="password" id="password" style="height:auto; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Retype Password: </td>
						<td> <input type="password" name="password1" id="password1" style="height:auto; padding:auto; width:100%;"></td>
					</tr>
					<tr>
					<td> </td>
					<td> <input type="submit" value="Submit" style="height:auto; width:150px;" > &nbsp&nbsp&nbsp <input type="reset" value="clear" 
					style="height:auto; width:150px;"></td>
					</tr>
				</table>
				</form>
			</div></center>
	</div>	
	
	<?php include("footer.php");
	