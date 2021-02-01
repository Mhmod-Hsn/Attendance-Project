<!doctype html>
<html lang="ar">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>Attendance</title>


		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

		<!-- Chart Js -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />

		<link rel="stylesheet" href="./css/styles.css">
		<link rel="icon" href="./favicon.ico" type="image/ico">







		<script src="../vendors/fs/fs-jquery.min.js"></script>

		<!-- Jquery -->
		<script src="https://code.jquery.com/jquery-3.1.0.js"></script>

		<!-- Popper + Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


		<!-- Chart Js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>

		<!-- Sweet alert 2 -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


		<script src="../js/script.js"></script>




	</head>
	<body>
		<div id="loader" class="d-flex align-content-center justify-content-center">
			<div class="loader">
				<div class="inner one"></div>
				<div class="inner two"></div>
				<div class="inner three"></div>
			</div>
		</div>

		<div id="floating-buttons" class="d-flex flex-column">
			<button id="dashboard" type="button" class="btn btn-primary mb-2 shadow admin-only"
			         data-toggle="tooltip" title="Dashboard" data-placement="left"
			         onclick="window.location.replace('/')"
			>
				<i class="fas fa-tachometer-alt"></i>
			</button>
			<button id="attendance" type="button" class="btn btn-warning text-white mb-2 shadow admin-only"
			        data-toggle="tooltip" title="Attendance" data-placement="left"
			        onclick="window.location.replace('/attendance.html')"
			>
				<i class="fas fa-user-check"></i>
			</button>
			<button id="profiles" type="button" class="btn btn-secondary mb-2 shadow"
			         data-toggle="tooltip" title="Profiles" data-placement="left"
			         onclick="window.location.replace('/profile.html')"
			>
				<i class="fas fa-user"></i>
			</button>
			<button id="logout" type="button" class="btn btn-danger mb-2 shadow"
			        data-toggle="tooltip" title="Logout" data-placement="left"
			        onclick="logout()"
			>
				<i class="fas fa-sign-in-alt"></i>
			</button>

		</div>

		<div class="container">

			<!-- Main Wrapper start -->
			<div id="wrapper" class="d-flex align-items-center justify-content-center py-5">
				<div class="card border-primary shadow">
					<div class="card-body">

