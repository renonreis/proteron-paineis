<section id="projetos" class="projects">
  <div class="container-fluid g-0">
    <div class="row align-items-center w-100 g-0">
      <div class="col-md-6">
        <?php
          $project_one = get_field('project_one');
          if( $project_one ): ?>
          <div class="projects_box-materiais position-relative overflow-hidden">
            <div class="projects_box-background-image position-absolute top-0 end-0">
              <img src="<?php echo $project_one['project_background_image']; ?>" alt="">
            </div>
            <div class="projects_box-content">
              <img class="d-block" src="<?php echo $project_one['project_logo_image']; ?>" alt="">
              <a href="<?php echo $project_one['project_button_link']; ?>" target="_blank" class="btn button outline_light">
                <?php echo $project_one['project_button_text']; ?>
              </a>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-md-6">
        <?php
          $project_two = get_field('project_two');
          if( $project_two ): ?>
          <div class="projects_box-engenharia position-relative overflow-hidden">
            <div class="projects_box-background-image position-absolute top-0 end-0">
              <img src="<?php echo $project_two['project_background_image']; ?>" alt="">
            </div>
            <div class="projects_box-content">
              <img class="d-block" src="<?php echo $project_two['project_logo_image']; ?>" alt="">
              <a href="<?php echo $project_two['project_button_link']; ?>" class="btn button outline_light">
                <?php echo $project_two['project_button_text']; ?>
              </a>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>