<?php
include_once HTML_DIR . "search.php";
print_r($services);
?>
<!-- Latest Section Start -->
<section id="latest-jobs" class="section bg-gray">
    <div class="container">
        <div class="section-header">  
            <?php 
            $nb_sv = count($services);
            $nb_pro  = count($products);
            $total = $nb_sv+$nb_pro;
            $action =  $nb_pro.' services et produits';
            ?>
            <h2 class="section-title">R&eacute;sultat de la recherche: <?= $action;?></h2>
            
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
                            <h3><a href="job-details.html><?= $value['sv_name'];?></a></h3>
                            <p class="brand">MagNews</p>
                            <div class="tags">  
                                <span><i class="lni-map-marker"></i> <?= $value['ct_name'];?></span>  
                                <span><i class="lni-user"></i>  <?= $value['first_name'].''.$value['last_name'];?></span> 
                            </div>
                            <div class="tag mb-3"><i class="lni-phone"></i> <?= $value['phone'].' / '.$value['email'];?></div>
                            <a href="/annuaire/details/service/<?= $value['id_sv'];?>"><span class="full-time">Plus de détails</span></a>
                        </div>
                    </div>
                </div>
                    <?php
                }
                
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
            <div class="col-12 text-center mt-4">
                <a href="job-page.html" class="btn btn-common">&Eacute;l&eacute;ments  de la m&ecirc;me cat&eacute;gorie</a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Section End -->


