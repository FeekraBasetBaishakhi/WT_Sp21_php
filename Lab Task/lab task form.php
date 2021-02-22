<?php
if (isset($_GET["submit"])){
		echo $_GET["username"];
	}
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$dob="";
	$err_dob="";
	$gender="";
	$err_gender="";
	$hear="";
	$err_hear="";
	$bio="";
	$err_bio="";

		If (empty($_POST["name"])){
			$err_name="Name Required";
		}
		else{
			$name=$_POST["name"];
		}
		If (empty($_POST["uname"])){
			$err_uname="Username Required";
		}
		elseif (strlen($_POST["uname"])<6){
			$err_uname="Username must contain at least 6 characters ";
		}
		elseif (strpos($_POST["uname"]," ")) {
			$err_uname="space is not allowed";
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
		}
		if(strlen($_POST["pass"])<8){
			$err_uname="Password must contain at least 8 character";
		}
		if(is_numeric ($_POST[0-9]==false, $pass) {
            $err_pass = "Your Password Must Contain At Least 1 Number!"
        }
		if(ctype_upper(($_POST"[a-z]"==false,$pass))) {
            $err_pass = "Your Password Must Contain At Least 1 Lowercase Alphabet!";
		}
		if(ctype_upper(($_POST"[A-Z]"==false,$pass))) {
            $err_pass = "Your Password Must Contain At Least 1 Uppercase Alphabet!";
		}
		else{
			$pass=$_POST["pass"];
		}
		If (empty($_POST["email"])){
			$err_email="Email Required";
		}
		elseif (strlen($_POST["email"],"@")){
		$err_email="must contain @ ";
		}
		elseif (strpos($_POST["email"]," ")) {
			$err_email="at least one .dot after @";
		}
		if(!isset($_POST["gender"])){
			$err_gender="*[Gender Required]";
		}
		else{
		 ($gender=$_POST["gender"]);
		}
		?>
<html>
	<head> </head>
	<body>
<fieldset>
	<legend><b> Club Member Registration</b></legend>
	<form>
			<table>
			<tr>
					<td><span>Name</span></td>
					<td>:<input type="text" name="name" value="<?php echo $uname ; ?> " placeholder="name">
						<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span>Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname ; ?> " placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
						<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span>Confirmed Password</span></td>
					<td>:<input type="password" value="<?php echo $pass;?>" name="pass">
						<span><?php echo $err_pass;?></span></td>
				</tr>
					<tr>
					<td><span>Email</span></td>
					<td>:<input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span>Address</span></td>
					<td>:</td>
					<td><input type="text" name="sa" placeholder="Street Address"></td>
				</tr>
				<tr>
					<td></td>
					<td>:</td>
					<td><input type="text" name="city" placeholder="city" size="6">-<input type="text" name="State" placeholder="State" size="8"></td>
				</tr>
				<tr>
					<td></td>
					<td>:</td>
					<td><input type="text" name="code" placeholder="Postal/Zip Code"></td>
				</tr>
				
				<tr>
				<td><span>Birth Date</span></td>
				<td>:</td>
				<td><select name="DAY">
				<option disabled selected>DAY</option
					<?php
					for($i=1;$i<=31;$i++){
						echo "<option>$</option>";
					}
					?>
					</select>
					<select name="MONTH"</option>
					<?php
					$month=array("January", "February", "March", "April", "May", "June" ,"July" ,"August","September","October","November", "December");
							for ($j=0;$j<count($mon);$j++){
								echo "<option>$month[$j]</option>";
							}
					?>
					
				<?php
					for($Z=1980;$Z<=2050;$Z++){
						echo "<option>$Z</option>";
					}
				?>
				</td>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" name="gender" value=""><?php echo $gender;?><span>Male</span>
					    <input type="radio" name="gender" value=""><?php echo $gender;?><span>Female</span>
						<span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
				<td><span>Where did you hear about us?</span></td>
				<td>:
					<input type="checkbox" name="Where did you hear about us?" value=""><?php echo $hear;?><span>Movies </span>
					<input type="checkbox" name="Where did you hear about us?" value=""><?php echo $hear;?><span> Music </span>
					<input type="checkbox" name="Where did you hear about us?" value=""><?php echo $hear;?><span>Games </span>
					<input type="checkbox" name="Where did you hear about us?" value=""><?php echo $hear;?><span> Garden </span>
					<span><?php echo $err_hear;?></span></td>
				</tr>
				<tr>
					<td><span>Bio</span></td>
					<td>:<textarea name="bio"><?php echo $bio;?></textarea>
					<span><?php echo $err_bio ?><</span></td>
				</tr>
				<tr>
					<td><input type="submit" name="register "value="Register"></td>
				</tr>
			</table>
		</form>	
	</body>
</html>