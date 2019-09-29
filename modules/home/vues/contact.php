<section class="category section bg-gray">
    <div class="container">
        <div class="section-header">  
            <h2 class="section-title">Contact</h2>
            <p>Informations sur les contacts</p>
        </div>
        <div class="row">
            <?= $texte; ?>
            <div class="col-lg-6 col-md-6 col-xs-12">
                Forumulaire de contact
                <form id="contact-form" action="#" method="get">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" name="name" placeholder="Nom Complet" required="">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" name="email" placeholder="Email" required="">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="5" name="message" placeholder="Message" required=""></textarea>
                              </div>
                              <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                   <button id="submit" type="submit" class="form-control" name="submit">Envoyer</button>
                              </div>
                        </form>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                Adresse
                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Dakar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    
                </iframe>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            </div> 
</section>