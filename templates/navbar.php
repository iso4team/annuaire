<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
        <div class="theme-header clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                </button>
                <a href="<?= Tools::generateURL(""); ?>" class="navbar-brand"><img src="<?= CSS_DIR . 'assets/'; ?>img/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= Tools::generateURL(""); ?>">
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Tools::generateURL("qui-sommes-nous"); ?>">
                            Qui sommes nous ?
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Tools::generateURL("services"); ?>">
                            Nos services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Tools::generateURL("contact"); ?>">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Tools::generateURL("login"); ?>">Se connecter</a>
                    </li>
                    <li class="button-group">
                        <a href="<?= Tools::generateURL("subscribe"); ?>" class="button btn btn-common">Devenir membre</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu" data-logo="<?= CSS_DIR . 'assets/'; ?>img/logo-mobile.png"></div>
</nav>