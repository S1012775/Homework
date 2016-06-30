<?php
$userName="guest";
if(isset($_COOKIE["userName"])){
  $userName=$_COOKIE["userName"];
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>index</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		</head>
	<body>
<div    >
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          
          <h1 class="text-center">HOME</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
           <tr>
    <td align="center" valign="baseline">
      <?php  if(!isset($_COOKIE["userName"])) : ?>
      <button type= "button" class="btn btn-primary " onclick="self.location.href='login.php'">Login</button></a>
      <?php else: ?>
      <button type= "button"  class="btn btn-primary " onclick="self.location.href='login.php?signout=1'">Signout</button></a>
      <?php  endif ?>
        <button type= "button"  class="btn btn-primary "onclick="self.location.href='secret.php'">Member Page  </button></a></td>
  </tr>
  <tr>
    <td align="ce nter" bgcolor="#CCCCCC">
      <hr>
      Hello! <?php  echo $userName?>
      
      
    </td>
  </tr>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
	
	</body>
</html>