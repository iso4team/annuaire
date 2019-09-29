<?php
include_once HTML_DIR . "search.php";
?>
<!-- Latest Section Start -->
<section id="latest-jobs" class="section bg-gray">
    <div class="container">
        <div class="section-header">  
            <?php 
            $nb_pro  = count($serv);
            $action =  '('.$nb_pro.') services de la categorie '.$current_category;
            ?>
            <h2 class="section-title"> <?= $action;?></h2>      
        </div>
        <div class="row">
            
            <?php
                
                foreach ($serv as $value) {
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
        </div>
    </div>
</section>
<!-- Latest Section End --> 


