<?php

  $conn=mysqli_connect("localhost","root","","username_exists");
  if (!$conn) {
	die('Could not connect: ' . mysqli_error($conn));
  }
  
  if(isset($_POST['user_name']))
  {
	  $query="select * from registration where username'".$_POST['user_name']."'";
	  $result=mysqli_query($query,$conn);
	  if(mysqli_num_rows($result)>0)
	  {
		  echo '<span class="text-denger"> Username is already exists!</span>';
	  }
	  else
	  {
		echo '<span class="text-denger"> Username is available!</span>';    
	  }
  }
  ?>