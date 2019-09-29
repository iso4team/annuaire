<?php
include_once HTML_DIR . "search.php";
?>
<!-- Latest Section Start -->
<section id="latest-jobs" class="section bg-gray">
    <div class="container">
        <div class="section-header">  
            <?php 
            print_r($products);
            $nb_pro  = count($products);
            $action =  '('.$nb_pro.') produits de la categorie '.$current_category;
            ?>
            <h2 class="section-title"> <?= $action;?></h2>      
        </div>
        <div class="row">
            
            <?php
                
                foreach ($products as $value) {
            ?>
                <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="jobs-latest">
                            <div class="img-thumb">
                                <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="job-details.html"><?= $value['pro_name'];?></a></h3>
                                <p class="brand">MagNews</p>
                                <div class="tags">  
                                    <span><i class="lni-map-marker"></i> <?= $value['ct_name'];?></span>  
                                    <span><i class="lni-user"></i>  <?= $value['first_name'].''.$value['last_name'];?></span> 
                                </div>
                                <div class="tag mb-3"><i class="lni-phone"></i> <?= $value['phone'].' / '.$value['email'];?></div>
                                <a href="/annuaire/details/product/<?= $value['id_pro'];?>"><span class="full-time">Plus de détails</span></a>
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


