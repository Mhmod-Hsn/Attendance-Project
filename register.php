
<?php include('includes/header.php') ?>


<h4 class="text-center font-weight-bold text-primary text-uppercase mb-3">Register</h4>

<form id="register-form" class="needs-validation " novalidate>
	<div class="form-group">
		<input
			placeholder="username"
			type="text"
			class="form-control"
			id="username"
			value="hsn"
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
			value="123"
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
			value="Mahmoud"
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
			value="Hassan"
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
			value="address here"
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
			value="hsn@mail.com"
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
			value="20"
			required>
		<div class="invalid-feedback">
			Please provide a valid age between 18 and 60.
		</div>
	</div>

	<button class="btn btn-primary btn-block" type="submit">Register</button>

	<p class="mt-3 mb-2 text-capitalize">already having an account? <a href="login.php">login</a> </p>
</form>


<script>
    window.addEventListener('load', function() {
        // check login state
        redirectLoggedInUser()

        removeLogoutBtn()
    })




    document.querySelector('#register-form').addEventListener('submit', function(event) {
        event.preventDefault();

        let userData = {}
		userData.username = document.querySelector('#username').value,
		userData.password = document.querySelector('#password').value
		userData.firstname = document.querySelector('#firstname').value
		userData.lastname = document.querySelector('#lastname').value
		userData.address = document.querySelector('#address').value
		userData.email = document.querySelector('#email').value
		userData.age = document.querySelector('#age').value


        let found = false;

        for (let i=0;i<users.length;i++){
            if (
                userData.username === users[i].username
            ) {
                found=true
            }
        }

        if(found){
            toast.fire({
                text: 'username is already exists, try again!',
                icon: 'error'
            })
        } else {
            appendUserData(userData);
        }
    });


</script>



<?php include('includes/footer.php') ?>




