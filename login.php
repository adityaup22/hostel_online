<?php require_once("session.php")?>
<?php require_once("connection.php")?>
<?php# if(logged_in()){header("Location:index.php?already=1");exit; }?>
<?php 
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

$hashed_password= md5($password);

$query= "SELECT * FROM users WHERE username='{$username}' AND password='{$hashed_password}' LIMIT 1";
$result=mysql_query($query,$connection);
$found_user=mysql_fetch_array($result);
$_SESSION['user_id']=$found_user['id'];
$_SESSION['username']=$found_user['username'];

if($found_user){
header("Location:movies.php?dir=/movies");
exit;
}
else{
header("Location:home.php?failure_login=1");
exit;
}
}
?>
