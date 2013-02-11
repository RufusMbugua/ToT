<form  accept-charset="utf-8" action="<?php echo base_url().'c_authorize/login'?>" method="post">
	<h3>Sign In</h3>
	
		<input type="text" class="username" placeholder="Email" required name="email"/>
		<input type = "password" class="password" placeholder="Password" required name="password"/>

		<input type="submit" value="submit" />
		<section class= "links">
			<a style="float:left" >Forgot Password</a>
			<a style="float:right" href="<?php echo base_url(); ?>C_Front/register" >Register</a>
		</section>

</form>
