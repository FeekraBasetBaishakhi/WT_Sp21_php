
$uname="";
$err_uname="";
$pass="";
$bio="";
$err_bio="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

//if(isset($_POST[["submit'])){
	
	If (empty($_POST["submit"])){
		$err_uname="Username Required";
	}
	elseif (strlen($_Post["uname'])<6) {
		$err_uname="Username Must be 6 Characters Long";
	}
	elseif (strlen($_Post["uname'])<6) {
		$err_uname="Username Must be 6 Characters Long";
		<h1>User Registration</h1>
		<form action="submitted.php" method="post">
			<table>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
				</tr>
				<tr>
					<td><span><b>Hobbies</b>:</span></td>
					<td><input type="checkbox"><span>Movies</span>
					    <input type="checkbox"><span>Music</span>
						<input type="checkbox"><span>Games</span>
						<input type="checkbox"><span>Sports</span></td>
				</tr>
				<tr>
					<td><span><b>Profession</b>:</span></td>
					<td>
						<select name="profession">
							<option disabled selected>Choose One</option>
							<option>Teaching</option>
							<option>Service</option>
							<option>Business</option>
							<option>others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><span><b>Mobile/Phone</b>:</span></td>
					<td><input type="tel" name="phone_no"></td>
				</tr>
				<tr>
					<td><span><b>Date</b>:</span></td>
					<td><input type="date" name="date"></td>
				</tr>
			</table>
			<br>
			<input type="submit" name="Submit">
		</form>