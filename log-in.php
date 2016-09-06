<?php
$host = "localhost:8080";
$user = "mella0910";
$pass = "";
$db= "lsca_login"

mysql_connect ($host, $user, $pass);
mysql_select_db($db);

if(isset($_POST['username'])) {

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='' ".$user."' AND password ='".$pass."' LIMIT 1";
$res= mysql_query($sql);

if (mysql_num_rows($res) == 1){

	echo "successfully log-in";
	exit();
}
else {
	echo "NOt successfully log-in";
	exit();
}

}
?>