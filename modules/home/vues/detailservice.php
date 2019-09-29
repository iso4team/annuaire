<?php
include_once HTML_DIR . "search.php";
?>
<!-- Latest Section Start -->
<section id="latest-jobs" class="section bg-gray">
    <div class="container">
        <div class="row">
            
            <?php
                //foreach ($product as $value) {
            ?>
                <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="jobs-latest">
                            <div class="img-thumb">
                                <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="job-details.html"><?= $service[0]['sv_name'];?></a></h3>
                                <p class="brand">MagNews</p>
                                <div class="tags">  
                                    <span><i class="lni-map-marker"></i> <?= $service[0]['ct_name'];?></span>  
                                    <span><i class="lni-user"></i>  <?= $service[0]['first_name'].''.$service[0]['last_name'];?></span> 
                                </div>
                                <div class="tag mb-3"><i class="lni-phone"></i> <?= $service[0]['phone'].' / '.$service[0]['email'];?></div>
                            </div>
                        </div>
                    </div>
            <?php
                //}
            ?> 
        </div>
            
        
        <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?= $service[0]['sv_description'];?></div>
</div>
        <div class="col-12 text-center mt-4">
                <a href="/annuaire/AllSvCategory/<?= $service[0]['id_sc'];?>" class="btn btn-common">Produits  de la m&ecirc;me cat&eacute;gorie</a>
            </div>
        
    </div>
</section>
<!-- Latest Section End --> 


