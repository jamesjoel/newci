
<div id="content">
	<div class="wrapper">
		<h2>My Edit Profile</h2>
		<?php
		$data = $result->row_array();
		?>
		<form action="<?php echo site_url('user/update') ?>" method="post">
		<table align="center" border="1" cellspacing="0" cellpadding="10" width="300">
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="full_name" value="<?php echo $data['full_name']; ?>" /></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" value="<?php echo $data['username']; ?>" disabled="disabled"></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact" value="<?php echo $data['contact']; ?>"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>Male <input type="radio" <?php if($data['gender']=="male") echo "checked='checked'"; ?> value="male" name="gender">
					Female <input type="radio" <?php if($data['gender']=="female") echo "checked='checked'"; ?> value="female" name="gender">
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="address"><?php echo $data['address']; ?></textarea></td>
			</tr>
			<tr>
				<td>City</td>
				<td><select name='city'>
					<option>Select</option>	
					<option  value="Indore" <?php if($data['city']=="Indore") echo "selected='selected'" ?>>Indore</option>
					<option  value="Bhopal" <?php if($data['city']=="Bhopal") echo "selected='selected'" ?>>Bhopal</option>
					<option  value="Mumbai" <?php if($data['city']=="Mumbai") echo "selected='selected'" ?>>Mumbai</option>
					<option  value="Pune" <?php if($data['city']=="Pune") echo "selected='selected'" ?>>Pune</option>
				</select></td>
			</tr>
			<tr>
				<td colspan="2" align="center">	
					<input type="submit" value="Update">
				</td>
			</tr>
		</table>
		
	</div>
</div>
