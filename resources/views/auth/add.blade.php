<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<style type="text/css">
	body {
    background:#333;
	}
	#login {
		-webkit-perspective: 1000px;
		-moz-perspective: 1000px;
		perspective: 1000px;
		margin-top:50px;
		margin-left:30%;
	}
	.login {
		font-family: 'Josefin Sans', sans-serif;
		-webkit-transition: .3s;
		-moz-transition: .3s;
		transition: .3s;
		-webkit-transform: rotateY(40deg);
		-moz-transform: rotateY(40deg);
		transform: rotateY(40deg);
	}
	.login:hover {
		-webkit-transform: rotate(0);
		-moz-transform: rotate(0);
		transform: rotate(0);
	}
	.login article {
		
	}
	.login .form-group {
		margin-bottom:17px;
	}
	.login .form-control,
	.login .btn {
		border-radius:0;
	}
	.login .btn {
		text-transform:uppercase;
		letter-spacing:3px;
	}
	.input-group-addon {
		border-radius:0;
		color:#fff;
		background:#f3aa0c;
		border:#f3aa0c;
	}
	.forgot {
		font-size:16px;
	}
	.forgot a {
		color:#333;
	}
	.forgot a:hover {
		color:#5cb85c;
	}

	#inner-wrapper, #contact-us .contact-form, #contact-us .our-address {
	    color: #1d1d1d;
	    font-size: 19px;
	    line-height: 1.7em;
	    font-weight: 300;
	    padding: 50px;
	    background: #fff;
	    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	    margin-bottom: 100px;
	}
	.input-group-addon {
	    border-radius: 0;
	        border-top-right-radius: 0px;
	        border-bottom-right-radius: 0px;
	    color: #fff;
	    background: #f3aa0c;
	    border: #f3aa0c;
	        border-right-color: rgb(243, 170, 12);
	        border-right-style: none;
	        border-right-width: medium;
	}

</style>
</head>
<body>
	<div class="col-md-4 col-md-offset-4" id="login">
		<section id="inner-wrapper" class="login">
			<article>
				<form action="{{ route('auth.post') }}" method="post">
				@csrf 
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"> </i></span>
							<input type="text" class="form-control" placeholder="Name*" name="name">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
							<input type="email" class="form-control" placeholder="Email Address*" name="email">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"> </i></span>
							<input type="password" class="form-control" placeholder="Password*" name="password">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"> </i></span>
							<input type="password" class="form-control" placeholder="Confirm Password*" name="password_cf">
						</div>
					</div>
					  <button type="submit" class="btn btn-success btn-block">Đăng Kí</button>
				</form>
			</article>
		</section>
	</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>>	
</body>
</html>