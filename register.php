
<?php include('includes/header.php') ?>


<h4 class="text-center font-weight-bold text-primary text-uppercase mb-3">Register</h4>

<form id="register-form" class="needs-validation " novalidate>
	<!--<div class="form-group">
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
	</div>-->
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


<script src="https://smtpjs.com/v3/smtp.js"></script>


<script>
    window.addEventListener('load', function() {
        // SecureToken : "36e3c2ee-5a27-4fb8-8c0c-9cf37ec819d8",

        // check login state
        redirectLoggedInUser()

        removeLogoutBtn()

    })




    document.querySelector('#register-form').addEventListener('submit', function(event) {
        event.preventDefault();

        let userData = {
		    username: generateUsername(),
		    password: generatePassword(),
		    firstname: document.querySelector('#firstname').value,
		    lastname: document.querySelector('#lastname').value,
		    address: document.querySelector('#address').value,
		    email: document.querySelector('#email').value,
		    age: document.querySelector('#age').value
        }

        console.log(userData)

        sendEmail(userData.email,userData.username,userData.password).then(msg=>{
            if (msg === 'OK'){
                toast.fire({
                    text: `Created Successfully, review your email ${userData.email} for credentials`,
                })


                // users.push(userData)
                setUsers()
            }
        })

    });


</script>



<?php include('includes/footer.php') ?>




