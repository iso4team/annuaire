
    <!-- Category Section Start -->
    <section class="category section bg-gray">
      <div class="container">
        <div class="section-header">  
          <h2 class="section-title">Les Categories</h2>
          <p>Most popular categories of portal, sorted by popularity</p>
        </div>
        <div class="row">
           <?php
            foreach ($domaines as $value) {
                ?>
                <div class="col-lg-3 col-md-6 col-xs-12 f-category">
                  <a href="browse-jobs.html">
                    <div class="icon bg-color-1">
                      <i class="lni-<?= $value['icone'];?>"></i>
                    </div>
                    <h3><?= $value['name'];?></h3>
                    <p>(4286 jobs)</p>
                  </a>
                </div>
            <?php
            }
            ?>
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
