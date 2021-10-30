<!DOCTYPE html>
<html>
	<head lang="en">
		<?php $this->load->view('partials/setup')?>
		<title>Client Login</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/client_login.css">
	</head>
	<body>
		<?php $this->load->view('partials/navbar')?>
		<?php $this->load->view('partials/header')?>
		<div id = "login-section" class = "container">
		    <form class = "form-signin" action = "/clients/client_dashboard" method = "POST">
		        <h2 class = "form-signin-heading">Client Log In</h2>
		        <label for = "inputEmail" class = "sr-only">Email address</label>
		        <input type = "email" id = "inputEmail" name = "email" class="form-control" placeholder="Email address" autofocus>
		        <label for = "inputPassword" class = "sr-only">Password</label>
		        <input type = "password" id = "inputPassword" name = "password" class="form-control" placeholder="Password">
		        <div class = "checkbox">
		          <label>
		            <input type="checkbox" value="remember-me"> Remember me
		          </label>
		        </div>
<?php
					if($this->session->flashdata('login_errors'))
					{
						foreach($this->session->flashdata('login_errors') as $error)
						{
							echo $error;
						}	
						
					}
?>
		        <button class = "btn btn-lg btn-primary btn-block" type = "submit">Sign in</button>
		        <button class = "btn btn-lg btn-primary btn-block" href = "#registration" data-toggle = "collapse" type = "button">Need an account?</button>
		    </form>
    	</div> <!-- /container -->	
    	<div id = "registration-section" class="container">
    		<div id = "registration" class = "collapse">
			    <form class = "form-signin" action = "/clients/register" method = "POST">
			        <h2 class = "form-signin-heading">Client Registration</h2>
			        <label for = "inputFirstName" class = "sr-only">First Name</label>
			        <input type = "text" id = "inputFirstName" name = "firstname" class = "form-control" placeholder = "First Name" required autofocus>
			        <label for = "inputLastName" class="sr-only">Last Name</label>
			        <input type = "text" id = "inputLastName" name = "lastname" class = "form-control" placeholder = "Last Name" required autofocus>
			        <label for = "inputEmailRegister" class = "sr-only">Email address</label>
			        <input type = "email" id = "inputEmailRegister" name "email" class = "form-control" placeholder = "Email address" required autofocus>
			        <label for = "inputPasswordRegister" class = "sr-only">Password</label>
			        <input type = "password" id = "inputPasswordRegister" name = "password" class = "form-control" placeholder = "Password" required>
			        <label for = "inputPassword_Conf" class = "sr-only">Password Confirmation</label>
			        <input type = "password" id = "inputPassword_Conf" name = "password_conf" class = "form-control" placeholder = "Password Confirmation" required>
			        <label for = "inputDateOfBirth" class = "sr-only">Date of Birth</label>
			        <input type = "date" id = "inputDateOfBirth" name = "date_of_birth" class = "form-control" placeholder = "Date of Birth" required>
<?php
					if($this->session->flashdata('registration_errors'))
					{	
						foreach($this->session->flashdata('registration_errors') as $error)
						{
							echo $error;
						}	
					}
?>
			        <button class = "btn btn-lg btn-primary btn-block" type = "submit">Register</button>
			    </form>
			</div><!-- .collapse  -->   
		</div>    

		<?php $this->load->view('partials/footer')?>
	</body>
</html>