<!doctype html>
<html lang="ar">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>Attendance</title>


		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

		<link rel="stylesheet" href="./css/styles.css">
		<link rel="icon" href="./images/logo.png" type="image/ico">



		<!-- Jquery -->
		<script src="https://code.jquery.com/jquery-3.1.0.js"></script>

		<!-- Popper + Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

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
		<div id="logout">
			<button  type="button" class="btn btn-primary shadow"
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

