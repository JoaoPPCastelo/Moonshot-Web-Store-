<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="jumbotron">
	<?php if (validation_errors()) : ?>
		<div class="col-md-12">
			<div class="alert alert-danger" role="alert">
				<?= validation_errors() ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="container">
		<span class="glyphicon glyphicon-user"></span>
		<h2>Sign up</h2>
		<div class="box">
			<?= form_open() ?>
				<div class="form-group">
					<input type="text" class="form-control" id="username" name="username" placeholder="Name">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="useremail" name="useremail" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="userpassword_confirm" name="userpassword_confirm" placeholder="Confirm Password">
				</div>
				<?php if($this->session->userdata('is_admin')) {?>
					<div class="form-group">
						<input type="radio" name="usertype" value="0" checked> User<br>
						<input type="radio" name="usertype" value="1"> Administrator<br>
					</div>
				 <?php } ?>
				<div class="form-group">
					<button type="submit" class="btn btn-default full-width"><span class="glyphicon glyphicon-ok"></span></button>
				</div>
			</form>
		<div class="create-account">Already have an account?? <a href=<?php echo base_url()."index.php/main/login"?>>Login</a></div>
		</div>
	</div>
</div>