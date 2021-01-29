
<?php include('includes/header.php') ?>

<div id="dashboard">

    <h4 class="text-center font-weight-bold text-primary text-uppercase mb-3">Monthly statistics</h4>

    <div class="row">

        <div class="col-md-4">
            <div class="single-statistics bg-primary text-white attendance text-center border shadow py-2 px-3">
                <div class="media  d-flex align-items-center justify-content-center">
                    <i class="fas fa-user-check fa-3x"></i>
                    <div class="media-body ml-3  d-flex flex-column align-items-center justify-content-center">
                        <h3 class="mt-0 font-weight-bolder number">25</h3>
                        <p class="">Attendance</p>
                    </div>
                </div>
                <div class="progress border" style="height: 5px">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="single-statistics bg-warning text-white late text-center border shadow py-2 px-3">
                <div class="media  d-flex align-items-center justify-content-center">
                    <i class="fas fa-user-minus fa-3x"></i>
                    <div class="media-body ml-3  d-flex flex-column align-items-center justify-content-center">
                        <h3 class="mt-0 font-weight-bolder number">25</h3>
                        <p class="">Late</p>
                    </div>
                </div>
                <div class="progress border" style="height: 5px">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="single-statistics bg-danger text-white absence text-center border shadow py-2 px-3">
                <div class="media  d-flex align-items-center justify-content-center">
                    <i class="fas fa-user-slash fa-3x"></i>
                    <div class="media-body ml-3  d-flex flex-column align-items-center justify-content-center">
                        <h3 class="mt-0 font-weight-bolder number">25</h3>
                        <p class="">Absence</p>
                    </div>
                </div>
                <div class="progress border" style="height: 5px">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

		<div class="col-md-6">

			<table id="all-emps-table" class="table my-5 text-center">
				<thead>
				<tr class="bg-primary text-white">
					<th scope="col" colspan="4" class=" text-center">Employees report about: <span class="month-name"></span></th>
				</tr>
				</thead>
				<thead>
				<tr>
					<th scope="col">Name</th>
					<th scope="col">Attendance</th>
					<th scope="col">Late</th>
					<th scope="col">Absence</th>
				</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<canvas id="myChart" class="my-5" height="250" style="width: 100%"></canvas>
		</div>
    </div>



</div>
<script>
    window.addEventListener('load',function (){
        checkAuthAdmin()

            setTimeout(()=>{
                showDashboardStatistics()
            },1)



    })





</script>



<?php include('includes/footer.php') ?>




