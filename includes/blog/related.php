<div id="related-blogs" class="card">
    <div class="card-body">

        <h4 class="related-blogs-title text-primary mb-4 text-center font-weight-bold">مقالات ذات صله</h4>

        <?php for ($i=0;$i<5;$i++) {?>
            <div class="media py-2 my-2 border-bottom">
                <img class="mr-3 img-fluid" src="../../images/blog-img.png" >
                <div class="media-body">
                    <span class="counter"><?php echo $i+1?></span>

                    <a href="#" class="text-primary h5">
                        أساسيات اختيار العمالة المناسبة
                    </a>

                    <div class="text-right">
                        21/11/2020 <i class="fas fa-calendar-alt text-secondary"></i>
                    </div>
                </div>
            </div>

        <?php } ?>


        </div>
    </div>
