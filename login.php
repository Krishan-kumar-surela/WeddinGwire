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
                          <a class="nav-link" href="index.php" style="color:white;"><b>Home</b></a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="login.php" style="color:white;"><b>Login</b></a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="record.php"style="color:white;"><b>New User</b></a>
                       </li>
                </ul>
				</nav>
		 <div class="row" style="margin-top:120px">
	     <div class="col-sm-3">&nbsp;</div>
	     <div class="col-sm-6">
		     <div class=" card w3-card">
		     <div class="w3-hover-shadow w3-center">
			 <div class="card-header bg-primary" style="color:white;font-size:22px">Login</div><br>
			 <div class="card-body">
			     <form method="post" action="check.php">
				    <div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>			
				            <input type="email" name="email" class="form-control">
				    </div>
				     <div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
				            <input type="password" name="pass" class="form-control"><br>
				    </div>
				   <input type="submit" value="login" class="btn btn-primary">
			   </form>
			</div>
		</div>
	  </div>
    </div>
	<div class="col-sm-3">
     </div>	
    </div>		