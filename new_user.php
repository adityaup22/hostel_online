<?php require_once("session.php")?>
<?php require_once("connection.php")?>
<?php 

if(isset($_POST['signup'])){

$username=$_POST['username'];

$password=$_POST['pwd'];
$confirm_password=$_POST['cpwd'];


$hashed_password = md5($password);


if($password != $confirm_password){
	header("Location:home.php?confirm=1");
	exit;
	}
//Checking User In database	
$query= "SELECT * FROM users WHERE username='{$username}' LIMIT 1";
$result=mysql_query($query,$connection);
$user=mysql_fetch_array($result);
if($user)
{	header("Location:home.php?user_present=1");
	exit;
	}


$query1= "INSERT INTO users (username,password)
          VALUES ('{$username}','{$hashed_password}' ) ";
$result1=mysql_query($query1,$connection);
if(!$result1)
//die("Query Failed".mysql_error());
{header("Location:home.php?error=1");
	exit;}

elseif($result1){
$query2= "SELECT id,username FROM users WHERE username='{$username}' AND password='{$hashed_password}' LIMIT 1";
$result2=mysql_query($query2,$connection);
if(!$result2)
//die("Query 2 Failed.".mysql_error());
{header("Location:home.php?error=1");
	exit;}

$found_user=mysql_fetch_array($result2);
$_SESSION['user_id']=$found_user['id'];
$_SESSION['username']=$found_user['username'];
header("Location:home.php?user_created={$username}");
exit;
}
}
?>
