<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<?php include('header.php'); include('menu.php'); ?>
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<span style="text-align: center; color: red;font-size: x-large;"><?php if(session()->getFlashData("Success")) echo session()->getFlashData("Success"); ?></span>
				<span style="text-align: center; color: red;font-size: x-large;"><?php if(session()->getFlashData("Error")) echo session()->getFlashData("Error"); ?></span>
				<form class="login100-form validate-form flex-sb flex-w" action="<?=base_url('userLogin')?>" method="post" >
					<span class="login100-form-title p-b-32"> User Login </span>

					<span class="txt1 p-b-11"> Email </span>
					<div class="wrap-input100 validate1-input m-b-36" data-validate="Email is required">
						<input class="input100" type="text" name="email" value="<?=old('email')?>">
						<span class="focus-input100"></span>						
						<span><?php if(isset(session()->getFlashData("ErrorData")['email'])) echo session()->getFlashData("ErrorData")['email']; ?></span>
					</div>

					<span class="txt1 p-b-11"> Password </span>
					<div class="wrap-input100 validate1-input m-b-12" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span><?php if(isset(session()->getFlashData("ErrorData")['password'])) echo session()->getFlashData("ErrorData")['password']; ?></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"> Login </button>
					</div>
					<div class="" style="margin-left: 200px;">
						<u><a href="<?=base_url('/register')?>">Don't have an Account.</a></u>
					</div>
				</form>
			</div>
		</div>
	
    <?php include('footer.php'); ?>