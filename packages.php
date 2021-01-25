<?php include('includes/header.php') ?>


<div id="page-header" class="py-lg-5 py-md-4 py-sm-3 py-2 ">
	<div class="container">
		<div class="text-center">
			<div class="section-header">
				<h2 class="h1 font-weight-bolder mb-sm-3 mt-5">
					باقات حلول
				</h2>
				<p class=" font-weight-bold text-gray">
					أسعار بسيطة وصادقة، لا توجد أي رسوم خفيّة
				</p>
			</div>


			<div id="packages-payment" class="mt-md-4 mt-3">
				<div class="custom-control custom-radio custom-control-inline">
					<input
						checked
						type="radio" id="payment-monthly" name="payment" value="monthly" class="custom-control-input">
					<label class="custom-control-label" for="payment-monthly">شهري</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="payment-yearly" name="payment" value="yearly" class="custom-control-input">
					<label class="custom-control-label" for="payment-yearly">سنوي</label>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="packages" class="py-lg-5 py-md-4 py-sm-3 py-2 ">
	<div class="container">


		<div class="row">
            <?php for ($i = 0; $i < 3; $i++) { ?>
				<div class="col-md-4 col-sm-6 col-12 no-gutters">
					<div class="single-package bg-white border shadow p-4 mt-4 overflow-hidden position-relative <?php if ($i===1) echo "special";?>">
						<div class="package-name text-center">
							<h3 class="btn btn-outline-secondary d-inline-block font-weight-bold text-center text-d-gray px-5 rounded-pill">
								الباقة الأساسية
							</h3>
						</div>

						<div class="package-price text-center">
							<span class="price monthly">100</span>
							<span class="price yearly">1100</span>
							<span class="currency text-gray">ر.س.</span>
							<span class="per monthly  text-gray">شهرياً</span>
							<span class="per  yearly  text-gray">سنوياً</span>
						</div>


						<ul class="features list-unstyled">
							<li class="active text-gray">متجر الكتروني متكامل بهويتك</li>
							<li class="active text-gray">تطبيقات جوال (Android, iOS) </li>
							<li class="active text-gray"> (عدد المنتجات (50</li>
							<li class="active text-gray"> عدد العملاء لا محدود</li>
							<li class="active text-gray"> عدد الطلبات لامحدود</li>
							<li class="active text-gray"> عمولة على المبيعات 0%</li>
							<li class="active text-gray"> إمكانيه إضافة أي طريقة توصيل</li>
							<li class="active text-gray"> (دعم للغتين ( العربية و الإنجليزية</li>
							<li class="active text-gray"> خدمة عملاء على مدار اليوم</li>
							<li class="active text-gray"> التقارير المتقدمة</li>
							<li class="active text-gray"> استعادة البيانات المحذوفة</li>
							<li class="active text-gray"> الظهور بمحركات البحث</li>
							<li class="active text-gray"> (الربط بالدفع الإلكتروني (مدى , فيزا , ماستر</li>
							<li class="active text-gray">Apple Payتفعيل</li>
							<li class="active text-gray"> خاصية العروض و الخصومات</li>
							<li class="active text-gray"> خاصية استقبال الإشعارات بالطلبات</li>
							<li class="inactive text-gray"> لوحة تحكم لإدارة المتجر</li>
							<li class="inactive text-gray"> انشاء (3) حسابات لفريق العمل</li>
							<li class="inactive text-gray"> سياسة الإستبدال و الإسترجاع</li>
							<li class="inactive text-gray"> تدريب على الاستخدام</li>
							<li class="inactive text-gray"> الحصول على التحديثات طوال فترة الاشتراك</li>
						</ul>


					</div>
				</div>
            <?php } ?>
		</div>
	</div>
</div>



<div id="what-are-you-waiting-for" class="py-md-1 py-sm-3 py-4 my-lg-1 my-4">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="./images/what-are-you-waiting-for.png" class="img-fluid my-4 my-md-2">
			</div>
			<div class="col-md-6 d-flex  justify-content-center  flex-column">
				<div class="h2 font-weight-bolder mb-2  mt-5">
					ماذا تنتظر بعد
				</div>
				<div class="h3 font-weight-bolder text-justify mb-md-4 mb-sm-3">
					ابدأ الان بإنشاء متجرك الإلكتروني
					واستمتع بالكثير من المميزات الرائعة
				</div>
				<div class="btn-actions mt-md-4 mt-sm-2 d-flex justify-content-end">
					<a href="#" class="btn btn-primary font-weight-bold px-4 rounded-pill min-width-btn shadow">إبدأ الآن</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="requests" class="bg-primary py-md-5 py-4 my-md-5 my-3" >
	<div class="container">
		<div class="text-center text-white ">
			<p class="h3 font-weight-bolder">
				لطلبات البرمجة الخاصة
			</p>
			<p class="h3 font-weight-bolder">
				نوفر لك إحتياجتك الخاصة لإنشاء متجر إلكتروني متكامل
			</p>
			<a href="#" class="font-weight-bold btn btn-outline-secondary rounded-pill text-white px-5 mt-md-4 mt-3" >إتصل بنا</a>

		</div>
	</div>
</div>


<div id="shipment"  class="py-md-1 py-sm-3 py-4 my-lg-1 my-4">
	<div class="container">
		<div class="section-header text-center">
			<h2 class="h1 font-weight-bolder mb-sm-3 mt-5">
				الكثير من خيارات الشحن
			</h2>
			<p class=" font-weight-bold text-gray">
				نوفر لعملائنا العديد من خيارات الشحن بأفضل الأسعار المتاحة لتسهيل الوصول لعملائك
			</p>
		</div>

		<div class="shippers mt-md-5 mt-4">
			<div class="row">

				<div class="col-md-4 col-sm-6 col-12 mb-4">
					<div class="single-shipper shadow border p-3">
						<img src="./images/tard.png" class="img-fluid d-block mx-auto mt-4">
						<div class="shipment-details mt-md-5 mt-4 font-weight-bold text-gray">
							<p>تكلفة التوصيل : 28 ريال لأول 15 كيلو</p>
							<p class="mb-1">قائمة المدن المتاحة
								<a class="" href="#">اضغط هنا</a>
							</p>
							<p class="mb-1">الدفع عند الإستلام
								<a class="" href="#">اضغط هنا</a>
							</p>
						</div>
					</div>
				</div>


				<?php for ($i=0;$i<5;$i++){ ?>

					<div class="col-md-4 col-sm-6 col-12 mb-4">
						<div class="single-shipper shadow border p-3">
							<img src="./images/aramex.png" class="img-fluid d-block mx-auto mt-4">
							<div class="shipment-details mt-md-5 mt-4 font-weight-bold text-gray">
								<p>تكلفة التوصيل : 28 ريال لأول 15 كيلو</p>
								<p class="mb-1">قائمة المدن المتاحة
									<a class="" href="#">اضغط هنا</a>
								</p>
								<p class="mb-1">الدفع عند الإستلام
									<a class="" href="#">اضغط هنا</a>
								</p>
							</div>
						</div>
					</div>

				<?php } ?>
			</div>
		</div>
	</div>
</div>


<div id="payment"  class="py-md-1 py-sm-3 py-4 my-lg-1 my-4">
	<div class="container">
		<div class="section-header text-center">
			<h2 class="h1 font-weight-bolder mb-sm-3 mt-5">
				طرق الدفع المتاحة لدينا
			</h2>
		</div>

		<div class="payment-methods mt-md-5 mt-4">
			<div class="row">

				<?php for ($i=0;$i<4;$i++){ ?>

					<div class="col-md-3 col-sm-6 col-12 mb-4">
						<div class="single-payment-method d-flex align-items-center justify-content-center  p-3">
							<img src="./images/pay-delivery.png" class="img-fluid d-block mx-auto mt-4">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-12 mb-4">
						<div class="single-payment-method d-flex align-items-center justify-content-center  p-3">
							<img src="./images/paypal.png" class="img-fluid d-block mx-auto mt-4">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-12 mb-4">
						<div class="single-payment-method d-flex align-items-center justify-content-center  p-3">
							<img src="./images/Apple_Pay.png" class="img-fluid d-block mx-auto mt-4">
						</div>
					</div>

				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>




