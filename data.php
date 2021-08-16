<?php 
		if( empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["gender"]) || empty($_POST["day"])|| empty($_POST["month"])|| empty($_POST["year"]) || empty($_POST["caste"]) || empty($_POST["religion"]) || empty($_POST["occupation"])){
		header("location:record.php?error=1");
		   }
		else{   
		         
				$fname=$_POST["fname"];
				$lname=$_POST["lname"];
				$email=$_POST["email"];
				$pass=$_POST["pass"];
				$day=$_POST["day"];
				$month=$_POST["month"];
				$year=$_POST["year"];
				$gender=$_POST["gender"];
				$caste=$_POST["caste"];
				$religion=$_POST["religion"];
				$occupation=$_POST["occupation"];
				
				$conn=mysqli_connect("localhost","root","","user");
				
				if(mysqli_query($conn,"insert into user values('$fname','$lname','$email','$pass','$day','$month','$year','$gender','$caste','$religion','$occupation')")>0){
				header("location:record.php?success=1");
				}
				else{
				header("location:record.php?try again=1");
				}
		}
?>