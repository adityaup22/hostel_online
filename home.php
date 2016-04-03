<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HosteL Online</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link  type="text/css" rel="stylesheet" href="css/home.css" />
<meta name='viewport'  content='width=device-width,initial-scale=1'>

<script src="js/jquery.js"></script>
<script src="js/home.js"></script>

<script src="js/bootstrap.js"></script>
</head>

<body>
<div class="back-vid">

</div>
    <video preload="true" autoplay loop muted   width="100%"  >
    	<source src="Entering The Stronghold _ Audio Visual Animation HD!.mp4" type="video/mp4">
        <source src="Entering The Stronghold _ Audio Visual Animation HD!.webm" type="video/webm">
    </video>

<div id="header" class="container-fluid">
	<h1><span style="color:#FC0">H</span><span id="one">ostel</span> <span style="color:#F40A03">O</span><span id="two">nline</span></h1>
</div>
<div id="main" class="container">
	<div class="text-center" >
    	
    	<h2><span style="color:#FC0">L</span>og <span style="color:#F40A03">I</span>n</h2>
    </div>
    <hr/>
    <form role="form" action="login.php" method="POST">
  <div class="form-group">
    <label for="uname">User Name:</label>
    <input type="text" class="form-control" name="username" id="uname" autofocus required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" id="pwd" required>
  </div>
  <div class=" form-group text-center">
  <input type='submit' name='submit' value="Sign In" class='btn btn-success btn-block'>
 <button type="button" class="btn btn-warning btn-block"  data-toggle='modal' data-target="#signup" data-backdrop="static">New account</button></div>
</form>
</div>

<div id='signup' class='modal fade' role='dialog'>
  <div class='modal-dialog modal-sm'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header' style='padding:15px 20px;'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h2 class="text-center" ><span style="color:#085460; font-weight:lighter;"><span class=" glyphicon glyphicon-user"></span> New Account</span></h4>
      </div>
      <div class='modal-body'>
      	  <form role="form" action="new_user.php" method="POST">
  <div class="form-group">
    <label for="uname"><span style="color:#085460"><span class=" glyphicon glyphicon-user"></span> User Name</span></label>
    <input type="text" class="form-control" id="uname" name="username"  required>
  </div>
  <div class="form-group">
    <label for="pwd"><span style="color:#085460"><span class=" glyphicon  glyphicon-eye-close"></span> Password</span></label>
    <input type="password" class="form-control" id="pwd" name="pwd" required>
  </div>
   <div class="form-group">
    <label for="cpwd"><span style="color:#085460"><span class=" glyphicon  glyphicon-eye-close"></span> Confirm Password</span></label>
    <input type="password" class="form-control" id="cpwd" name="cpwd" required>
  </div>
   
  <div class=" form-group text-center">
  <input type='submit' name='signup' value="Sign Up" class='btn btn-success btn-block'>
 
</form>
      </div></div></div></div>
</body>
</html>
