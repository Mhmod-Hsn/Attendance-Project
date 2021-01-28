
<?php include('includes/header.php') ?>


<h4 class="text-center font-weight-bold text-primary text-uppercase mb-3">Register</h4>

<form id="register-form" class="needs-validation " novalidate>
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
	<div class="form-group">
		<input
			placeholder="firstname"
			type="text"
			class="form-control"
			id="firstname"
			required>
		<div class="invalid-feedback">
			Please provide firstname.
		</div>
	</div>

	<div class="form-group">
		<input
			placeholder="lastname"
			type="text"
			class="form-control"
			id="lastname"
			required>
		<div class="invalid-feedback">
			Please provide lastname.
		</div>
	</div>


	<div class="form-group">
		<input
			placeholder="address"
			type="text"
			class="form-control"
			id="address"
			required>
		<div class="invalid-feedback">
			Please provide address.
		</div>
	</div>

	<div class="form-group">
		<input
			placeholder="email"
			type="email"
			class="form-control"
			id="email"
			required>
		<div class="invalid-feedback">
			Please provide email.
		</div>
	</div>


	<div class="form-group">
		<input
			placeholder="age"
			type="number"
			class="form-control"
			id="age"
			min="18"
			max="60"
			required>
		<div class="invalid-feedback">
			Please provide a valid age between 18 and 60.
		</div>
	</div>


	<button class="btn btn-primary btn-block" type="submit">Register</button>


	<p class="mt-3 mb-2 text-capitalize">already having an account? <a href="login.php">login</a> </p>

</form>


<?php include('includes/footer.php') ?>




