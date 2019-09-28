<section class="category section bg-gray">
    <div class="container">
        <div class="section-header">  
            <h2 class="section-title">Inscription</h2>
            <p>Creation de compte</p>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <?php
                if (isset($resul) && !empty($resul)) {
                    ?>
                    <div class="alert <?= ($resul['code'] == "111") ? 'alert-danger' : 'alert-success'; ?>"><?= $resul['message']; ?></div>
                    <?php
                }
                ?>
                <form class="" action="" method="POST">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label for="prenom">Prénom</label>
                            <input class="form-control" type="text" name="prenom" value="" placeholder="Votre Prénom" required/>
                        </div>
                        <div class="col-lg-6">
                            <label for="nom">Nom</label>
                            <input class="form-control" type="text" name="nom" value="" placeholder="Votre Prénom" required/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" value="" placeholder="Votre email" required/>
                        </div>
                        <div class="col-lg-6">
                            <label for="telephone">Telephone</label>
                            <input class="form-control" type="number" name="telephone" value="" placeholder="221XXXXXXXXX" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Adresse</label>
                        <textarea class="form-control" name="adresse" value="" rows="5" required></textarea>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label for="password">Mot de passe</label>
                            <input class="form-control" type="password" name="password" value="" required/>
                        </div>
                        <div class="col-lg-6">
                            <label for="confirm_password">Confirmez le mot de passe</label>
                            <input class="form-control" type="password" name="confirm_password" value="" required/>
                        </div>
                    </div>
                    <button class="btn btn-block btn-success" type="submit">Valider</button>
                </form>
            </div>
            <div class="col-lg-5">
                <p class="lead">Inscrivez vous <span class="text-success">GRATUITEMENT</span></p><br/>
                <ul class="list-unstyled" style="line-height: 2">
                    <li><span class="fa fa-check text-success"></span> Juste quelques informations à fournir.</li>
                    <li><span class="fa fa-check text-success"></span> Confirmez votre email.</li>
                    <li><span class="fa fa-check text-success"></span> <a href="login" class="">Connectez vous.</a></li>
                    <li><span class="fa fa-check text-success"></span> Publiez vos produits & services</li>
                    <li><span class="fa fa-check text-success"></span> Et soyez visible dans plusieurs pays</li>
                </ul>
                <br/>
                <p><a href="<?= Tools::generateURL("login"); ?>" class="">Vous avez déjà un compte ? Connectez vous.</a></p>
            </div>
        </div>
    </div>  
</div> 
</section>