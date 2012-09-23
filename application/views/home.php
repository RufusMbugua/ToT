<?php
ob_start();
$sessionEmail = $this -> session -> userdata('email');
$accessLevel=$this -> session -> userdata('userRights');
?>

<html>
	<head>

		<!-- -->
		<!-- Attach CSS files -->
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
						Signed in as: <?php echo $sessionEmail ?>
						Account Settings 
						<a class="awesome medium">Log Out</a>
					</section>
				</section>
			</section>
			<?php $this->load->view('navigation'); ?>
		</header>
		<section class="content"></section>
		<footer>
			
		</footer>
	
	</body>
</html>

<?php
 ob_end_flush();
?>