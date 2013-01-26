<?php
ob_start();
$sessionEmail = $this -> session -> userdata('name');
?>

<?php $this ->load ->view('segments/header'); ?>

		<header>
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
								<img src="<?php echo base_url(); ?>images/nemo.jpg" data-thumb="<?php echo base_url(); ?>images/nemo.jpg" alt="" />
								<img src="<?php echo base_url(); ?>images/toystory.jpg" data-thumb="<?php echo base_url(); ?>images/toystory.jpg" alt="" title="This is an example of a caption" />
								<img src="<?php echo base_url(); ?>images/up.jpg" data-thumb="<?php echo base_url(); ?>images/up.jpg" alt=""/>
							</div>
							<div id="htmlcaption" class="nivo-html-caption">
								<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
							</div>
						</div>
		</section>
		<section class="content"></section>
<?php $this ->load ->view('segments/footer'); ?>

<?php
 ob_end_flush();
?>