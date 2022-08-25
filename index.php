<!DOCTYPE html>
<html>
<head>
   <title>Username Checking</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   <style type="text/css">
   *{
 margin:0;
 padding:0;
 background-color:#fff;
 }
 
 .box
 {
	 width:800px;
	 border:1px solid #ccc;
	 background-color:#fff;
	 border-radius:5px;
	 margin-top:36px;
 }
 
 </style>
 </head>
 
 <body>
    <div class="container box">
		<div class="form-group">
	
			<h1 align="center">Username Availability Checking</h1>
			<label>Username :</label>
			<input type="text" name="username" id="username" class="form-control">
			<span id="availability"></span>
			<br>
			<label>Password :</label>
			<input type="password" name="pass" id="pass" class="form-control">
			<br>
			<br>
			</div>
	
		<button type="button" id="register" class="btn btn-info" name="register" >Register</button>
		<br>
	<br>
	</div>
	
	<script type="text/javasript">
	 $(document).ready(function()){
		 $("#username").blur(function()){
			 var username =$(this).val();
			 $.ajax({
				 url:"usecheck.php",
				 method:"POST",
				 data:{user_name:username},
				 datatype:"text"
				 success:function(html)
				 {
					 $('#availability').html(html);
				 }
			 });
		 });
		 
	 });
	 
</script>
</body>
<html>
	