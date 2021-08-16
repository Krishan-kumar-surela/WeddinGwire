<?php 
      include("db.php");
	  if(!isset($_COOKIE["user"]){
		  header("location:login.php");
	  }
	  else{
			$email=mysqli_real_escape_string($conn,$_COOKIE["user"]);
			$rs=mysqli_query($conn,"select * from ucer where email='$eamil'");
			if($r=mysqli_fetch_array($rs)){
				if(isset($_REQUEST["id"] && isset($_REQUEST["record"])){
					$id=mysqli_real_escape_string($conn,$_REQUEST["id"]);
					$record=mysqli_real_escape_string($conn,$_REQUEST["record"]);
					if(mysqli_query($conn,"update user set $id='$record' where email='$email'")>0){
						echo "success";
					}
				}
			}
	  }
?>	  
				