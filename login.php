
<?php include('includes/header.php') ?>


<h4 class="text-center font-weight-bold text-primary text-uppercase mb-3">Login</h4>

<form id="login-form" class="needs-validation " novalidate>
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


	<button class="btn btn-primary btn-block" type="submit">Login</button>


	<p class="mt-3 mb-2 text-capitalize">don't have an account? <a href="register.php">register</a> now!</p>
</form>


<script>
	window.addEventListener('load', function() {
		// check login state
        redirectLoggedInUser()

		removeLogoutBtn()
    })




    document.querySelector('#login-form').addEventListener('submit', function(event) {

        let username = document.querySelector('#username').value,
            password = document.querySelector('#password').value

        event.preventDefault();

        let found = false;
        for (let i=0;i<users.length;i++){
            if (
                username === users[i].username
                &&
                password === users[i].password
            ) {
                found=true
                // save in localstorage
                user = users[i];
                localStorage.setItem('user',JSON.stringify(users[i]));

                redirectLoggedInUser()
            }
        }

        if(!found){
            toast.fire({
                text: 'wrong username or password, try again!',
                icon: 'error'
            })
        }
    });
</script>

<?php include('includes/footer.php') ?>




