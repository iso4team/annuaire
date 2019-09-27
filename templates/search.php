<div class="container-fluid hero-area">      
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-xs-12">
            <div class="contents">
                <h2 class="head-title">Trouver un professionnel, un service ou un produit.</h2>
                <p>Des milliers de professionnels à votre disposition.</p>
                <div class="job-search-form">
                    <form action="<?= Tools::generateURL("");?>" method="POST">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Mot cle" name="keyword">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="search-category-container">
                                        <label class="styled-select">
                                            <select name="type" id="type" onchange="filtreCategories()">
                                                <option value="t">Vous cherchez ?</option>
                                                <option value="s">Service</option>
                                                <option value="p">Produit</option>
                                            </select>
                                        </label>
                                    </div>
                                    <i class="lni-map-marker"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="search-category-container">
                                        <label class="styled-select">
                                            <select name="local" >
                                                <option value="none">Lieux</option>
                                                <?php
                                                    foreach ($citys as $c) {
                                                        ?>
                                                        <option value="<?= $c['id']; ?>"><?= $c['ct_name']; ?></option>
                                                        <?php
                                                    }
                                                ?>
                                            </select>
                                        </label>
                                    </div>
                                    <i class="lni-map-marker"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <div class="search-category-container">
                                        <label class="styled-select">
                                            <select name="category">
                                                <option>Toutes les catégories</option>
                                                <?php
                                                if (!empty($service_categories)) {?>
                                                <optgroup label="Catégories Services"id="c_services">
                                                <?php  
                                                    foreach ($service_categories as $s_c) {
                                                        ?>
                                                        <option value="<?= $s_c['id']; ?>"><?= $s_c['sc_name']; ?></option>
                                                        <?php
                                                    }
                                                } ?>
                                                <?php
                                                if (!empty($product_categories)) {?>
                                                <optgroup label="Catégories Produits" id="c_produits">
                                                <?php  
                                                    foreach ($product_categories as $p_c) {
                                                        ?>
                                                        <option value="<?= $p_c['id']; ?>"><?= $p_c['pc_name']; ?></option>
                                                        <?php
                                                    }
                                                } ?>
                                                </optgroup>
                                            </select>
                                                <?php
                                                /**
                                                if (!empty($product_categories)) {
                                                    foreach ($product_categories as $p_c) {
                                                        ?>
                                                        <option value="<?= $p_c['id']; ?>"><?= $p_c['pc_name']; ?></option>
                                                        <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <option>Finance</option>
                                                    <option>IT & Engineering</option>
                                                    <option>Education/Training</option>
                                                    <option>Art/Design</option>
                                                    <option>Sale/Markting</option>
                                                    <option>Healthcare</option>
                                                    <option>Science</option>                              
                                                    <option>Food Services</option>
                                                    <?php
                                                }**/
                                                ?>

                                            <!--/select-->
                                        </label>
                                    </div>
                                    <i class="lni-layers"></i>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-6 col-xs-12">
                                <button type="submit" class="button"><i class="lni-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>  