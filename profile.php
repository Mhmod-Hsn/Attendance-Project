
<?php include('includes/header.php') ?>


<div id="profile" style="min-width: 600px">

	<div class="form-group admin-only">
		<label for="employees">Select Employee To show attendance information</label>
		<select
			class="form-control"
			id="allEmployees"
			required
			onchange="ShowUserStatistics(this)"
		>
		</select>
	</div>



	<div class="text-center">
		<i class="fas fa-user-circle text-primary h3 font-weight-bold"></i>
		<h3 id="username" class=" d-inline-block font-weight-bolder text-primary text-uppercase mb-3">
			Employee
		</h3>
	</div>

	<ul class="nav nav-pills flex-row mb-3" id="pills-tab" role="tablist">
		<li class="nav-item flex-fill px-2" role="presentation">
			<a class="nav-link " id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly report</a>
		</li>
		<li class="nav-item flex-fill px-2" role="presentation">
			<a class="nav-link active" id="pills-daily-tab" data-toggle="pill" href="#pills-daily" role="tab" aria-controls="pills-daily" aria-selected="false">Daily report</a>
		</li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade " id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
			<table id="monthly-table" class="table">
				<thead>
				<tr class="bg-primary text-white">
					<th scope="col" colspan="2" class=" text-center">Monthly report about: <span class="month-name"></span></th>
				</tr>
				</thead>
				<thead>
				<tr>
					<th scope="col">Type</th>
					<th scope="col">Times</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<th scope="row">attend</th>
					<td class="attend bg-success font-weight-bolder"></td>
				</tr>
				<tr>
					<th scope="row">late</th>
					<td class="late bg-warning font-weight-bolder"></td>
				</tr>
				<tr>
					<th scope="row">absent</th>
					<td class="absent bg-danger font-weight-bolder"></td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade show active" id="pills-daily" role="tabpanel" aria-labelledby="pills-daily-tab">

			<table id="daily-table" class="table">
				<thead>
				<tr class="bg-primary text-white">
					<th scope="col" colspan="2" class=" text-center">Daily report about: <span class="month-name"></span></th>
				</tr>
				</thead>
				<thead>
				<tr>
					<th scope="col">Day</th>
					<th scope="col">Times</th>
				</tr>
				</thead>
				<tbody>
				<!--

				<tr>
					<th scope="row">attend</th>
					<td class="attend bg-success font-weight-bolder"></td>
				</tr>
				<tr>
					<th scope="row">late</th>
					<td class="late bg-warning font-weight-bolder"></td>
				</tr>
				<tr>
					<th scope="row">absent</th>
					<td class="absent bg-danger font-weight-bolder"></td>
				</tr>
				-->
				</tbody>
			</table>
		</div>
	</div>
</div>


<script >
    window.addEventListener('load', function() {

        setTimeout(()=>{
			if (user.role === 'employee'){
	            ShowUserStatistics(user)
            } else {
                fillAllUsersToSelect()
			}

        },1000)



    })
</script>



<?php include('includes/footer.php') ?>




