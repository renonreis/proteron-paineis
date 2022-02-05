<section id="servicos" class="services">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center">
        <h2 class="services-title"><?php the_field('services_title'); ?></h2>
      </div>

      <?php
        if( have_rows('services_list') ):
          while( have_rows('services_list') ) : the_row();
      ?>
        <div class="col-md-6">
          <div class="services_box">
            <div class="services_box-background-image">
              <img src="<?php echo get_sub_field('service_background_image'); ?>" alt="">
            </div>
            <div class="services_box_content">
              <p class="services_box_content-categories"><?php echo get_sub_field('service_category'); ?></p>
              <h2 class="services_box_content-title"><?php echo get_sub_field('service_title'); ?></h2>
              <p class="services_box_content-description"><?php echo get_sub_field('service_description'); ?></p>
              <a href="<?php echo get_sub_field('service_button_link'); ?>" class="btn button default"><?php echo get_sub_field('service_button_text'); ?></a>
            </div>
          </div>
        </div>
      <?php
          endwhile;
        endif;
      ?>
  </div>
</section>