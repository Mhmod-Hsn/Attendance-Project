
<?php include('includes/header.php') ?>


<h4 class="text-center font-weight-bold text-primary text-uppercase mb-3">Confirm Attendance</h4>

<form id="attendance-form" class="needs-validation " novalidate>
	<div class="form-group">
		<select
			class="custom-select"
			id="username"
			required
		>
			<option selected disabled value="">Choose Username</option>
		</select>
		<div class="invalid-feedback">
			Please select username.
		</div>
	</div>


	<div class="form-group">

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
	</div>
	<button class="btn btn-primary btn-block" type="submit">Confirm Attendance</button>
</form>



<script>

    window.addEventListener('load',function (){
        fillAttendanceDateTime(false)
    })


	function fillAttendanceDateTime(fireToast = true){
        $('#attendance-time').val(new Date().toLocaleTimeString('en-EG',{ hour12: false }))
		if (fireToast)
            toast.fire('Time updated successfully')
    }

</script>


<?php include('includes/footer.php') ?>




