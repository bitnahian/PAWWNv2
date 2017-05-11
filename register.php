<?php
$connection = mysqli_connect("localhost", "root"); // Establishing connection with server..

if(!$connection)
{
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$db = mysqli_select_db($connection, "pawwn"); // Selecting Database.
$name=$_POST['name1']; // Fetching Values from URL.
$email=$_POST['email1'];
$address1 = $_POST['address11'];
$address2 = $_POST['address21'];
$city = $_POST['city1'];
$state = $_POST['state1'];
$postcode = $_POST['postcode1'];
$password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "Invalid Email.......";
}else{
	$result = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'");
	$data = mysqli_num_rows($result);
	if(($data)==0){
//$query = mysql_query("INSERT INTO registration(name, email, password, address1, address2, city, state, postcode) 
//					  VALUES ('$name', '$email', '$password', '$address1', '$address2' , '$city' , '$state', '$postcode')"); // Insert query
		$stmt = $connection->prepare("INSERT INTO users(name, email, password, address1, address2, city, state, postcode) 
			VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssss", $name,$email,$password,$address1,$address2,$city,$state,$postcode);
		if($stmt->execute()){
//if($query){
			echo "You have Successfully Registered.....";
		} else {
			echo "Error....!!";
		}
	}else{
		echo "This email is already registered, Please try another email...";
	}
}
mysqli_close ($connection);
?>