<footer class="content-info">
  <div class="container">
    <div class="content">
      @php(dynamic_sidebar('sidebar-footer'))
      <div class="row">
        <div class="small-12 medium-6 large-6 columns">
          <div class="ref_footer">
            <p>Réferences</p>
            <div class="ref_img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nasaLogo.png" alt="Nasa">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/appleLogo.svg" alt="Apple">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-arras-hd.png" alt="Arras">
            </div>
          </div>
        </div>
        <div class="small-12 medium-6 large-6 columns">
          <div class="contact_footer">
            <div class="contact_rejoindre">
              <p>Nous contacter</p>
              <p>Nous rejoindre</p>
            </div>
            <div class="newsletter">
              <p>Newsletters</p>
              <p><span>Email@gmail.fr</span></p>
              <button type="submit">ENVOYER</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mention_footer">
    <p>Agence Ariane | <a rel="nofollow" href='<?php the_permalink(144);?>'>Mentions Légales</a> | <a href='<?php the_permalink(142);?>'>Plan du site</a></p>
  </div>
</footer>
