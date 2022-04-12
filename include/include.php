<?php 

	function Login_form($action, $method = "POST")
	{
		?>
			<form action="<?php echo $action; ?>" method="<?php echo $method;?>">
				<table align="center" border="1">

					<tr>
						<td>
							Email:
						</td>
						<td>
							<input type="email"	 name="email" >
						</td>
					</tr>
					<tr>
						<td>
							Password:
						</td>
						<td>
							<input type="password" name="password" >
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<input type="submit" name="login" value="Login">
						</td>
					</tr>
				</table>
			</form>

		<?php
	}



 ?>
<?php
function Register_form($action, $method = "POST")
	{
		?>
			<form action="<?php echo $action; ?>" method="<?php echo $method;?>">
				<table align="center" border="1" width="300px">
                    
                    <tr>
						<td>
							Name:
						</td>
						<td>
							<input type="text"	 name="name"  >
						</td>
					</tr>

					<tr>
						<td>
							Email:
						</td>
						<td>
							<input type="email"	 name="email_reg" >
						</td>
					</tr>
					<tr>
						<td>
							Password:
						</td>
						<td>
							<input type="password" name="password_reg">
						</td>
					</tr>
					<tr>
						<td>
							Gender:
						</td>
						<td>
							<input type="radio"	 name="gender" value="Male">Male
							<input type="radio"	 name="gender" value="Female">Female
						</td>
					</tr>
					<tr>
						<td>
							Country:
						</td>
						<td>
							
							<select name="country">
								<option>Select Country</option>
								<option>Pakistan</option>
								<option>USA</option>
								<option>UAE</option>
								<option>JAPAN</option>
							</select>
						</td>

					</tr>
					<tr>
						<td colspan="3" align="center">
							<input type="submit" name="register" value="Submit">
						</td>

					</tr>
				</table>
			</form>

		<?php
	}
?>