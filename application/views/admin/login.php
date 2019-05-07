<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/admin.css'); ?>">
</head>
<body>
<div id="header">
	<div class="wrapper">
		<h3>Admin Panel</h3>
	</div>
</div>
<div id="content">
	<div class="wrapper">
		<Br />
		<Br />
		<Br />
		<form action="<?php echo site_url('admin/auth'); ?>" method="post">
		<table align="center" border="1" cellpadding="10" cellspacing="0">
			<tr>
				<td>Username</td>
				<td><input type='text' name="username" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type='password' name="password" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
		<?php echo $this->session->flashdata('msg'); ?>
		</form>
	</div>
</div>
</body>
</html>