<?php
include_once HTML_DIR . "search.php";
?>
<!-- Category Section Start -->
<section class="category section bg-gray">
    <div class="container">
        <div class="section-header">  
            <h2 class="section-title">Toutes les  categories</h2>
            <p>Une large liste de categories de produits et de services</p>
        </div>
        <div class="row">   
            
            
            <?php
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
            ?> 
        </div>
    </div>
</section>
<!-- Category Section End -->  

<!-- Latest Section Start -->
<section id="latest-jobs" class="section bg-gray">
    <div class="container">
        <div class="section-header">  
            <h2 class="section-title">Les produits et services, les plus récents</h2>
            <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p-->       
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="#">Huissier</a></h3>
                        <p class="brand">MagNews</p>
                        <div class="tags">  
                            <span><i class="lni-map-marker"></i> Dakar</span>  
                            <span><i class="lni-user"></i>  John Smith</span> 
                        </div>
                        <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                        <span class="full-time">Plus de détails</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="#">Plombier</a></h3>
                        <p class="brand">Hunter Inc.</p>
                        <div class="tags">  
                            <span><i class="lni-map-marker"></i> Dakar</span>  
                            <span><i class="lni-user"></i>  John Smith</span> 
                        </div>
                        <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                        <span class="full-time">Plus de détails</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="#">Artisan</a></h3>
                        <p class="brand">MagNews</p>
                        <div class="tags">  
                            <span><i class="lni-map-marker"></i> Tivaouane</span>  
                            <span><i class="lni-user"></i>  John Smith</span> 
                        </div>
                        <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                       <span class="full-time">Plus de détails</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="#">UX Designer</a></h3>
                        <p class="brand">AmazeSoft</p>
                        <div class="tags">  
                            <span><i class="lni-map-marker"></i> Saint-Louis</span>  
                            <span><i class="lni-user"></i>  John Smith</span> 
                        </div>
                        <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                        <span class="full-time">Plus de détails</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="#">Digital Marketer</a></h3>
                        <p class="brand">Bingo</p>
                        <div class="tags">  
                            <span><i class="lni-map-marker"></i> Dakar</span>  
                            <span><i class="lni-user"></i>  John Smith</span> 
                        </div>
                        <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                        <span class="full-time">Plus de détails</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="jobs-latest">
                    <div class="img-thumb">
                        <img src="<?= CSS_DIR . 'assets/'; ?>img/features/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3><a href="#">Web Developer</a></h3>
                        <p class="brand">MagNews</p>
                        <div class="tags">  
                            <span><i class="lni-map-marker"></i> Thiès</span>  
                            <span><i class="lni-user"></i>  John Smith</span> 
                        </div>
                        <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                        <span class="full-time">Plus de détails</span>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="/annuaire/AllElement" class="btn btn-common">Tous les services et produits</a>
            </div>
        </div>
    </div>
</section>
<!-- Latest Section End -->
