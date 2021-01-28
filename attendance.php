
<?php include('includes/header.php') ?>


<h4 class="text-center font-weight-bold text-primary text-uppercase mb-3">Confirm Attendance</h4>

<form id="attendance-form" class="needs-validation " novalidate>
	<div class="form-group">
		<label for="employees">Employees</label>
		<select
			class="form-control h-100"
			id="employees"
			multiple
			size="10"
			required

		>
		</select>
		<div class="invalid-feedback">
			Please select username.
		</div>
	</div>


	<!--<div class="form-group">
		<label for="attendance-time">Attendance Time</label>
		<div class="input-group mb-3">
			<input
				placeholder="attendance time"
				type="text"
				class="form-control"
				id="attendance-time"
				required
				disabled
			>
			<div class="input-group-append">
				<button class="btn btn-outline-primary" type="button" onclick="fillAttendanceDateTime()">
					<i class="far fa-calendar-check mr-2"></i> Update time
				</button>
			</div>
		</div>

		<div class="invalid-feedback">
			Please choose attendance time.
		</div>
	</div>-->
	<button class="btn btn-primary btn-block" type="submit">Confirm Attendance</button>
</form>



<script>
    window.addEventListener('load',function (){
        checkAuthAdmin()
    })

	let form = document.querySelector('#attendance-form')
    form.addEventListener('submit', function(event) {
        if (form.checkValidity()){
            event.preventDefault();

			let attendance = $('#employees').val()

	        attendance.forEach(person=>{
                registerAttendance(person,new Date().toLocaleString())
	        })
        }
    });




</script>


<?php include('includes/footer.php') ?>




