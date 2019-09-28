<section class="category section bg-gray">
    <div class="container">
        <div class="section-header">  
            <h2 class="section-title">Contact</h2>
            <p>Informations sur les contacts</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
            <form class="" action="" method="POST">
                    <div class="form-group">
                            <label for="login">Identifiant</label>
                            <input class="form-control" type="text" name="login" value="" placeholder="email@email.com"/>
                    </div>
                    <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input class="form-control" type="password" name="password" value=""/>
                    </div>
                    <button class="btn btn-block btn-success" type="submit">Se connecter</button>
            </form>
                </div>
            <div class="col-lg-6">
                <p class="lead">Se connecter et gerer ses produits & services</p><br/>
                <ul class="list-unstyled" style="line-height: 2">
                    <li><span class="fa fa-check text-success"></span> Connectez vous.</li>
                    <li><span class="fa fa-check text-success"></span> Publiez vos produits & services</li>
                    <li><span class="fa fa-check text-success"></span> Et soyez visible dans plusieurs pays</li>
                </ul>
                <br/>
                <p><a href="<?= Tools::generateURL("subscribe");?>" class="">Vous n'avez pas de compte ? Inscrivez-vous.</a></p>
            </div>
        </div>  
    </div> 
</section>