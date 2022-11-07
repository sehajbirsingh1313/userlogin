<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update User</title>
	<?php include('header.php'); include('menu.php'); ?>
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<span style="text-align: center; color: red;font-size: x-large;"></span>
				<form class="login100-form validate-form flex-sb flex-w" action="<?=base_url('profileupdate')?>" method="post" enctype="multipart/form-data">
					<span class="login100-form-title p-b-32"> Update User </span>
					<span class="txt1 p-b-11"> Name </span>
					<div class="wrap-input100 validate1-input m-b-36" data-validate="Username is required">
						<input class="input100" type="text" name="name" value="<?=session()->get('LoggedUserData')['name']?session()->get('LoggedUserData')['name']:''?>">
						<span class="focus-input100"></span>
						<span><?php if(isset(session()->getFlashData("ErrorData")['name'])) echo session()->getFlashData("ErrorData")['name']; ?></span>
					</div>

					<span class="txt1 p-b-11"> Contact </span>
					<div class="wrap-input100 validate1-input m-b-36" data-validate="Contact is required">
						<input class="input100" type="number" name="contact" value="<?=session()->get('LoggedUserData')['contact']?session()->get('LoggedUserData')['contact']:''?>">
						<span class="focus-input100"></span>						
						<span><?php if(isset(session()->getFlashData("ErrorData")['contact'])) echo session()->getFlashData("ErrorData")['contact']; ?></span>
					</div>

					<span class="txt1 p-b-11"> Profile Image </span>
					<div class="wrap-input100 validate1-input m-b-36" data-validate="Profile is required">
						<input class="input100" type="file" name="profile_img" value="">
						<span class="focus-input100"></span>
						<span><?php if(isset(session()->getFlashData("ErrorData")['profile_img'])) echo session()->getFlashData("ErrorData")['profile_img']; ?></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"> Update </button>
					</div>
				</form>
			</div>
		</div>
	
    <?php include('footer.php'); ?>