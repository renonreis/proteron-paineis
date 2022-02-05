<?php
  $about = get_field('about_content');
  if( $about ): ?>
  <section id="quem-somos" class="about position-relative overflow-hidden">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="about_box">
            <p class="about_box-categories"><?php echo $about['about_title']; ?></p>
            <h2 class="about_box-title"><?php echo $about['about_subtitle']; ?></h2>
            <p class="about_box-description"><?php echo $about['about_description']; ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="about_background-image position-absolute left-0 top-0">
      <?php if( get_field('about_background_image') ): ?>
        <img src="<?php the_field('about_background_image'); ?>" alt="" />
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>