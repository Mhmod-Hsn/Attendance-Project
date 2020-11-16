
<?php include('includes/header.php') ?>


<?php include('includes/blog/hero.php') ?>



<div id="blog" class="py-lg-10 py-md-8 py-5">
    <div class="container">
        <div class="row">
	        <div class="col-md-8 order-md-0 order-1">
		        <div class="row">
                    <?php for ($i=0;$i<7;$i++){ ?>
						<?php if ($i<2) {?>
							<div class="col-12">
                                <?php include('includes/blog/blogs.php') ?>
							</div>
                        <?php } ?>
                        <?php  if ($i>2)  {?>
		                    <div class="col-6">
                                <?php include('includes/blog/blogs.php') ?>
		                    </div>
                        <?php } ?>

                    <?php } ?>
		        </div>


		        <div class="mt-3" aria-label="Page navigation">
			        <ul class="pagination justify-content-center">
				        <li class="page-item disabled">
					        <a class="page-link" href="#" tabindex="-1">
						        <i class="fas fa-arrow-right"></i>
					        </a>
				        </li>
				        <li class="page-item active"><a class="page-link" href="#">1</a></li>
				        <li class="page-item"><a class="page-link" href="#">2</a></li>
				        <li class="page-item disabled">
					        <a class="page-link" href="#" tabindex="-1">...</a>
				        </li>
				        <li class="page-item"><a class="page-link" href="#">3</a></li>
				        <li class="page-item">
					        <a class="page-link" href="#">
						        <i class="fas fa-arrow-left"></i>
					        </a>
				        </li>
			        </ul>
		        </div>

	        </div>
	        <div class="col-md-4 order-md-1 order-0">
                <?php include('includes/blog/related.php') ?>
	        </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php') ?>




