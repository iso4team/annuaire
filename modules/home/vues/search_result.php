<?php
include_once HTML_DIR . "search.php";
print_r($result);
print_r($services);
echo 'mot clé = '.$motCle;
?>
<!-- Latest Section Start -->
<section id="latest-jobs" class="section bg-gray">
    <div class="container">
        <div class="section-header">  
            <h2 class="section-title">R&eacute;sultat de la recherche</h2>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>       
        </div>
        <div class="row">
            
            
            <?php
                foreach ($services as $value) {
            ?>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="jobs-latest">
                        <div class="img-thumb">
                            <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="job-details.html"><?= $value['sv_name'];?></a></h3>
                            <p class="brand">MagNews</p>
                            <div class="tags">  
                                <span><i class="lni-map-marker"></i> <?= $value['ct_name'];?></span>  
                                <span><i class="lni-user"></i>  <?= $value['first_name'].''.$value['last_name'];?></span> 
                            </div>
                            <div class="tag mb-3"><i class="lni-phone"></i> <?= $value['phone'].' / '.$value['email'];?></div>
                            <span class="full-time">Plus de détails</span>
                        </div>
                    </div>
                </div>
                    <?php
            }
            ?> 
            <div class="col-12 text-center mt-4">
                <a href="job-page.html" class="btn btn-common">Services de la m&ecirc;me cat&eacute;gorie</a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Section End -->

<!-- Category Section Start -->
<section class="category section bg-gray">
    <div class="container">
        <div class="section-header">  
            <h2 class="section-title">Les Categories</h2>
            <p>Most popular categories of portal, sorted by popularity</p>
        </div>
        <div class="row">   
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="browse-jobs.html">
                    <div class="icon bg-color-1">
                        <i class="lni-home"></i>
                    </div>
                    <h3>Finance</h3>
                    <p>(4286 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="browse-jobs.html">
                    <div class="icon bg-color-2">
                        <i class="lni-world"></i>
                    </div>
                    <h3>Sale/Markting</h3>
                    <p>(2000 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="browse-jobs.html">
                    <div class="icon bg-color-3">
                        <i class="lni-book"></i>
                    </div>
                    <h3>Education/Training</h3>
                    <p>(1450 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category border-right-0">
                <a href="browse-jobs.html">
                    <div class="icon bg-color-4">
                        <i class="lni-display"></i>
                    </div>
                    <h3>Technologies</h3>
                    <p>(5100 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category border-bottom-0">
                <a href="browse-jobs.html">
                    <div class="icon bg-color-5">
                        <i class="lni-brush"></i>
                    </div>
                    <h3>Art/Design</h3>
                    <p>(5079 jobs)</p>
                </a>
            </div>            
            <div class="col-lg-3 col-md-6 col-xs-12 f-category border-bottom-0">
                <a href="browse-jobs.html">
                    <div class="icon bg-color-6">
                        <i class="lni-heart"></i>
                    </div>
                    <h3>Healthcare</h3>
                    <p>(3235 jobs)</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category border-bottom-0">
                <a href="browse-jobs.html">
                    <div class="icon bg-color-7">
                        <i class="lni-funnel"></i>
                    </div> 
                    <h3>Science</h3>
                    <p>(1800 jobs)</p> 
                </a>
            </div>            
            <div class="col-lg-3 col-md-6 col-xs-12 f-category border-right-0 border-bottom-0">
                <a href="browse-jobs.html">
                    <div class="icon bg-color-8">
                        <i class="lni-cup"></i>
                    </div>
                    <h3>Food Services</h3>
                    <p>(4286 jobs)</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Category Section End -->  


