
<div id="content">
	<div class="wrapper">
		<h2>Login Page</h2>
		<form action="<?php echo site_url('home/auth') ?>" method="post">
			
		<table id="tab" align="center" border="1" cellspacing="0" cellpadding="10">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Login">
				</td>
			</tr>
		</table>
		<p><?php echo $this->session->flashdata("msg"); ?></p>
		</form>
	</div>
</div>
