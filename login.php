
<?php include('includes/header.php') ?>


<h4 class="text-center font-weight-bold text-primary text-uppercase mb-3">Login</h4>

<form id="login-form" class="needs-validation " novalidate>
	<div class="form-group">
		<input
			placeholder="username"
			type="text"
			class="form-control"
			id="username"
			required>
		<div class="invalid-feedback">
			Please provide username.
		</div>
	</div>
	<div class="form-group">
		<input
			placeholder="password"
			type="password"
			class="form-control"
			id="password"
			required>
		<div class="invalid-feedback">
			Please provide password.
		</div>
	</div>


	<button class="btn btn-primary btn-block" type="submit">Login</button>


	<p class="mt-3 mb-2 text-capitalize">don't have an account? <a href="register.php">register</a> now!</p>
</form>


<?php include('includes/footer.php') ?>




