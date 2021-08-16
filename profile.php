<?php
	include("db.php");
    if(!isset($_COOKIE["user"])){
	    header("location:index.php");
	}
	else{
	    $email=$_COOKIE["user"];
		$rs = mysqli_query($conn,"select * from user where email='$email'");
		if($r = mysqli_fetch_array($rs)){
		   
		   		    
		}
	}
?>
<html>
      <head>
			<title>WeddinGwire</title>
			<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
		
		<style>
		   .nav .nav-link a{
					
                     font-size: 20px;
                     font-weight: 500;
                     font-family: 'vardana';
                     }
					  
			 
		</style>
		<script>
			$(document).ready(function(){
				$(".fa.fa-edit").click(function(){
					var rel=$(this).attr("rel");
					var pattern=$(this).attr("pattern");
					
					if(pattern=="check"){
						$("#"+rel).prop('disabled',false);
					}
				});
				$("select").change(function(){
					var rel=$(this).attr("rel");
					var dt=$(this).val():
					$.post(
				"update.php",{id:rel,record:dt},function(data){
					
					if(data==success"){
						$(".form-control."+rel).prop('disabled',true);
					}
				});
			});
		});
		</script>
						
		</head>
		<body>
				<nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
                     <a class="navbar-brand" href="#" style="color:white;">
					  <b>WeddinGwire</b>
					 </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                       </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item active">
                          <a class="nav-link" href="#" style="color:white;"><b>Home</b></a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="logout.php" style="color:white;"><b>LogOut</b></a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="record.php"style="color:white;"><b>New User</b></a>
                       </li>
                </ul>
				</nav>
				<br><br><br>
				 
				<div class="container">
					<div class="row" style="margin-top:100px">
						<div class="col-sm-8">
							<div class="row w3-card" style="background-color:white">
								<div class="col-sm-12">
								 <table class="table table-hover table-borderless">
									<tr>
										<td>First Name : </td>
										<td><?php echo $r["fname"]; ?></td>
										
									    <td><i class="fa fa-edit" style="color:blue"></i></td>
									</tr>
									<tr>
										<td>Last Name :</td>
										<td><?php echo $r["lname"]; ?></td>
									    <td><i class="fa fa-edit" style="color:blue"></i></td>
									</tr>
									<tr>
										<td> Gender :</td>
										<td>
											<select rel="gender" disabled="disabled" class="form-control gender" id="<?php echo $r["gender"];?>">
												<option value="<?php echo $r["gender"];?>"><?php echo $r["gender"];?></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
										    </select>
										</td>	
										<td>
										    <i class="fa fa-edit" style="color:blue" pattern="check" rel="<?php echo $r["gender"];?>"></i>
										</td>
									</tr>
									<tr>
										<td>Religion :</td>
										<td>
											<select rel="religion" disabled="disabled" class="form-control religion" id="<?php echo $r["religion"];?>">
												<option value="<?php echo $r["religion"];?>"><?php echo $r["religion"];?></option>
												<option value="Hindu">Hindu</option>
												<option value="Muslim">Muslim</option>
												<option value="Sikh">Sikh</option>
												<option value="Ishai">Cristian</option>
										    </select>
										</td>	
										<td>
										    <i class="fa fa-edit" style="color:blue" pattern="check" rel="<?php echo $r["religion"];?>"></i>
										</td>
									</tr>	
									<tr>
										<td>Caste :</td>
										<td>
											<select rel="caste" disabled="disabled" class="form-control caste" id="<?php echo $r["caste"];?>">
												<option value="<?php echo $r["caste"];?>"><?php echo $r["caste"];?></option>
												<option value="Sharma">Sharma</option>
												<option value="Mittal">Mittal</option>
												<option value="Bhati">Bhati</option>
												<option value="Saini">Saini</option>
												<option value="Surela">Surela</option>
												<option value="Singh">Singh</option>
										    </select>
										</td>	
										<td>
										    <i class="fa fa-edit" style="color:blue" pattern="check" rel="<?php echo $r["caste"];?>"></i>
										</td>
									</tr>	
								</table>	
							   </div>
						    </div>
						</div>
					</div>
					</center>
                </div>
 				

