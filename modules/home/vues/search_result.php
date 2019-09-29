<?php
include_once HTML_DIR . "search.php";
?>
<!-- Latest Section Start -->
<section id="latest-jobs" class="section bg-gray">
    <div class="container">
        <div class="section-header">  
            <?php 
            $nb_sv = count($services);
            $nb_pro  = count($products);
            $action = ($result['type']=="s") ? $nb_sv.' Services trouvé(s)' : $nb_pro.' produits trouvé(s)';
            ?>
            <h2 class="section-title">R&eacute;sultat de la recherche: <?= $action;?></h2>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>       
        </div>
        <div class="row">
            
            
            <?php
            if($result['type']=="s"){
                foreach ($services as $value) {
            ?>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="jobs-latest">
                        <div class="img-thumb">
                            <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="job-details.html><?= $value['sv_name'];?></a></h3>
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
            }elseif ($result['type']=="p") {
                
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
                                <span class="full-time">Plus de détails</span>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?> 
            <div class="col-12 text-center mt-4">
                <a href="job-page.html" class="btn btn-common">&Eacute;l&eacute;ments  de la m&ecirc;me cat&eacute;gorie</a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Section End -->

<!-- Category Section Start -->
<section class="category section bg-gray">
    <div class="container">
        <div class="section-header">  
            <h2 class="section-title">Les Categories <?= ($result['type']=="s") ? ' de Services' : ' de produits ';?></h2>
            <p>Most popular categories of portal, sorted by popularity</p>
        </div>
        <div class="row">
            
            
            <?php
            if($result['type']=="s"){
                foreach ($service_categories_page as $value) {
            ?>
                <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="/annuaire/AllSvCategory/<?= $value['sc_id'];?>">
                    <div class="icon bg-color-1">
                        <i class="lni-home"></i>
                    </div>
                    <h3><?= $value['sc_name'];?></h3>
                    <p>(<?= $value['nb_sv_category'];?> produits)</p>
                </a>
            </div>
                    <?php
                }
            }elseif ($result['type']=="p") {
                
                foreach ($product_categories_page as $value) {
            ?>
            <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                <a href="/annuaire/AllProCategory/<?= $value['pc_id'];?>">
                    <div class="icon bg-color-1">
                        <i class="lni-home"></i>
                    </div>
                    <h3><?= $value['pc_name'];?></h3>
                    <p>(<?= $value['nb_pro_category'];?> produits)</p>
                </a>
            </div>
            <?php
                }
            }
            ?> 
        </div>
    </div>
</section>
<!-- Category Section End -->  


