<?php include("sessionstart.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="HIPAA - Notice of Privacy Practices - Admin">
	<meta name="author" content="The Raj Organization">
	<meta name="keywords" content="HIPAA, Privacy, Privacy Practices">
	<link rel="shortcut icon" href="images/favicon.png">
	<title>Admin Editor - Notice of privacy practices</title>
	
	<!-- jq -->
	<script src="admin/3rd/jq/jquery-2.0.0.min.js"></script>

	<!-- bs -->	
	<link href="admin/3rd/bs/css/bootstrap.min.css" rel="stylesheet">
	<!--link href="admin/3rd/bs/css/bootstrap-theme.min.css" rel="stylesheet"-->	
	<script src="admin/3rd/bs/js/bootstrap.min.js"></script>
		
	<!-- fa -->
	<link rel="stylesheet" href="admin/3rd/fa/css/font-awesome.min.css">

	<!-- npp -->
	<link href="admin/css/fonts/fonts.css" rel="stylesheet">

</head>

<body id="bodyID" style="background-image:url(admin/images/bg.png);">

<div class="container" style="padding:30px 0px 0px 0px;text-align:center;">
	&nbsp;
</div>

<noscript>
    <div id="enablejsID" class="container" style="background-color:yellow;color:red;padding:10px 0px;text-align:center;font-weight:bold;font-size:1.5em;">
        <span>Please enable JavaScript to use this site.</span>
    </div>
</noscript>

<div class="container" style="font-family:'osreg';text-align:center;border:thin solid rgba(0,0,0,0.05);background-color:rgba(255,255,255,0.25);border-radius:10px;padding-top:30px;">

    <div class="row hidden-xs" style="padding:0px 0px 20px 0px;text-align:center;color:rgba(255,255,255,0.8);font-size:3em;text-shadow:-1px -1px 2px rgba(0,0,0,0.1);">
        <i class="fa fa-h-square fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-ambulance fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-medkit fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-user-md fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-hospital-o fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-stethoscope fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-wheelchair fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-plus-square fa-fw"></i>
    </div>

	<div class="row">
    	<div class="col-sm-3"></div>
    	<div class="col-sm-6">
            <p style="font-family:'osreg';font-size:2em;color:rgba(0,0,0,0.5);">Admin Editor<br/>Notice of Privacy Practices<br/><br/></p>
            <p style="font-family:'oslt';font-size:1.2em;padding-bottom:15px;">Please enter username and password.</p>
            <div class="row" style="font-family:'ossb';font-size:1.5em;padding-bottom:30px;">
                <div class="col-sm-12" style="padding-bottom:0px;">
				
					<form class="form-inline" role="form">
					  <div class="form-group">
						<label class="sr-only" for="usernameID">Username</label>
						<input type="username" class="form-control" id="usernameID" placeholder="Username">
					  </div>
					  <div class="form-group">
						<label class="sr-only" for="passwordID">Password</label>
						<input type="password" class="form-control" id="passwordID" placeholder="Password">
					  </div>
					  <div>
					  <br/>
					  <button type="submit" class="btn btn-info" onClick="submitloginform();return false;">Login</button>
					  </div>
					</form>
					
                </div>
            </div>            
        </div>
    	<div class="col-sm-3"></div>
    </div>
	<div class="row">
		<div style="text-align:right;padding:20px">
		<a href="../" target="_blank" class="btn btn-default">View User Facing Site</a>
		</div>
	</div>

</div>

<script>
	function submitloginform() {
	
		if($('#usernameID').val().length == 0 || $('#passwordID').val() == 0) {
			alert("Please enter username and password");
			return false;
		}
	
		var loginrequest = $.ajax({
		  url: "server_checklogin.php",
		  type: "POST",
		  data: {username : $('#usernameID').val(), pw : $('#passwordID').val() },
		  dataType: "html"
		});
		
		loginrequest.done(function(msg) {
			if(msg=="SUCCESS") {
				window.location.href = 'admin.php';
			} else {
				alert(msg);
			}
		});
		
		loginrequest.fail(function(jqXHR, textStatus) {
			alert(textStatus);
		});						
	};
</script>
    
</body>

</html>