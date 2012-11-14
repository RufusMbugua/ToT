<html>
	<head>
		
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/awesomebuttons.css"/>
			<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
	</head>
	<body>
	

		<section class="login">
        <?php $this->load->view('elements/message'); ?>
		<?php $this->load->view('elements/login-form'); ?>
		</section>
		
	</body>
</html>