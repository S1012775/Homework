<?php
 if (isset($_POST["btnHome"])){
	header("Location: index.php");
	exit();
}
if (isset($_GET["signout"])){
	setcookie("userName","guest",time()-3600);
	header("location:index.php");
	exit();
}


 if (isset($_POST["btnOK"])){
 		$sUserName = $_POST["txtUserName"];
	if ($_POST["txtUserName"] != ""){    //如果帳號為空白停留登入頁
		setcookie("userName",$_POST["txtUserName"]);
		if(isset($_GET["backurl"]))
		 	  header("laction: ".$_GET["backurl"]);
		else
		    header("Location: index.php");
		exit();
	}
}


?>

<html >
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" method="post">
            <div class="form-group">
              <td width="80"  align="center" valign="baseline">Username</td>
      <td valign="baseline"><input type="text"  class="form-control input-lg" name="txtUserName" id="txtUserName" /></td>
            </div>
            <div class="form-group">
              <td width="80" align="center" valign="baseline">Password</td>
      <td valign="baseline"><input type="text"  class="form-control input-lg" name="txtPassword" id="txtPassword" /></td>
            </div>
            <div class="form-group">
              <input class="btn btn-primary " type= "submit"  name="btnOK" id="btnOK" value="login" /> 
              <button type= "button"  class="btn btn-primary "onclick="self.location.href='index.php'">home</button>
              
            </div>
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