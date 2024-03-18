 <!-- Footer -->
 <footer class="bg-light py-4 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?php
    // Custom image
    $custom_image = get_theme_mod('custom_logo');
    if (!empty($custom_image)) {
        echo '<img class="img-fluid "  src="' . esc_url($custom_image) . '" alt="Custom Image">';
    }
    ?>
          <p>Company Description</p>
        </div>
        <div class="col-md-3">
          <h5>Service</h5>
          <ul class="list-unstyled">
            <li><span href="#">service 1</span></li>
            <li><span href="#">service 2</span></li>
            <li><span href="#">service 3</span></li>

          </ul>
        </div>
        <div class="col-md-3">
          <h5>Links</h5>
          <ul class="list-unstyled">
            <li><span href="#">Home</span></li>
            <li><span href="#">Services</span></li>
            <li><span href="#">Kontakt</span></li>

          </ul>
        </div>
        <div class="col-md-3">
          <h5>Links</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-map-marker-alt text-danger"></i> <span href="#">76344 Eggenstein</span></li>
            <li><i class="fas fa-phone-alt text-danger"> </i> <span href="#">0178 255 45</span></li>
            <li><i class="fa-solid fa-envelope text-danger"></i> <span href="#">suport@website.de</span></li>


          </ul>
        </div>

      </div>
    </div>
  </footer>
<?php wp_footer();?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

</body>

</html>