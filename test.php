<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<title>Document</title>
	<link href="./css/styles.css" rel="stylesheet">

</head>
<body>


<div class="container-fluid pb-5">
	<!-- Brand color  -->
	<div class="container-fluid example-container mt-5" data-category="brand-color">
		<h1>Brand color</h1>
		
		<div class="mt-3 mb-5">
			<h3>Theme colors</h3>
			<div class="p-2 mb-2 bg-primary text-white">.bg-primary</div>
			<div class="p-2 mb-2 bg-secondary text-white">.bg-secondary</div>
			<div class="p-2 mb-2 bg-success text-white">.bg-success</div>
			<div class="p-2 mb-2 bg-danger text-white">.bg-danger</div>
			<div class="p-2 mb-2 bg-warning text-white">.bg-warning</div>
			<div class="p-2 mb-2 bg-info text-white">.bg-info</div>
			<div class="p-2 mb-2 bg-light text-gray-dark">.bg-light</div>
			<div class="p-2 mb-2 bg-dark text-white">.bg-dark</div>
			<div class="p-2 mb-2 bg-white text-gray-dark">.bg-white</div>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Gradient of grey</h3>
			<div class="p-2 mb-2 swatch-100">.swatch-100</div>
			<div class="p-2 mb-2 swatch-200">.swatch-200</div>
			<div class="p-2 mb-2 swatch-300">.swatch-300</div>
			<div class="p-2 mb-2 swatch-400">.swatch-400</div>
			<div class="p-2 mb-2 swatch-500">.swatch-500</div>
			<div class="p-2 mb-2 swatch-600">.swatch-600</div>
			<div class="p-2 mb-2 swatch-700">.swatch-700</div>
			<div class="p-2 mb-2 swatch-800">.swatch-800</div>
			<div class="p-2 mb-2 swatch-900">.swatch-900</div>
		</div>
	</div>
	
	<!-- Links  -->
	<div class="container-fluid example-container" data-category="links">
		<h1>Links</h1>
		
		<div class="mt-3 mb-5">
			<h3>Default Link</h3>
			<a href="javascript:void(0);">Exemple link</a>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Link inside an alert</h3>
			<div class="alert alert-primary" role="alert">
				This is a primary alert with
				<a class="alert-link" href="javascript:void(0);">an example link</a>. Give it a click if you like.
			</div>
		</div>
	</div>
	
	<!-- Grid  -->
	<div class="container-fluid example-container" data-category="grid">
		<h1>Grid</h1>
		
		<div>
			<div class="bs-example-row">
				<!-- Bootstrap Grid -->
				<div class="row">
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
					<div class="col-sm-1">.col-sm-1</div>
				</div>
				<div class="row">
					<div class="col-sm-2">.col-sm-2</div>
					<div class="col-sm-3">.col-sm-3</div>
					<div class="col-sm-7">.col-sm-7</div>
				</div>
				<div class="row">
					<div class="col-sm-4">.col-sm-4</div>
					<div class="col-sm-4">.col-sm-4</div>
					<div class="col-sm-4">.col-sm-4</div>
				</div>
				<div class="row">
					<div class="col-sm-5">.col-sm-5</div>
					<div class="col-sm-7">.col-sm-7</div>
				</div>
				<div class="row">
					<div class="col-sm-6">.col-sm-6</div>
					<div class="col-sm-6">.col-sm-6</div>
				</div>
				<div class="row">
					<div class="col-sm-12">.col-sm-12</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Fonts  -->
	<div class="container-fluid example-container" data-category="fonts">
		<h1>Fonts</h1>
		
		<div>
			<h1>h1 </h1>
			<h2>h2 </h2>
			<h3>h3 </h3>
			<h4>h4 </h4>
			<h5>h5 </h5>
			<h6>h6 </h6>
			
			<br>
			
			<h1>Heading 1
				<small>Sub-heading</small>
			</h1>
			<h2>Heading 2
				<small>Sub-heading</small>
			</h2>
			<h3>Heading 3
				<small>Sub-heading</small>
			</h3>
			<h4>Heading 4
				<small>Sub-heading</small>
			</h4>
			<h5>Heading 5
				<small>Sub-heading</small>
			</h5>
			<h6>Heading 6
				<small>Sub-heading</small>
			</h6>
			
			<br>
			
			<h1 class="display-1">Display 1</h1>
			<h1 class="display-2">Display 2</h1>
			<h1 class="display-3">Display 3</h1>
			<h1 class="display-4">Display 4</h1>
			
			<br>
			
			<p class="lead">
				This is the article lead &mdash; it stands out at the start of the article.
			</p>
			
			<p>
				This is normal text at the normal size etc...
			</p>
			
			<p>Sample
				<mark>marked text</mark>
				.
			</p>
			
			<br>
			<blockquote class="blockquote">
				<p>The most important moment of your life is now. The most important person in your life is the one you are with now,
					and the most important activity in your life is the one you are involved with now.</p>
			</blockquote>
		</div>
	</div>
	
	
	<!-- Buttons  -->
	<div class="container-fluid example-container" data-category="buttons">
		<h1>Buttons</h1>
		
		<div class="mt-3 mb-5">
			<h3>Default buttons</h3>
			<button class="btn btn-primary" type="button">Primary</button>
			<button class="btn btn-secondary" type="button">Secondary</button>
			<button class="btn btn-info" type="button">Info</button>
			<button class="btn btn-success" type="button">Success</button>
			<button class="btn btn-warning" type="button">Warning</button>
			<button class="btn btn-danger" type="button">Danger</button>
			<button class="btn btn-light" type="button">Light</button>
			<button class="btn btn-dark" type="button">Dark</button>
			<button class="btn btn-link" type="button">Link</button>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Buttons with outline</h3>
			<button class="btn btn-outline-primary" type="button">Primary</button>
			<button class="btn btn-outline-secondary" type="button">Secondary</button>
			<button class="btn btn-outline-info" type="button">Info</button>
			<button class="btn btn-outline-success" type="button">Success</button>
			<button class="btn btn-outline-warning" type="button">Warning</button>
			<button class="btn btn-outline-danger" type="button">Danger</button>
			<button class="btn btn-outline-light" type="button">Light</button>
			<button class="btn btn-outline-dark" type="button">Dark</button>
		</div>
		
		
		<div class="mt-3 mb-5">
			<h3>Buttons sizes</h3>
			<button class="btn btn-success btn-sm" type="button">Small</button>
			<button class="btn btn-success" type="button">Default</button>
			<button class="btn btn-success btn-lg" type="button">Large</button>
			
			<br>
			
			<button class="btn btn-danger btn-lg btn-block" type="button">Block level button</button>
		</div>
		
		
		<div class="mt-3 mb-5">
			<h3>Disabled button</h3>
			<p>
				<a class="btn btn-primary btn-lg disabled" href="javascript:void(0);" role="button">The 'a' Element</a>
			</p>
			
			<p>
				<button class="btn btn-lg btn-primary" disabled="disabled" type="button">The 'button' Element</button>
			</p>
			
			<p>
				<input class="btn btn-lg btn-primary" disabled="disabled" type="button" value="The 'input' Element">
			</p>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Checkbox buttons</h3>
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-primary active">
					<input autocomplete="off" checked type="checkbox"> Boots
				</label>
				<label class="btn btn-primary">
					<input autocomplete="off" type="checkbox"> Shoes
				</label>
				<label class="btn btn-primary">
					<input autocomplete="off" type="checkbox"> Feet
				</label>
			</div>
		</div>
		
		
		<div class="mt-3 mb-5">
			<h3>Radio buttons</h3>
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-primary">
					<input autocomplete="off" checked id="boots" name="options" type="radio"> Boots
				</label>
				<label class="btn btn-primary">
					<input autocomplete="off" id="shoes" name="options" type="radio"> Shoes
				</label>
				<label class="btn btn-primary">
					<input autocomplete="off" id="feet" name="options" type="radio"> Feet
				</label>
			</div>
		</div>
	</div>
	
	<!-- Forms  -->
	<div class="container-fluid example-container" data-category="forms">
		<h1>Forms</h1>
		
		
		<div class="mt-3 mb-5">
			<h3>Default form group</h3>
			<form action="javascript:void(0);">
				<fieldset class="form-group">
					<label for="first_name">First Name</label>
					<input class="form-control" id="first_name" name="first_name" type="text">
				</fieldset>
				<fieldset class="form-group">
					<label for="last_name">Last Name</label>
					<input class="form-control" id="last_name" name="last_name" type="text">
				</fieldset>
				<button class="btn btn-default" type="submit">Submit</button>
			</form>
		</div>
		
		<h3>Inline form</h3>
		
		<div class="mt-3 mb-5">
			<form action="javascript:void(0);" class="form-inline">
				<label class="mr-sm-2 mb-0" for="first_name">First Name</label>
				<input class="form-control mr-sm-2 mb-2 mb-sm-0" id="first_name" name="first_name" type="text">
				<label class="mr-sm-2 mb-0" for="last_name">Last Name</label>
				<input class="form-control mr-sm-2 mb-2 mb-sm-0" id="last_name" name="last_name" type="text">
				<button class="btn btn-default mt-2 mt-sm-0" type="submit">Submit</button>
			</form>
		</div>
		
		<h3>Aligned form</h3>
		
		<div class="mt-3 mb-5">
			<div class="container">
				<form action="javascript:void(0);">
					<div class="form-group row">
						<label class="col-xs-3 col-form-label mr-2" for="first_name">First Name</label>
						<div class="col-xs-9">
							<input class="form-control" id="first_name" name="first_name" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xs-3 col-form-label mr-2" for="last_name">Last Name</label>
						<div class="col-xs-9">
							<input class="form-control" id="last_name" name="last_name" type="text">
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-xs-3 col-xs-9">
							<button class="btn btn-default" type="submit">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<div>
			<div class="container">
				<form action="javascript:void(0);">
					<fieldset class="form-group">
						<div class="row">
							<legend class="col-form-legend col-3">Fruit</legend>
							<div class="col-9">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" id="legendRadio1" name="legendRadio" type="radio" value="1"> Apple
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input checked class="form-check-input" id="legendRadio2" name="legendRadio" type="radio" value="2"> Orange
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" id="legendRadio3" name="legendRadio" type="radio" value="3"> Watermelon
									</label>
								</div>
							</div>
						</div>
					</fieldset>
					
					<div class="form-group row">
						<label class="col-3 col-form-label" for="first_name">First Name</label>
						<div class="col-9">
							<input class="form-control" id="first_name" name="first_name" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label" for="last_name">Last Name</label>
						<div class="col-9">
							<input class="form-control" id="last_name" name="last_name" type="text">
						</div>
					</div>
					
					<div class="form-group row">
						<div class="offset-3 col-9">
							<button class="btn btn-default" type="submit">Submit</button>
						</div>
					</div>
				
				</form>
			</div>
		</div>
		
		<h3>Form with help text </h3>
		
		<div class="mt-3 mb-5">
			<label for="accountId">Account Id</label>
			<input aria-describedby="helpAccountId" class="form-control" id="accountId" type="text">
			<span class="form-text text-muted" id="helpAccountId">Your account ID is located at the top of your invoice.</span>
		</div>
		
		<h3>Checkbox and radio </h3>
		
		<div class="mt-3 mb-5">
			<div class="form-check form-check-inline">
				<label class="form-check-label">
					<input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="1"> 1
				</label>
			</div>
			
			<div class="form-check form-check-inline">
				<label class="form-check-label">
					<input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="2"> 2
				</label>
				<label class="form-check-label">
					<input class="form-check-input" id="inlineCheckbox3" type="checkbox" value="3"> 3
				</label>
			</div>
			
			<div class="form-check form-check-inline">
				<label class="form-check-label">
					<input class="form-check-input" id="inlineRadio1" name="inlineRadioOptions" type="radio" value="1"> 1
				</label>
			</div>
			
			<div class="form-check form-check-inline">
				<label class="form-check-label">
					<input class="form-check-input" id="inlineRadio2" name="inlineRadioOptions" type="radio" value="2"> 2
				</label>
			</div>
			
			<div class="form-check form-check-inline">
				<label class="form-check-label">
					<input class="form-check-input" id="inlineRadio3" name="inlineRadioOptions" type="radio" value="3"> 3
				</label>
			</div>
		</div>
	</div>
	
	<!-- Dropdown  -->
	<div class="container-fluid example-container" data-category="dropdown">
		<h1>Dropdown</h1>
		
		<div class="row">
			<div class="mt-3 mb-5 col-4" style="position: relative">
				<h3>Default dropdown</h3>
				<div class="dropdown">
					<button aria-expanded="false" aria-haspopup="true" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton"
					        type="button">
						Dropdown button
					</button>
					<div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
						<a class="dropdown-item" href="javascript:void(0);">Action</a>
						<a class="dropdown-item" href="javascript:void(0);">Another action</a>
						<a class="dropdown-item" href="javascript:void(0);">Something else here</a>
					</div>
				
				</div>
			</div>
			<div class="mt-3 mb-5 col-4">
				<h3>Dropdown with menu</h3>
				<div class="dropdown">
					<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="about-us" type="button">
						About Us
					</button>
					<div aria-labelledby="about-us" class="dropdown-menu">
						<h6 class="dropdown-header">Company Information</h6>
						<a class="dropdown-item" href="javascript:void(0);">Our Story</a>
						<a class="dropdown-item" href="javascript:void(0);">Our Team</a>
						<h6 class="dropdown-header">Contact Us</h6>
						<a class="dropdown-item" href="javascript:void(0);">Call Center</a>
						<a class="dropdown-item" href="javascript:void(0);">Store Locations</a>
					</div>
				</div>
			</div>
			<div class="mt-3 mb-5 col-4">
				<h3>Dropdown with divider</h3>
				<div class="dropdown">
					<button aria-expanded="false" aria-haspopup="true" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="about-us" type="button">
						About Us
					</button>
					<div aria-labelledby="about-us" class="dropdown-menu">
						<a class="dropdown-item" href="javascript:void(0);">Our Story</a>
						<a class="dropdown-item" href="javascript:void(0);">Our Team</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void(0);">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Navs  -->
	<div class="container-fluid example-container" data-category="navs">
		<h1>Navs</h1>
		
		<h3>Default nav</h3>
		
		<div class="mt-3 mb-5">
			<ul class="nav">
				
				<li class="nav-item">
					<a class="nav-link active" href="javascript:void(0);">HTML</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">CSS</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">JavaScript</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">Preview</a>
				</li>
			
			</ul>
		</div>
		
		<h3>Horizontal menu</h3>
		
		<div class="mt-3 mb-5">
			<nav class="nav flex-column">
				<a class="nav-link active" href="javascript:void(0);">HTML</a>
				<a class="nav-link" href="javascript:void(0);">CSS</a>
				<a class="nav-link" href="javascript:void(0);">JavaScript</a>
				<a class="nav-link" href="javascript:void(0);">Preview</a>
			</nav>
		</div>
		
		<h3>Nav with tabs</h3>
		
		<div class="mt-3 mb-5">
			<ul class="nav nav-tabs">
				
				<li class="nav-item">
					<a class="nav-link active" href="javascript:void(0);">HTML</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">CSS</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">JavaScript</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">Preview</a>
				</li>
			
			</ul>
		</div>
		
		<h3>Nav with pills</h3>
		
		<div class="mt-3 mb-5">
			<ul class="nav nav-pills">
				
				<li class="nav-item">
					<a class="nav-link active" href="javascript:void(0);">HTML</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">CSS</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">JavaScript</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">Preview</a>
				</li>
			
			</ul>
		</div>
		
		<h3>Horizontal nav with pills</h3>
		
		<div class="mt-3 mb-5">
			<ul class="nav nav-pills flex-column">
				
				<li class="nav-item">
					<a class="nav-link active" href="javascript:void(0);">HTML</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">CSS</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">JavaScript</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="javascript:void(0);">Preview</a>
				</li>
			
			</ul>
		</div>
		
		<h3>Nav with tabs and dropdown</h3>
		
		<div class="mt-3 mb-5">
			<ul class="nav nav-tabs" id="clothing-nav" role="tablist">
				
				<li class="nav-item">
					<a aria-controls="home" aria-expanded="true" class="nav-link active" data-toggle="tab" href="#home" id="home-tab" role="tab">Home</a>
				</li>
				
				<li class="nav-item">
					<a aria-controls="hats" class="nav-link" data-toggle="tab" href="#hats" id="hats-tab" role="tab">Hats</a>
				</li>
				
				<!-- Dropdown -->
				<li class="nav-item dropdown">
					<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"
					   role="button">
						Footwear
					</a>
					<div class="dropdown-menu">
						<a aria-controls="dropdownShoes" class="dropdown-item" data-toggle="tab" href="#dropdown-shoes" id="dropdown-shoes-tab" role="tab">Shoes</a>
						<a aria-controls="dropdownBoots" class="dropdown-item" data-toggle="tab" href="#dropdown-boots" id="dropdown-boots-tab" role="tab">Boots</a>
					</div>
				</li>
			
			</ul>
			
			<!-- Content Panel -->
			<div class="tab-content" id="clothing-nav-content">
				
				<div aria-labelledby="home-tab" class="tab-pane fade show active" id="home" role="tabpanel">
					<p>Welcome home! Click on the tabs to see the content change.</p>
				</div>
				
				<div aria-labelledby="hats-tab" class="tab-pane fade" id="hats" role="tabpanel">
					<p>A hat is a head covering. It can be worn for protection against the elements, ceremonial reasons, religious reasons,
						safety, or as a fashion accessory.</p>
				</div>
				
				<div aria-labelledby="dropdown-shoes-tab" class="tab-pane fade" id="dropdown-shoes" role="tabpanel">
					<p>A shoe is an item of footwear intended to protect and comfort the human foot while doing various activities. Shoes
						are also used as an item of decoration.</p>
				</div>
				
				<div aria-labelledby="dropdown-boots-tab" class="tab-pane fade" id="dropdown-boots" role="tabpanel">
					<p>A boot is a type of footwear and a specific type of shoe. Most boots mainly cover the foot and the ankle, while
						some also cover some part of the lower calf. Some boots extend up the leg, sometimes as far as the knee or even
						the hip.
					</p>
				</div>
			
			</div>
		</div>
	</div>
	
	<!-- Navbar  -->
	<div class="container-fluid example-container" data-category="navbar">
		<h1>Navbar</h1>
		
		<div class="mt-3 mb-5">
			<nav class="navbar navbar-expand-sm navbar-light bg-faded">
				<button aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#nav-content"
				        data-toggle="collapse" type="button">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<!-- Brand -->
				<a class="navbar-brand" href="javascript:void(0);">Logo</a>
				
				<!-- Links -->
				<div class="collapse navbar-collapse" id="nav-content">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0);">Link 1</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="javascript:void(0);">Link 2
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0);">Link 3</a>
						</li>
					</ul>
				</div>
			</nav>
		
		</div>
		<div class="mt-3 mb-5">
			<nav class="navbar navbar-expand-sm navbar-light bg-primary">
				<button aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#nav-content"
				        data-toggle="collapse" type="button">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<!-- Brand -->
				<a class="navbar-brand" href="javascript:void(0);">Logo</a>
				
				<!-- Links -->
				<div class="collapse navbar-collapse" id="nav-content">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0);">Link 1</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0);">Link 2</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0);">Link 3</a>
						</li>
					</ul>
				</div>
			</nav>
		
		</div>
		
		<div class="mt-3 mb-5">
			<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
				<button aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#nav-content"
				        data-toggle="collapse" type="button">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<!-- Brand -->
				<a class="navbar-brand" href="javascript:void(0);">Logo</a>
				
				<!-- Links -->
				<div class="collapse navbar-collapse" id="nav-content">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0);">Link 1</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0);">Link 2</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0);">Link 3</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	
	
	<!-- Tables  -->
	<div class="container-fluid example-container" data-category="tables">
		<h1>Tables</h1>
		
		<div class="mt-3 mb-5">
			<h3>Default table</h3>
			<div>
				<table class="table">
					<thead>
					<tr>
						<th>Header 1</th>
						<th>Header 2</th>
						<th>Header 3</th>
					</tr>
					</thead>
					<tfoot>
					<tr>
						<th>Footer 1</th>
						<th>Footer 2</th>
						<th>Footer 3</th>
					</tr>
					</tfoot>
					<tbody>
					<tr>
						<td>Cell</td>
						<td>Cell</td>
						<td>Cell</td>
					</tr>
					<tr>
						<td>Cell</td>
						<td>Cell</td>
						<td>Cell</td>
					</tr>
					<tr>
						<td>Cell</td>
						<td>Cell</td>
						<td>Cell</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		
		<div class="mt-3 mb-5">
			<h3>Table inverse</h3>
			<table class="table table-inverse">
				<thead>
				<tr>
					<th>Header 1</th>
					<th>Header 2</th>
					<th>Header 3</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Footer 1</th>
					<th>Footer 2</th>
					<th>Footer 3</th>
				</tr>
				</tfoot>
				<tbody>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				</tbody>
			</table>
		</div>
		
		
		<div class="mt-3 mb-5">
			<h3>Table striped</h3>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>Header 1</th>
					<th>Header 2</th>
					<th>Header 3</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Footer 1</th>
					<th>Footer 2</th>
					<th>Footer 3</th>
				</tr>
				</tfoot>
				<tbody>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				</tbody>
			</table>
		</div>
		
		
		<div class="mt-3 mb-5">
			<h3>Table with border</h3>
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>Header 1</th>
					<th>Header 2</th>
					<th>Header 3</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Footer 1</th>
					<th>Footer 2</th>
					<th>Footer 3</th>
				</tr>
				</tfoot>
				<tbody>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				</tbody>
			</table>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Table with hover</h3>
			<table class="table table-hover">
				<thead>
				<tr>
					<th>Header 1</th>
					<th>Header 2</th>
					<th>Header 3</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Footer 1</th>
					<th>Footer 2</th>
					<th>Footer 3</th>
				</tr>
				</tfoot>
				<tbody>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				</tbody>
			</table>
		</div>
		
		
		<div class="mt-3 mb-5">
			<h3>Table with Head with default color</h3>
			<table class="table">
				<thead class="thead-default">
				<tr>
					<th>Header 1</th>
					<th>Header 2</th>
					<th>Header 3</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Footer 1</th>
					<th>Footer 2</th>
					<th>Footer 3</th>
				</tr>
				</tfoot>
				<tbody>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				</tbody>
			</table>
		</div>
		
		
		<div class="mt-3 mb-5">
			<h3>Table with inverse Head color</h3>
			<table class="table">
				<thead class="thead-inverse">
				<tr>
					<th>Header 1</th>
					<th>Header 2</th>
					<th>Header 3</th>
				</tr>
				</thead>
				<tfoot>
				<tr>
					<th>Footer 1</th>
					<th>Footer 2</th>
					<th>Footer 3</th>
				</tr>
				</tfoot>
				<tbody>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	<!-- Pagination  -->
	<div class="container-fluid example-container" data-category="pagination">
		<h1>Pagination</h1>
		
		<div class="mt-3 mb-5">
			<nav>
				<ul class="pagination">
					<li class="page-item">
						<a aria-label="Previous" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">6</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">7</a>
					</li>
					<li class="page-item">
						<a aria-label="Next" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="mt-3 mb-5">
			<nav>
				<ul class="pagination">
					<li class="page-item">
						<a aria-label="Previous" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">3</a>
					</li>
					<li class="page-item active">
						<a class="page-link" href="javascript:void(0);">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">6</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">7</a>
					</li>
					<li class="page-item">
						<a aria-label="Next" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="mt-3 mb-5">
			<nav>
				<ul class="pagination pagination-lg">
					<li class="page-item">
						<a aria-label="Previous" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">6</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">7</a>
					</li>
					<li class="page-item">
						<a aria-label="Next" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="mt-3 mb-5">
			<nav>
				<ul class="pagination">
					<li class="page-item">
						<a aria-label="Previous" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">6</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">7</a>
					</li>
					<li class="page-item">
						<a aria-label="Next" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="mt-3 mb-5">
			<nav>
				<ul class="pagination pagination-sm">
					<li class="page-item">
						<a aria-label="Previous" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">6</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:void(0);">7</a>
					</li>
					<li class="page-item">
						<a aria-label="Next" class="page-link" href="javascript:void(0);">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	
	<!-- Jumbotron  -->
	<div class="container-fluid example-container" data-category="jumbotron">
		<h1>Jumbotron</h1>
		
		<div class="container">
			<div class="jumbotron">
				<h1>Container size jumboton</h1>
				<p>Think BIG with a Bootstrap Jumbotron!</p>
			</div>
		</div>
		
		<div>
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h1>Container fluid size jumbotron</h1>
					<p>Think BIG with a Bootstrap Jumbotron!</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Cards  -->
	<div class="container-fluid example-container" data-category="cards">
		<h1>Cards</h1>
		<div class="row mb-3">
			<div class="col-3">
				<div class="card card-body">
					<h4 class="card-title">Boot Polish</h4>
					<p class="card-text">Boot polish is a waxy paste, cream, or liquid used to polish, shine, and waterproof leather shoes or boots to extend
						the footwear's life, and restore, maintain and improve their appearance.</p>
					<a class="btn btn-primary" href="javascript:void(0);">More</a>
				</div>
			</div>
			
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Sun Gone</h4>
						<p class="card-text">Here are the top resources for all things related to the Sun.</p>
						<a class="card-link" href="javascript:void(0);">Sun Gone</a>
						<a class="card-link" href="javascript:void(0);">Still Gone</a>
					</div>
				</div>
			</div>
			
			<div class="col-3">
				<div class="card text-center">
					<div class="card-body">
						<h4 class="card-title">Sun Gone</h4>
						<h6 class="card-subtitle text-muted">Sun disappears!</h6>
					</div>
					<img alt="Photo of sunset" src="https://via.placeholder.com/300x150">
					
					<div class="card-body">
						<p class="card-text">The sun disappeared behind the horizon today. Experts claim it could be gone for good!</p>
						<a class="btn btn-primary" href="javascript:void(0);">Full Report</a>
					</div>
				
				</div>
			</div>
			
			<div class="col-3">
				<div class="card">
					<div class="card-header">
						Sponsored Content
					</div>
					<div class="card-body">
						<h4 class="card-title">Ugg Boots</h4>
						<p class="card-text">Best ugg boots on the planet. Free shipping, 24/7 customer service.</p>
					</div>
					<div class="card-footer">
						By boots.com
					</div>
				</div>
			</div>
		
		</div>
		<div class="row mb-3">
			<div class="col-12">
				<div class="card-group">
					<div class="card">
						<div class="card-header">Sun Gone</div>
						<div class="card-body">
							<p class="card-text">The top resources for all things related to the Sun.</p>
							<a class="card-link" href="javascript:void(0);">Sun Gone</a>
							<a class="card-link" href="javascript:void(0);">Still Gone</a>
						</div>
					</div>
					
					<div class="card">
						<div class="card-header">Sun Up</div>
						<div class="card-body">
							<p class="card-text">Looks like the Sun has returned. Here's
								<a class="card-link" href="javascript:void(0);">why</a>.</p>
						</div>
					</div>
				
				</div>
			</div>
		
		</div>
	</div>
	
	<!-- Tooltip  -->
	<div class="container-fluid example-container" data-category="tooltip">
		<h1>Tooltip</h1>
		
		<div class="mt-3 mb-5">
			<h3>Inline tooltip</h3>
			<p style="margin:40px;">Check out my
				<a data-placement="top" data-toggle="tooltip" href="javascript:void(0);" target="_blank" title="Build advanced layouts easily with CSS!">Grid tutorial</a>, as you never know when you
				might need it!</p>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>All position tooltip</h3>
			<button class="btn btn-primary" data-placement="top" data-toggle="tooltip" style="margin:20px;" title="Top shoes" type="button">
				Shoes
			</button>
			<button class="btn btn-info" data-placement="right" data-toggle="tooltip" style="margin:20px;" title="Right boot" type="button">
				Boots
			</button>
			<button class="btn btn-warning" data-placement="bottom" data-toggle="tooltip" style="margin:20px;" title="Bottom uggs" type="button">
				Ugg
			</button>
			<button class="btn btn-success" data-placement="left" data-toggle="tooltip" style="margin:20px;" title="Left sock" type="button">
				Socks
			</button>
		</div>
	
	</div>
	
	<!-- Popovers  -->
	<div class="container-fluid example-container" data-category="popovers">
		<h1>Popovers</h1>
		<div class="mt-3 mb-5">
			<h3>All popover position</h3>
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-toggle="popover" type="button">
				Popover on top
			</button>
			
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-toggle="popover" type="button">
				Popover on right
			</button>
			
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus
          sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-toggle="popover" type="button">
				Popover on bottom
			</button>
			
			<button class="btn btn-secondary" data-container="body" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-toggle="popover" type="button">
				Popover on left
			</button>
		</div>
	</div>
	
	<!-- Badges  -->
	<div class="container-fluid example-container" data-category="badges">
		<h1>Badges</h1>
		
		<div class="mt-3 mb-5">
			<h3>Badge heading</h3>
			<h1>Example heading
				<span class="badge badge-secondary">New</span>
			</h1>
			<h2>Example heading
				<span class="badge badge-secondary">New</span>
			</h2>
			<h3>Example heading
				<span class="badge badge-secondary">New</span>
			</h3>
			<h4>Example heading
				<span class="badge badge-secondary">New</span>
			</h4>
			<h5>Example heading
				<span class="badge badge-secondary">New</span>
			</h5>
			<h6>Example heading
				<span class="badge badge-secondary">New</span>
			</h6>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Button with inline badge</h3>
			<button class="btn btn-primary" type="button">
				Notifications
				<span class="badge badge-light">4</span>
			</button>
			<button class="btn btn-primary" type="button">
				Profile
				<span class="badge badge-light">9</span>
				<span class="sr-only">unread messages</span>
			</button>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Default badges</h3>
			<span class="badge badge-primary">Primary</span>
			<span class="badge badge-secondary">Secondary</span>
			<span class="badge badge-success">Success</span>
			<span class="badge badge-danger">Danger</span>
			<span class="badge badge-warning">Warning</span>
			<span class="badge badge-info">Info</span>
			<span class="badge badge-light">Light</span>
			<span class="badge badge-dark">Dark</span>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Badges pill</h3>
			<span class="badge badge-pill badge-primary">Primary</span>
			<span class="badge badge-pill badge-secondary">Secondary</span>
			<span class="badge badge-pill badge-success">Success</span>
			<span class="badge badge-pill badge-danger">Danger</span>
			<span class="badge badge-pill badge-warning">Warning</span>
			<span class="badge badge-pill badge-info">Info</span>
			<span class="badge badge-pill badge-light">Light</span>
			<span class="badge badge-pill badge-dark">Dark</span>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Badges with link</h3>
			<a class="badge badge-primary" href="javascript:void(0);">Primary</a>
			<a class="badge badge-secondary" href="javascript:void(0);">Secondary</a>
			<a class="badge badge-success" href="javascript:void(0);">Success</a>
			<a class="badge badge-danger" href="javascript:void(0);">Danger</a>
			<a class="badge badge-warning" href="javascript:void(0);">Warning</a>
			<a class="badge badge-info" href="javascript:void(0);">Info</a>
			<a class="badge badge-light" href="javascript:void(0);">Light</a>
			<a class="badge badge-dark" href="javascript:void(0);">Dark</a>
		</div>
	</div>
	
	<!-- Modals  -->
	<div class="container-fluid example-container" data-category="modals">
		<h1>Modals</h1>
		
		<div class="mt-3 mb-5 row">
			<button class="btn btn-primary btn-lg col-3 mr-3 ml-3" data-target="#flipFlop" data-toggle="modal" type="button">
				Default Modal
			</button>
			
			<button class="btn btn-primary btn-lg col-3 mr-3 ml-3" data-target="#largeShoes" data-toggle="modal" type="button">
				Large Modal
			</button>
			
			<button class="btn btn-primary btn-lg col-3 mr-3 ml-3" data-target="#smallShoes" data-toggle="modal" type="button">
				Small Modal
			</button>
			
			<!-- The modal -->
			<div aria-hidden="true" aria-labelledby="modalLabelSmall" class="modal fade" id="smallShoes" role="dialog" tabindex="-1">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						
						<div class="modal-header">
							<button aria-label="Close" class="close" data-dismiss="modal" type="button">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title" id="modalLabelSmall">Small Shoes</h4>
						</div>
						
						<div class="modal-body">
							Small shoes are typically worn by people with small feet.
						</div>
					
					</div>
				</div>
			</div>
			
			<!-- The modal -->
			<div aria-hidden="true" aria-labelledby="modalLabelLarge" class="modal fade" id="largeShoes" role="dialog" tabindex="-1">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						
						<div class="modal-header">
							<button aria-label="Close" class="close" data-dismiss="modal" type="button">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title" id="modalLabelLarge">Large Shoes</h4>
						</div>
						
						<div class="modal-body">
							Large shoes are usually avoided by people with small feet.
						</div>
					
					</div>
				</div>
			</div>
			
			<!-- The modal -->
			<div aria-hidden="true" aria-labelledby="modalLabel" class="modal fade" id="flipFlop" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button aria-label="Close" class="close" data-dismiss="modal" type="button">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title" id="modalLabel">Flip-flop</h4>
						</div>
						<div class="modal-body">
							A type of open-toed sandal.
						</div>
						<div class="modal-footer">
							<button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Alerts  -->
	<div class="container-fluid example-container" data-category="alerts">
		<h1>Alerts</h1>
		
		<div class="mt-3 mb-5">
			<h3>Default alert</h3>
			<div class="alert alert-success" role="alert">Success alert</div>
			<div class="alert alert-info" role="alert">Info alert</div>
			<div class="alert alert-warning" role="alert">Warning alert</div>
			<div class="alert alert-danger" role="alert">Danger alert</div>
			<div class="alert alert-light" role="alert">Light alert</div>
			<div class="alert alert-dark" role="alert">Dark alert</div>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Dismissible alert</h3>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button aria-label="Close" class="close" data-dismiss="alert" type="button">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>Congratulations!</strong> You successfully tied your shoelace!
			</div>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Dismissible alert with fade</h3>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<button aria-label="Close" class="close" data-dismiss="alert" type="button">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>Congratulations!</strong> You successfully tied your shoelace!
			</div>
		</div>
	</div>
	
	<!-- Progress bars  -->
	<div class="container-fluid example-container" data-category="progress-bars">
		<h1>Progress bars</h1>
		
		<div class="mt-3 mb-5">
			<h3>Default Progress bar</h3>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-success" role="progressbar" style="width: 25%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info" role="progressbar" style="width: 50%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar bg-warning" role="progressbar" style="width: 75%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar bg-danger" role="progressbar" style="width: 100%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar bg-light" role="progressbar" style="width: 40%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar bg-dark" role="progressbar" style="width: 80%"></div>
			</div>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Striped Progress bar </h3>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar progress-bar-striped" role="progressbar"
				     style="width: 10%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-striped bg-success" role="progressbar"
				     style="width: 25%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped bg-info" role="progressbar"
				     style="width: 50%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar progress-bar-striped bg-warning" role="progressbar"
				     style="width: 75%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar progress-bar-striped bg-danger" role="progressbar"
				     style="width: 100%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar progress-bar-striped bg-light" role="progressbar"
				     style="width: 40%"></div>
			</div>
			<br>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar progress-bar-striped bg-dark" role="progressbar"
				     style="width: 80%"></div>
			</div>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Animated Progress bar</h3>
			<div class="progress">
				<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar progress-bar-striped progress-bar-animated"
				     role="progressbar" style="width: 75%"></div>
			</div>
		</div>
	</div>
	
	<!-- List group  -->
	<div class="container-fluid example-container" data-category="list-group">
		<h1>List group</h1>
		
		<div class="mt-3 mb-5">
			<h3>Default list group</h3>
			<ul class="list-group">
				<li class="list-group-item">These Boots Are Made For Walking</li>
				<li class="list-group-item">Eleanor, Put Your Boots On</li>
				<li class="list-group-item">Puss 'n' Boots</li>
				<li class="list-group-item">Die With Your Boots On</li>
				<li class="list-group-item">Fairies Wear Boots</li>
			</ul>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>List group with pills</h3>
			<ul class="list-group">
				<li class="list-group-item justify-content-between">
					These Boots Are Made For Walking
					<span class="badge badge-secondary badge-pill">15</span>
				</li>
				<li class="list-group-item justify-content-between">
					Eleanor, Put Your Boots On
					<span class="badge badge-secondary badge-pill">38</span>
				</li>
				<li class="list-group-item justify-content-between">
					Puss 'n' Boots
					<span class="badge badge-secondary badge-pill">76</span>
				</li>
				<li class="list-group-item justify-content-between">
					Die With Your Boots On
					<span class="badge badge-secondary badge-pill">112</span>
				</li>
				<li class="list-group-item justify-content-between">
					Fairies Wear Boots
					<span class="badge badge-secondary badge-pill">181</span>
				</li>
			</ul>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Link List group</h3>
			<div class="list-group">
				<a class="list-group-item list-group-item-action" href="javascript:void(0);">These Boots Are Made For Walking</a>
				<a class="list-group-item list-group-item-action active" href="javascript:void(0);">Eleanor, Put Your Boots On</a>
				<a class="list-group-item list-group-item-action" href="javascript:void(0);">Puss 'n' Boots</a>
				<a class="list-group-item list-group-item-action" href="javascript:void(0);">Die With Your Boots On</a>
				<a class="list-group-item list-group-item-action" href="javascript:void(0);">Fairies Wear Boots</a>
			</div>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Button List group</h3>
			<div class="list-group">
				<button class="list-group-item list-group-item-action" type="button">These Boots Are Made For Walking</button>
				<button class="list-group-item list-group-item-action active" type="button">Eleanor, Put Your Boots On</button>
				<button class="list-group-item list-group-item-action" type="button">Puss 'n' Boots</button>
				<button class="list-group-item list-group-item-action" type="button">Die With Your Boots On</button>
				<button class="list-group-item list-group-item-action" type="button">Fairies Wear Boots</button>
			</div>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>List group with colors</h3>
			<div class="list-group">
				<a class="list-group-item list-group-item-action list-group-item-success" href="javascript:void(0);">These Boots Are Made For Walking</a>
				<a class="list-group-item list-group-item-action list-group-item-success active" href="javascript:void(0);">Eleanor, Put Your Boots On</a>
				<a class="list-group-item list-group-item-action list-group-item-info" href="javascript:void(0);">Puss 'n' Boots</a>
				<a class="list-group-item list-group-item-action list-group-item-warning" href="javascript:void(0);">Die With Your Boots On</a>
				<a class="list-group-item list-group-item-action list-group-item-danger" href="javascript:void(0);">Fairies Wear Boots</a>
				<a class="list-group-item list-group-item-action list-group-item-light" href="javascript:void(0);">Head Over Boots</a>
				<a class="list-group-item list-group-item-action list-group-item-dark" href="javascript:void(0);">Boot Scootin' Boogie</a>
			</div>
		</div>
	</div>
	
	<!-- Image thumbnails  -->
	<div class="container-fluid example-container" data-category="image-thumbnails">
		<h1>Image thumbnails </h1>
		
		<div>
			<img alt="Sample image" class="rounded" src="https://via.placeholder.com/100x100">
			<img alt="Sample image" class="rounded-circle" src="https://via.placeholder.com/100x100">
			<img alt="Sample image" class="img-thumbnail" src="https://via.placeholder.com/100x100">
			<img alt="Sample image" class="rounded-top" src="https://via.placeholder.com/100x100">
		</div>
	</div>
	
	<!-- Figures  -->
	<div class="container-fluid example-container" data-category="figures">
		<h1>Figures</h1>
		
		<div>
			<figure class="figure">
				<img alt="A generic square placeholder image with rounded corners in a figure." class="figure-img img-fluid rounded" src="https://via.placeholder.com/400x300">
				<figcaption class="figure-caption">A caption for the above image.</figcaption>
			</figure>
		</div>
		
		<div>
			<figure class="figure">
				<img alt="A generic square placeholder image with rounded corners in a figure." class="figure-img img-fluid rounded" src="https://via.placeholder.com/400x300">
				<figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
			</figure>
		</div>
	</div>
	
	<!-- Breadcrumbs  -->
	<div class="container-fluid example-container" data-category="breadcrumbs">
		<h1>Breadcrumbs</h1>
		
		<div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="javascript:void(0);">Home</a>
				</li>
				<li class="breadcrumb-item">
					<a href="javascript:void(0);">Fruit</a>
				</li>
				<li class="breadcrumb-item active">Pears</li>
			</ul>
		</div>
	</div>
	
	<!-- Carousel  -->
	<div class="container-fluid example-container" data-category="carousel">
		<h1>Carousel</h1>
		
		<div>
			<div class="carousel slide bg-inverse w-50 ml-auto mr-auto" data-ride="carousel" id="myCarousel">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
					<li data-slide-to="1" data-target="#myCarousel"></li>
					<li data-slide-to="2" data-target="#myCarousel"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img alt="First slide" class="d-block w-100" src="https://via.placeholder.com/1280x720">
						<div class="carousel-caption">
							<h3>First slide</h3>
							<p>This is the first slide.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img alt="Second slide" class="d-block w-100" src="https://via.placeholder.com/1280x720">
						<div class="carousel-caption">
							<h3>Second slide</h3>
							<p>This is the second slide.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img alt="Third slide" class="d-block w-100" src="https://via.placeholder.com/1280x720">
						<div class="carousel-caption">
							<h3>Third slide</h3>
							<p>This is the third slide.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" data-slide="prev" href="#myCarousel" role="button">
					<span aria-hidden="true" class="carousel-control-prev-icon"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" data-slide="next" href="#myCarousel" role="button">
					<span aria-hidden="true" class="carousel-control-next-icon"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	
	<!-- Close  -->
	<div class="container-fluid example-container" data-category="close">
		<h1>Close</h1>
		<button aria-label="Close" class="close" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	
	<!-- Code -->
	<div class="container-fluid example-container" data-category="code">
		<h1>Code</h1>
		<div class="mt-3 mb-5">
			<h3>Default code</h3>
			For example,
			<code>&lt;section&gt;</code> should be wrapped as inline.
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Code with pre tag</h3>
			<pre>
		        <code>
		          &lt;p&gt;Sample text here...&lt;/p&gt;
		          &lt;p&gt;And another line of sample text here...&lt;/p&gt;
		        </code>
			</pre>
		</div>
		
		
		<div class="mt-3 mb-5">
			<h3>Var tag</h3>
			<var>y</var> =
			<var>m</var>
			<var>x</var> +
			<var>b</var>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Kbd tag</h3>
			To switch directories, type
			<kbd>cd</kbd> followed by the name of the directory.
			<br> To edit settings, press
			<kbd>
				ctrl + ,
			</kbd>
		</div>
		
		<div class="mt-3 mb-5">
			<h3>Samp tag</h3>
			<samp>This text is meant to be treated as sample output from a computer program.</samp>
		</div>

	</div>
</div>


<script crossorigin="anonymous" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script>
    (function () {

        myHTMLInclude();

        function myHTMLInclude() {
            var z, i, a, file, xhttp;
            z = document.getElementsByTagName("*");
            for (i = 0; i < z.length; i++) {
                if (z[i].getAttribute("include-html")) {
                    a = z[i].cloneNode(false);
                    file = z[i].getAttribute("include-html");
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (xhttp.readyState == 4 && xhttp.status == 200) {
                            a.removeAttribute("include-html");
                            a.innerHTML = xhttp.responseText;
                            z[i].parentNode.replaceChild(a, z[i]);
                            myHTMLInclude();
                        }
                    }
                    xhttp.open("GET", file, true);
                    xhttp.send();
                    return;
                }
            }
        }

    })();
</script>
</body>
</html>
