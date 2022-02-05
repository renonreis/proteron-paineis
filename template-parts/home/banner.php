<?php
  $banner = get_field('content_banner');
  if( $banner ): ?>
  <section id="banner" class="banner position-relative overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-md-7 offset-md-1">
          <div class="banner_box">
            <h1 class="banner_box-title"><?php echo $banner['banner_title']; ?></h1>
            <p class="banner_box-description"><?php echo $banner['banner_subtitle']; ?></p>
            <a href="<?php echo $banner['banner_button_link']; ?>" class="btn button default"><?php echo $banner['banner_button_text']; ?></a>
          </div>
        </div>
      </div>
    </div>

    <div class="banner_background-image position-absolute top-50 end-0">
      <?php if( get_field('banner_background_image') ): ?>
        <img src="<?php the_field('banner_background_image'); ?>" alt="" />
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>