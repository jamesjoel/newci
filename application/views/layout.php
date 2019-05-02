<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/style.css"); ?>">
</head>
<body>
<div id="header">
	<div class="wrapper">
		<h2>The Stepping Stone</h2>
		<ul>
			<li><a href="<?php echo site_url('home/index') ?>">Home</a></li>
			<li><a href="<?php echo site_url('home/about') ?>">About</a></li>
			<li><a href="<?php echo site_url('home/contact') ?>">Contact</a></li>
			<li><a href="#">Help</a></li>
			<li><a href="<?php echo site_url('home/login'); ?>">Login</a></li>
		</ul>
	</div>
</div>

<?php $this->load->view($pagename); ?>

<div id="footer">
	<div class="wrapper"></div>
</div>
</body>
</html>