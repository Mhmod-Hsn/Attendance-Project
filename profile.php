
<?php include('includes/header.php') ?>


<div id="profile" style="min-width: 600px">
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

            document.querySelector('#profile #username').innerHTML = `${user.firstname} ${user.lastname} (${user.username})`




            /* Get current Month only Attendance */

	        let attend = user.attend.filter(once=>{
                            return new Date(once).getMonth() === new Date().getMonth()
                        }),
                absent =  user.absent.filter(once=>{
		                    return new Date(once).getMonth() === new Date().getMonth()
		                }),
                late = user.late.filter(once=>{
		                    return new Date(once).getMonth() === new Date().getMonth()
		                })


	        /* Monthly Attendance */

            document.querySelector('#monthly-table .attend').innerText  = attend.length
            document.querySelector('#monthly-table .late').innerText    = late.length
            document.querySelector('#monthly-table .absent').innerText  = absent.length
            document.querySelector('#monthly-table .month-name').innerText  = monthNames[new Date().getMonth()]




	        /* Daily Attendance */
			let allDays = []

            attend.forEach(item=>{
                allDays.push({data: item,type: 'attend'})
                // document.querySelector('#daily-table .attend').innerHTML  += (item + '<br/>')
	        })
	        late.forEach(item=>{
                allDays.push({data: item,type: 'late'})
                // document.querySelector('#daily-table .late').innerHTML  += (item + '<br/>')
	        })
	        absent.forEach(item=>{
                allDays.push({data: item,type: 'absent'})
                // document.querySelector('#daily-table .absent').innerHTML  += (item + '<br/>')
	        })

	        allDays.sort((a,b)=> {
                return new Date(a.data).getTime() > new Date(b.data).getTime() ? 1 : -1
	        })
            allDays.forEach(singleDay=>{
                let bgClass;
                switch (singleDay.type){
                    case 'attend':
	                    bgClass = 'bg-success';
                        break;
                    case 'late':
                        bgClass = 'bg-warning';
                        break;
                    default:
	                    bgClass = 'bg-danger';
                        break;
                }
                $('#daily-table').append(`<tr><th scope="row" class="font-weight-bolder ${bgClass}">${new Date(singleDay.data).toDateString()}</th><th scope="row" class="font-weight-bolder ${bgClass}">${new Date(singleDay.data).toLocaleTimeString()}</th></tr>`)
            })



            document.querySelector('#daily-table .month-name').innerText  = monthNames[new Date().getMonth()]


        },1)

    })
</script>



<?php include('includes/footer.php') ?>




