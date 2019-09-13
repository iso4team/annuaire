
  
  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area"> 
      <!-- Navbar Start -->
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
              <a href="index.html" class="navbar-brand"><img src="<?= CSS_DIR.'assets/'; ?>img/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
              <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                  <a class="nav-link" href="/annuaire">
                    Accueil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/annuaire/qui-sommes-nous">
                    Qui sommes nous ?
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/annuaire/services">
                    Nos services
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/annuaire/contact">
                    Contact
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.html">Se connecter</a>
                </li>
                <li class="button-group">
                  <a href="post-job.html" class="button btn btn-common">Devenir membre</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="mobile-menu" data-logo="<?= CSS_DIR.'assets/'; ?>img/logo-mobile.png"></div>
      </nav>
      <!-- Navbar End -->
    
      <div class="container">      
        <div class="row space-100 justify-content-center">
          <div class="col-lg-10 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Trouver un professionnel, un service ou un produits.</h2>
              <p>Des centaines de professionnels à votre disposition.</p>
              <div class="job-search-form">
                <form>
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-xs-12">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Mot cle">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                      <div class="form-group">
                        <div class="search-category-container">
                          <label class="styled-select">
                            <select>
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
                            <select>
                              <option>Toutes les Categories</option>
                              <option>Finance</option>
                              <option>IT & Engineering</option>
                              <option>Education/Training</option>
                              <option>Art/Design</option>
                              <option>Sale/Markting</option>
                              <option>Healthcare</option>
                              <option>Science</option>                              
                              <option>Food Services</option>
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
    </header>
    <!-- Header Section End --> 


    

    