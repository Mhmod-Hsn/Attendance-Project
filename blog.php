
<?php include('includes/header.php') ?>


<div id="blog-header" class="mt-5">
    <div class="container">
	    <div class="br-10 bg-l-gray px-md-5 px-3 py-3">

		    <div class="row flex-md-row flex-column-reverse">
			    <div class="col-md-8 col-sm-6 col-12 d-flex flex-column justify-content-center">
				    <h2 class="h3 font-weight-bolder  text-primary ">
					    أنت على بعد خطوات لنشر منتجاتك للعالم
				    </h2>
				    <p class=" font-weight-bold text-justify">
					    نساعدك على إنشاء متجرك الإلكتروني لزيادة مبيعاتك والوصول إلى المزيد
					    من العملاء والكثير من الأرباح
				    </p>
			    </div>
			    <div class="col-md-4 col-sm-6 col-12">
				    <img src="./images/blog.png" class="img-fluid d-block mx-auto mb-md-0 mb-4" alt="">
			    </div>
		    </div>
	    </div>
    </div>
</div>



<div class="container my-lg-5 my-md-4 my-3">
	<div class="row">
		<div class="col-md-8 col-sm-6 col-12">
			<nav aria-label="breadcrumb" class="">
				<ol class="breadcrumb bg-transparent">
					<li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
					<li class="breadcrumb-item active" aria-current="page">المدونة</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-4 col-sm-6 col-12">

			<form action="#" class="my-md-0 my-4" id="blog-search">
				<div class="input-group" >
					<i class="fas fa-search text-gray"></i>

					<input
						required
						type="text"
						name="q"
						class="form-control rounded-pill py-3"
						placeholder="ابحث في المدونة"
					>

				</div>
			</form>
		</div>
	</div>
</div>



<div id="blogs">
	<div class="container">
		<div class="row">
			<?php for ($i=0;$i<10;$i++){ ?>
				<div class="col-md-6 col-12">
					<div class="single-blog-small mb-md-5 mb-4  px-4">
						<a href="#">
							<img src="./images/blog-image.png" alt="" class="blog-image w-100 br-10 shadow img-fluid">
						</a>
						<div class="blog-text mt-4 pr-3">
							<a href="#" class="text-dark">
								<h5 class="blog-title font-weight-bolder">المتاجر الإحترافي من البداية حتى الإحتراف  SEO</h5>
							</a>
							<p class="blog-description text-gray">حينما يكون لك متجرًا إلكترونيًا، ترغب في الحصول على عملاء دائمين له
								وتعظيم أرباحه بقدر المستطاع وهو أمر طبيعي لأي تاجر</p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<div id="pagination" class="mt-5">
	<div class="container d-flex justify-content-center">

		<nav aria-label="...">
			<ul class="pagination ">
				<li class="page-item disabled">
					<span class="page-link">السابق</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item active" aria-current="page">
					<span class="page-link">
					2
					<span class="sr-only">(current)</span>
					</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">التالي</a>
				</li>
			</ul>
		</nav>

	</div>
</div>

<?php include('includes/footer.php') ?>




