<?php 
require_once('session.php');
require_once('connection.php');
confirm_logged_in();
?>

<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Hostel Online</title>
<meta name='viewport'  content='width=device-width,initial-scale=1'>
<link rel='stylesheet' href='css/bootstrap.css'>

<link rel='stylesheet' href='font-awesome/css/font-awesome.css'/>
<link rel='stylesheet' href='css/movies.css'>

<script src='js/jquery.js'></script>
<script src='js/bootstrap.js'></script>
<script src='js/movies.js'></script>
</head>

<body>
<div class='container'>
    <div class='page-header'>
    <h1>Movies</h1>
    </div>
    
   
    <?php
    
    $connect=ftp_connect("192.168.14.20");
	$result=ftp_login($connect,"Anonymous","");
	$dir=$_GET['dir'];
	$array=ftp_nlist($connect,$dir);
    
    foreach($array as $value)
	{
		
		if(ftp_mdtm($connect,$value)== -1)
		{
			$dirname=basename($value);
			echo "<div class='row'>
			<div class='col-sm-8'><span class='glyphicon glyphicon-folder-close'></span><a href=\"movies.php?dir={$value}\" > $dirname</a></div>
			<div class='col-sm-4'>Rockmee</div>
			<hr/>
			</div>";
		}
		
		
		else
		{
			$filename=basename($value);
			echo "<div class='row'>
				<div class='col-sm-8'><a href=\"ftp://192.168.14.20$value\" download><span class='glyphicon glyphicon-file'></span>$filename</a></div>
				<div class='col-sm-4'>Rockmee</div>
				<hr/>
				</div>";
		}
	}	
    ?>
    
</div>
</body>
</html>
