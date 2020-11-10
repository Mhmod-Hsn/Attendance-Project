<div id="team" class="py-lg-7 py-md-6 py-5">
    <div class="container">
        <h3 class="text-primary text-center mb-lg-6 mb-md-5 mb-4">
	        فريق عملنا هو محور كل ما نقوم به فنجاج مكتبنا قائم علي جهودهم ومواهبهم.
	        يتميز العمل في الشركة بعلاقة طويلة الأمد مبنية على الثقة المتبادلة، والتي تعكس
	        بشكل مباشر قيم الشركة والاتساق مع مبادئها.
	        <br>
	        <br>
	        يعتمد نجاح الشركة على موظفيها وعمالها. تستند رؤية الشركة إلى نمو قوة العمل
	        بما يشمل كل من موظفيها والعمالة التابعة لها، وهو أمر متضمن بكل الطرق في أهداف
	        الشركة ويتماشى مع قيم الشركة.
        </h3>


        <div id="team-members" class="row">
        <?php for ($i=0;$i<7;$i++){ ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3 mx-auto">

                <div class="single-team-member bg-cover"
                     style="background-image: url('../../images/team1.png')"

                     data-toggle="modal" data-target="#teamMemberModal"
                     data-image="../../images/team1.png"
                     data-name="عادل العامري"
                     data-position="المدير العام"
                     data-nationality="عراقي"
                     data-phone="+92-313-5404155"
                     data-whatsapp="+92-301-5349627"
                     data-email="adil@adilelameeri.com"
                >
                    <div class="overlay d-flex flex-column justify-content-end align-items-baseline px-3">
                        <h6 class=" responsive-paragraph text-white mb-0">عادل العامري</h6>
                        <p class=" my-1 responsive-paragraph text-secondary mb-0">المدير العام</p>
                    </div>
                </div>

            </div>
        <?php } ?>



        </div>

    </div>
</div>


<div class="modal fade " id="teamMemberModal" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<img class="image img-fluid d-block mx-auto mb-4 mb-md-0" src="" alt="">
					</div>
					<div class="col-md-8">
						<div class="d-flex flex-column align-items-between text-md-left text-center ">
							<div class="">
								<h3 class="name text-primary"></h3>
								<h5 class="position text-secondary"></h5>
							</div>
							<div class="mt-4">
								<p>
									الجنسية:
									<span class="nationality"></span>
								</p>
								<p>
									رقم الهاتف:
									<span class="phone"></span>
								</p>
								<p>
									الواتس اب:
									<span class="whatsapp"></span>
								</p>
								<p>
									البريد الالكتروني:
									<span class="email"></span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
