
<div id="content">
	<div class="wrapper">
		<h2>My Profile</h2>
		<?php
		$data = $result->row_array();
		?>
		<table align="center" border="1" cellspacing="0" cellpadding="10" width="300">
			<tr>
				<td>Full Name</td>
				<td><?php echo $data['full_name']; ?></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><?php echo $data['username']; ?></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><?php echo $data['contact']; ?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $data['gender']; ?></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><?php echo $data['address']; ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td><?php echo $data['city']; ?></td>
			</tr>
			
		</table>
		<a href="<?php echo site_url('user/edit_profile'); ?>">Edit Profile</a>
	</div>
</div>
