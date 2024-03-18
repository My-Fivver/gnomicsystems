<?php get_header(); ?>

<!-- Main -->

<div class="full-screen">
  <div class="overlay"></div>
  <div class="container">
    <h1 class="title">
    <?php echo wp_kses_post(get_theme_mod('main_title')); ?>
    </h1>
    <p class="text-secondary">
    <?php echo wp_kses_post(get_theme_mod('main_discription')); ?>
    </p>
    <?php
    $custom_link = get_theme_mod('custom_link');
    if (!empty($custom_link)) {
        echo '<button class="btn btn-danger" onclick="window.open(\'' . esc_url($custom_link) . '\', \'_blank\')">Click Here</button>';
    } else {
        echo '<p>No custom link set</p>';
    }
    ?>
  </div>
</div>




<!-- about -->
<div class="container-fluid bg-dark p-5">
  <div class="row align-items-center justify-content-start">
    <div class="col-md-8 pb-2">
      <div class="text-left">
        <h2 class="title text-danger">über uns</h2>
        <h1 class="title">    
          <?php echo wp_kses_post(get_theme_mod('about_title')); ?>
</h1>

        <p class="description">
        <?php echo wp_kses_post(get_theme_mod('about_dis')); ?>

        </p>
        <?php
    $custom_link = get_theme_mod('about_link');
    if (!empty($custom_link)) {
        echo '<button class="btn btn-danger" onclick="window.open(\'' . esc_url($custom_link) . '\', \'_blank\')">Click Here</button>';
    } else {
        echo '<p>No custom link set</p>';
    }
    ?>        
      </div>
    </div>
    <div class="col-md-4">
      <!-- <img src="img/3.png" alt="Image" class="img-fluid rounded" /> -->
      
      <?php
    // Custom image
    $custom_image = get_theme_mod('custom_image_about');
    if (!empty($custom_image)) {
        echo '<img class="img-fluid rounded"  src="' . esc_url($custom_image) . '" alt="Custom Image">';
    }
    ?>

    </div>
  </div>
</div>






<!-- services -->

<div class="container-fluid p-5">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-12 title-center text-center section-gap">
      <h2 class="text-danger">unsere Service
      </h2>
      <p class="text-dark fs-3">Description text goes here...</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 ">
      <div class="text-center">
        <img src='http://myfirstwebsite.local/wp-content/uploads/2024/03/laptop.jpeg' alt="Image" class="img-fluid rounded" />

        <h3 class="text-dark">Title 3</h3>
        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        <a href="#" class="btn btn-dark mb-5">Button 1</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
      <img src='http://myfirstwebsite.local/wp-content/uploads/2024/03/phone.jpeg' alt="Image" class="img-fluid rounded" />

        <h3 class="text-dark">Title 3</h3>
        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        <a href="#" class="btn btn-dark mb-5">Button 2</a>
      </div>
    </div>
    <div class="col-md-4 ">
      <div class="text-center">
      <img src='http://myfirstwebsite.local/wp-content/uploads/2024/03/laptop.jpeg' alt="Image" class="img-fluid rounded" />

        <h3 class="text-dark">Title 3</h3>
        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
        <a href="#" class="btn btn-dark">Button 3</a>
      </div>
    </div>
  </div>
</div>


<!-- Kontakt -->
<div class="container-fluid bg-light p-5">
  <div class="row">
    <!-- Left Column -->
    <div class="col-md-6">
      <h2 class="text-danger">Title</h2>
      <h3 class="text-secondary">Subtitle</h3>
      <h2 class="text-danger">0178 548 54</h2>
      <p class="text-secondary">Curabitur ullamcorper, magna ac cursus efficitur, dui velit molestie sapien, quis rhoncus arcu ipsum in metus</p>
    </div>
    <!-- Right Column -->
    <div class="col-md-6">
    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
            <div class="form-group">
                <label for="nameInput">Name</label>
                <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="emailInput">Email address</label>
                <input type="email" class="form-control" id="emailInput" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="subjectInput">Subject</label>
                <input type="text" class="form-control" id="subjectInput" name="subject" placeholder="Enter the subject" required>
            </div>
            <div class="form-group">
                <label for="commentInput">Comment</label>
                <textarea class="form-control" id="commentInput" name="comment" rows="3" placeholder="Enter your comment" required></textarea>
            </div>
            <button type="submit" class="btn btn-dark mt-2">Submit</button>
        </form>
    </div>
  </div>
</div>

<!-- Blog  -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="blog-post">

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <!-- <h2 class="blog-title"><?php the_title(); ?></h2>
            <p class="blog-date"><?php the_date(); ?></p> -->
            <p class="blog-description "><?php the_content(); ?> </p>

          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>
<!-- End Blog  -->




<?php get_footer(); ?>