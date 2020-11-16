<div id="services-page" class="py-lg-7 py-md-6 py-5">
    <div class="container">


        <div id="services-group" class="row">
        <?php for ($i=0;$i<20;$i++){ ?>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3 position-relative" >

                <div class="single-service bg-cover" id="services-<?php echo $i?>" data-toggle="collapse" data-target="#collapse-<?php echo $i?>" aria-expanded="true" aria-controls="collapse-<?php echo $i?>" style="background-image: url('../../images/offers-1.png')" >
                    <div class="overlay  p-3 d-flex flex-column  align-items-center">
	                    <span class="arrows">

	                    </span>
                        <h5 class="text-white text-center">قطاع الهندسة والتكنولوجيا <?php echo $i+1?></h5>
                    </div>
                </div>
            </div>


	        <div class="col-xl-6 col-lg-8 col-md-6 col-sm-12 collapse"  id="collapse-<?php echo $i?>"  data-parent="#services-group"  aria-labelledby="procedure-<?php echo $i?>">
		        <div class="row">
			        <div class="col-md-6 col-12 single-sub-service">سائقين معدات ثقيلة</div>
			        <div class="col-md-6 col-12 single-sub-service">نجار خرسانة</div>
			        <div class="col-md-6 col-12 single-sub-service">كهربائي</div>
			        <div class="col-md-6 col-12 single-sub-service">حداد خرسانة</div>
			        <div class="col-md-6 col-12 single-sub-service">عمال المقاولات</div>
			        <div class="col-md-6 col-12 single-sub-service">أسقف معلقة وأعمال ديكور</div>
			        <div class="col-md-6 col-12 single-sub-service">شيف حلواني</div>
			        <div class="col-md-6 col-12 single-sub-service">لحام</div>
			        <div class="col-md-6 col-12 single-sub-service">نجار ديكور وموبيليا</div>
			        <div class="col-md-6 col-12 single-sub-service">شيف جزار</div>
			        <div class="col-md-6 col-12 single-sub-service">فني تبريد وتكييف</div>
			        <div class="col-md-6 col-12 single-sub-service">مدربين بناء أجسام</div>
			        <div class="col-md-6 col-12 single-sub-service">شيف خباز</div>
			        <div class="col-md-6 col-12 single-sub-service">أمن وحراسة</div>
			        <div class="col-md-6 col-12 single-sub-service">سائقين معدات خفيفة</div>
			        <div class="col-md-6 col-12 single-sub-service">معماري</div>
			        <div class="col-md-6 col-12 single-sub-service">عمال مطبخ</div>
			        <div class="col-md-6 col-12 single-sub-service">سيراميك ورخام</div>
		        </div>
	        </div>

        <?php } ?>



        </div>

    </div>
</div>
