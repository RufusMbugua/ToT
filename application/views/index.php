<html>
	<head>
		
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/awesomebuttons.css"/>
			<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
	</head>
	<body>
	

		<section class="login">
			<section class="form-title">
				<section class="title-text">
					Sign In
				</section>
			</section>
			<form class="form-login" method="post" accept-charset="utf-8">

				<input name="username" type="text" placeholder="Username / Email Address"/>
				<p></p>
				<input  name="secret" type="password" placeholder="Password"/>
				<p></p>
				<button type="submit" class="awesome large" formaction="<?php echo base_url().'c_auth/login'?>" />
				Login</button>
			</form>
		</section>
		
	</body>
</html>