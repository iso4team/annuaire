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
                                            <select name="type">
                                                <option value="">Vous cherchez ?</option>
                                                <option value="service">Service</option>
                                                <option value="produit">Produit</option>
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
                                            <select name="local">
                                                <option value="none">Lieux</option>
                                                <option value="none">New York</option>
                                                <option value="none">California</option>
                                                <option value="none">Washington</option>
                                                <option value="none">Birmingham</option>
                                                <option value="none">Chicago</option>
                                                <option value="none">Phoenix</option>
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
                                                <option>Toutes les Categories</option>
                                                <?php
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
                                                }
                                                ?>

                                            </select>
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