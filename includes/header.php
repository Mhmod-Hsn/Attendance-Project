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
		<link rel="icon" href="./favicon.ico" type="image/ico">



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
			<button id="logout" type="button" class="btn btn-primary mb-2 shadow"
			         data-toggle="tooltip" title="Logout" data-placement="left"
			         onclick="logout()"
			>
				<i class="fas fa-sign-in-alt"></i>
			</button>
			<button id="saveUsers" type="button" class="btn btn-warning mb-2 shadow"
			         data-toggle="tooltip" title="Save Users" data-placement="left"
			         onclick="SaveAsFile(localStorage.getItem('users'),'users.json')"
			>
				<i class="fas fa-save text-white"></i>
			</button>

		</div>

		<div class="container">

			<!-- Main Wrapper start -->
			<div id="wrapper" class="d-flex align-items-center justify-content-center py-5">
				<div class="card border-primary shadow">
					<div class="card-body">

