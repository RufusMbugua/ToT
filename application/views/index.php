<?php
ob_start();
$sessionEmail = $this -> session -> userdata('name');
?>

<?php $this ->load ->view('segments/header'); ?>

		<header>
			<section class="logo">
		<img src="<?php echo base_url(); ?>images/ToT_logo.png" />
	</section>
			<section class="banner">
				<section class="user">
					<section class="details">
						Signed in as: <?php echo $sessionEmail ?>
						<a class="awesome medium" href"<?php echo base_url(); ?>C_Front/index">Log Out</a>
					</section>
				</section>
			</section>
			<?php $this->load->view('menus/main-menu'); ?>
		</header>
		<section class="image-scroller">
			<div class="slider-wrapper theme-default">
							<div id="slider" class="nivoSlider">
								<img src="<?php echo base_url(); ?>images/a.jpg" data-thumb="<?php echo base_url(); ?>images/nemo.jpg" alt="" />
								<img src="<?php echo base_url(); ?>images/b.jpg" data-thumb="<?php echo base_url(); ?>images/toystory.jpg" alt="" />
								<img src="<?php echo base_url(); ?>images/c.jpg" data-thumb="<?php echo base_url(); ?>images/up.jpg" alt=""/>
							</div>
							<div id="htmlcaption" class="nivo-html-caption">
								<strong>Kianda Foundation Projects Acheived</strong>
							</div>
						</div>
		</section>
		<section class="content"></section>
<?php $this ->load ->view('segments/footer'); ?>

<?php
 ob_end_flush();
?>