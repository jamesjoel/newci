<style type="text/css">
	#tab td p{
		color: red;
		margin: 0;
		padding-top: 3px;
		font-size: 12px;
	}
</style>
<div id="content">
	<div class="wrapper">
		<h2>Signup Page</h2>
		<form action="" method="post">
			
		<table id="tab" align="center" border="1" cellspacing="0" cellpadding="10">
			<tr>
				<td>Full Name</td>
				<td><input value="<?php echo set_value('full_name'); ?>" type="text" name="full_name" /><br />
					<?php echo form_error("full_name"); ?>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input value="<?php echo set_value('username') ?>" type="text" name="username"/><br />
					<?php echo form_error("username"); ?>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input value="<?php echo set_value('pass') ?>" type="password" name="pass"/><Br />
					<?php echo form_error("pass"); ?>
				</td>
			</tr>
			<tr>
				<td>Re-Password</td>
				<td><input type="password" value="<?php echo set_value('re_pass'); ?>" name="re_pass"/><Br />
					<?php echo form_error("re_pass"); ?>
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="add"><?php echo set_value("add"); ?></textarea><br />
					<?php echo form_error("add"); ?>
				</td>
			</tr>
			<tr>
				<td>City</td>
				<td><select name="city">
					<option value="">Select</option>
					<option <?php echo set_select("city", "Indore"); ?> value="Indore">Indore</option>
					<option <?php echo set_select("city", "Bhopal"); ?> value="Bhopal">Bhopal</option>
					<option <?php echo set_select("city", "Mumbai"); ?> value="Mumbai">Mumbai</option>
					<option <?php echo set_select("city", "Pune"); ?> value="Pune">Pune</option>
				</select>
				<Br/>
				<?php echo form_error("city"); ?>
			</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>Male <input <?php echo set_radio("gender", "male"); ?> type="radio" name="gender" value="male" />
					Female <input <?php echo set_radio("gender", "female"); ?> type="radio" name="gender" value="female" />
					<br />
					<?php echo form_error("gender");?>
				</td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact" value="<?php echo set_value("contact");?>" /><br />
					<?php echo form_error("contact");?>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Submit">
				</td>
		</table>
		</form>
	</div>
</div>
