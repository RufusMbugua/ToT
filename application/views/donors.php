<?php ?>

<html>
	<head>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>

		<!-- Attach JavaScript files -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>

		<title><?php echo $title; ?></title>
	</head>
	<body>
		<header> 
			<section class="banner">
				<section class="user">
					<section class="details">
						Signed in as:
						Account Settings Log Out
					</section>
				</section>
			</section>
			<?php $this->load->view('menus/main-menu'); ?>
			
		</header>
		<section class='content'>
			
			<section class ="project navigation">
				
				<nav>
				<ul>
					<li> <a href="">View </a> </li>
					<li> <a href=""> New</a> </li>
					<li> <a href=""> Edit</a> </li>
					<li> <a href=""> Deactivate</a> </li>
				</ul>
			</nav>
			</section>
			
			<section class ="project list">
				
				<?php $this->load->view('elements/donor-registration'); ?>
				
			</section>
			
		</section>
		<footer></footer>
	</body>
	
	
	
</html>