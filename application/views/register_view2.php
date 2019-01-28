<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body {
		color: #FEBD01;
		background: #FEBD01;
	}
	.form-control {
        min-height: 41px;
		background: #fff;
		box-shadow: none !important;
		border-color: #50BA70;
	}
	.form-control:focus {
		border-color: #7CFC00;
	}
    .form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 350px;
		margin: 0 auto;
		padding: 100px 0 30px;		
	}
	.login-form form {
		color: white;
		border-radius: 2px;
        margin-top: -70px;
    	margin-bottom: 15px;
        font-size: 13px;
        background: #50BA70;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 20px;	
        padding-bottom: 5px;
        position: relative;	
        border-radius: 10px;
    }
	.login-form h2 {
		font-size: 22px;
        margin: 35px 0 25px;
    }
	.login-form .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -50px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #70c5c0;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .lock img {
		width: 100%;
	}	
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #3E7F52;
        color: white;
		border: none;
		margin-bottom: 20px;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #FEBD01;
        outline: none !important;
	}    
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form a:hover {
		text-decoration: none;
	}
	.login-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="login-form">
<?php if ($this->session->flashdata('success')) {?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?php echo $this->session->flashdata('success'); ?>
    </div>
  <?php  } ?> 

<!-- validation messages for taking inputs -->
<?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>','</div>');
?> 

<?php echo form_open('Register/registerUser') ?> 

     <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="fname">Full Name</label>
        <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="contact">Contact</label> 
         <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number">
    </div>
    <div class="form-group">
        <label for="niS">NIS</label>
        <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="password">Confirm Password</label>
        <input type="password" class="form-control" name="cpassword" id="password" placeholder="Password">
    </div>
    <button class="btn btn-primary" name='reg'>REGISTER</button>
    <a href="<?php echo site_url('Home/Login') ?>" class="btn btn-link">Sign In</a>  

 <?php echo form_close() ?>

</div>
</body>
</html>                            