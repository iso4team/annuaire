
  
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
                  <a class="nav-link" href="index.html">
                    Accueil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">
                    Accueil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">
                    Qui sommes nous ?
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html">
                    Nos services
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">
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

    <!-- Category Section Start -->
    <section class="category section bg-gray">
      <div class="container">
        <div class="section-header">  
          <h2 class="section-title">Les Categories</h2>
          <p>Most popular categories of portal, sorted by popularity</p>
        </div>
        <div class="row">   
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="browse-jobs.html">
              <div class="icon bg-color-1">
                <i class="lni-home"></i>
              </div>
              <h3>Finance</h3>
              <p>(4286 jobs)</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="browse-jobs.html">
              <div class="icon bg-color-2">
               <i class="lni-world"></i>
              </div>
              <h3>Sale/Markting</h3>
              <p>(2000 jobs)</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="browse-jobs.html">
              <div class="icon bg-color-3">
               <i class="lni-book"></i>
              </div>
              <h3>Education/Training</h3>
              <p>(1450 jobs)</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category border-right-0">
            <a href="browse-jobs.html">
              <div class="icon bg-color-4">
               <i class="lni-display"></i>
              </div>
              <h3>Technologies</h3>
              <p>(5100 jobs)</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category border-bottom-0">
            <a href="browse-jobs.html">
              <div class="icon bg-color-5">
                <i class="lni-brush"></i>
              </div>
              <h3>Art/Design</h3>
              <p>(5079 jobs)</p>
            </a>
          </div>            
          <div class="col-lg-3 col-md-6 col-xs-12 f-category border-bottom-0">
            <a href="browse-jobs.html">
              <div class="icon bg-color-6">
              <i class="lni-heart"></i>
              </div>
              <h3>Healthcare</h3>
              <p>(3235 jobs)</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category border-bottom-0">
            <a href="browse-jobs.html">
              <div class="icon bg-color-7">
               <i class="lni-funnel"></i>
              </div> 
              <h3>Science</h3>
              <p>(1800 jobs)</p> 
            </a>
          </div>            
          <div class="col-lg-3 col-md-6 col-xs-12 f-category border-right-0 border-bottom-0">
            <a href="browse-jobs.html">
              <div class="icon bg-color-8">
               <i class="lni-cup"></i>
              </div>
              <h3>Food Services</h3>
              <p>(4286 jobs)</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Category Section End -->  

    <!-- How It Work Section Start -->
    <section class="how-it-works section">
      <div class="container">
        <div class="section-header">  
          <h2 class="section-title">How It Works?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>      
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="work-process">
              <span class="process-icon">
                <i class="lni-user"></i>
              </span>
              <h4>Create an Account</h4>
              <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="work-process step-2">
              <span class="process-icon">
                <i class="lni-search"></i>
              </span>
              <h4>Search Jobs</h4>
              <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="work-process step-3">
              <span class="process-icon">
                <i class="lni-cup"></i>
              </span>
              <h4>Apply</h4>
              <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers find place best.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- How It Work Section End -->

    <!-- Latest Section Start -->
    <section id="latest-jobs" class="section bg-gray">
      <div class="container">
        <div class="section-header">  
          <h2 class="section-title">Recents</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>       
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="jobs-latest">
              <div class="img-thumb">
                <img src="<?= CSS_DIR.'assets/'; ?>img/features/img-1.jpg" alt="">
              </div>
              <div class="content">
                <h3><a href="job-details.html">Huissier</a></h3>
                <p class="brand">MagNews</p>
                <div class="tags">  
                  <span><i class="lni-map-marker"></i> New York</span>  
                  <span><i class="lni-user"></i>  John Smith</span> 
                </div>
                <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                <span class="full-time">Full Time</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="jobs-latest">
              <div class="img-thumb">
                <img src="<?= CSS_DIR.'assets/'; ?>img/features/img-2.jpg" alt="">
              </div>
              <div class="content">
                <h3><a href="job-details.html">Plombier</a></h3>
                <p class="brand">Hunter Inc.</p>
                <div class="tags">  
                  <span><i class="lni-map-marker"></i> New York</span>  
                  <span><i class="lni-user"></i>  John Smith</span> 
                </div>
                <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                <span class="part-time">Part Time</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="jobs-latest">
              <div class="img-thumb">
                <img src="<?= CSS_DIR.'assets/'; ?>img/features/img-3.jpg" alt="">
              </div>
              <div class="content">
                <h3><a href="job-details.html">Artisan</a></h3>
                <p class="brand">MagNews</p>
                <div class="tags">  
                  <span><i class="lni-map-marker"></i> New York</span>  
                  <span><i class="lni-user"></i>  John Smith</span> 
                </div>
                <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                <span class="full-time">Full Time</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="jobs-latest">
              <div class="img-thumb">
                <img src="<?= CSS_DIR.'assets/'; ?>img/features/img-4.jpg" alt="">
              </div>
              <div class="content">
                <h3><a href="job-details.html">UX Designer</a></h3>
                <p class="brand">AmazeSoft</p>
                <div class="tags">  
                  <span><i class="lni-map-marker"></i> New York</span>  
                  <span><i class="lni-user"></i>  John Smith</span> 
                </div>
                <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                <span class="full-time">Full Time</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="jobs-latest">
              <div class="img-thumb">
                <img src="<?= CSS_DIR.'assets/'; ?>img/features/img-2.jpg" alt="">
              </div>
              <div class="content">
                <h3><a href="job-details.html">Digital Marketer</a></h3>
                <p class="brand">Bingo</p>
                <div class="tags">  
                  <span><i class="lni-map-marker"></i> New York</span>  
                  <span><i class="lni-user"></i>  John Smith</span> 
                </div>
                <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                <span class="part-time">Part Time</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="jobs-latest">
              <div class="img-thumb">
                <img src="<?= CSS_DIR.'assets/'; ?>img/features/img-1.jpg" alt="">
              </div>
              <div class="content">
                <h3><a href="job-details.html">Web Developer</a></h3>
                <p class="brand">MagNews</p>
                <div class="tags">  
                  <span><i class="lni-map-marker"></i> New York</span>  
                  <span><i class="lni-user"></i>  John Smith</span> 
                </div>
                <div class="tag mb-3"><i class="lni-tag"></i> #Html #Css #PHP</div>
                <span class="full-time">Full Time</span>
              </div>
            </div>
          </div>
          <div class="col-12 text-center mt-4">
            <a href="job-page.html" class="btn btn-common">Browse All Jobs</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Section End -->

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="section">
      <div class="container">
        <div class="section-header">  
          <h2 class="section-title">Clients Review</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ellentesque dignissim quam et <br> metus effici turac fringilla lorem facilisis.</p>      
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="touch-slider owl-carousel">
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                      <img src="<?= CSS_DIR.'assets/'; ?>img/testimonial/img1.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                    <div class="author-info">
                      <h2><a href="#">Jessica</a></h2>
                      <span>Senior Accountant</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="<?= CSS_DIR.'assets/'; ?>img/testimonial/img2.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                    <div class="author-info">
                      <h2><a href="#">John Doe</a></h2>
                      <span>Project Menager</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="author">
                    <div class="img-thumb">
                    <img src="<?= CSS_DIR.'assets/'; ?>img/testimonial/img3.png" alt="">
                    </div>
                  </div>
                  <div class="content-inner">
                    <p class="description">Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui Morbi quam enim, cursus non erat pretium veh icula finibus ex stibulum venenatis viverra dui.</p>
                    <div class="author-info">
                      <h2><a href="#">Helen</a></h2>
                      <span>Engineer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  

    

    