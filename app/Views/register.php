<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register User</title>
	<?php include('header.php'); include('menu.php'); ?>
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<span style="text-align: center; color: red;font-size: x-large;"><?php if(session()->getFlashData("Error")) echo session()->getFlashData("Error"); ?></span>
				<?php //print_r(session()->getFlashData("ErrorData")); ?>
				<form class="login100-form validate-form flex-sb flex-w" action="<?=base_url('userRegister')?>" method="post" enctype="multipart/form-data">
					<span class="login100-form-title p-b-32"> Register User </span>
					<span class="txt1 p-b-11"> Name </span>
					<div class="wrap-input100 validate1-input m-b-36" data-validate="Username is required">
						<input class="input100" type="text" name="name" value="<?=old('name')?>">
						<span class="focus-input100"></span>
						<span><?php if(isset(session()->getFlashData("ErrorData")['name'])) echo session()->getFlashData("ErrorData")['name']; ?></span>
					</div>

					<span class="txt1 p-b-11"> Email </span>
					<div class="wrap-input100 validate1-input m-b-36" data-validate="Email is required">
						<input class="input100" type="text" name="email" value="<?=old('email')?>">
						<span class="focus-input100"></span>						
						<span><?php if(isset(session()->getFlashData("ErrorData")['email'])) echo session()->getFlashData("ErrorData")['email']; ?></span>
					</div>

					<span class="txt1 p-b-11"> Contact </span>
					<div class="wrap-input100 validate1-input m-b-36" data-validate="Contact is required">
						<input class="input100" type="number" name="contact" value="<?=old('contact')?>">
						<span class="focus-input100"></span>						
						<span><?php if(isset(session()->getFlashData("ErrorData")['contact'])) echo session()->getFlashData("ErrorData")['contact']; ?></span>
					</div>

					<span class="txt1 p-b-11"> Profile Image </span>
					<div class="wrap-input100 validate1-input m-b-36" data-validate="Profile is required">
						<input class="input100" type="file" name="profile_img" value="">
						<span class="focus-input100"></span>
						<span></span>
					</div>

					<span class="txt1 p-b-11"> Password </span>
					<div class="wrap-input100 validate1-input m-b-12" data-validate="Password is required">
						<!-- <span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span> -->
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>	
						<span><?php if(isset(session()->getFlashData("ErrorData")['password'])) echo session()->getFlashData("ErrorData")['password']; ?></span>
					</div>

					<span class="txt1 p-b-11"> Confirm Password </span>
					<div class="wrap-input100 validate1-input m-b-12" data-validate="Password is required">
						<input class="input100" type="password" name="confirm_password">
						<span class="focus-input100"></span>						
						<span><?php if(isset(session()->getFlashData("ErrorData")['confirm_password'])) echo session()->getFlashData("ErrorData")['confirm_password']; ?></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"> Register </button>
					</div>
					<div class="" style="margin-left: 200px;">
						<u><a href="<?=base_url('/login')?>">Already I have an Account.</a></u>
					</div>
				</form>
			</div>
		</div>
	
    <?php include('footer.php'); ?>