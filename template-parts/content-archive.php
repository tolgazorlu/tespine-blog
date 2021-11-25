<div class="col">

<div class="shadow card"> <!--
  <img
    class="card-img-top"
    src=<?php //the_post_thumbnail_url('thumbnail'); ?>
    alt="Bologna"
  />
-->
  <div class="card-body">
    <h4 class="card-title"><?php the_title(); ?></h4>
    <p class="card-text">
    <?php
    the_excerpt();
    ?>
    </p>
    <div >
      <a href=<?php the_permalink(); ?> 
        >Read more<i class="fa fa-angle-right"></i
      ></a>
    </div>
  </div>
  
  <div
    class="card-footer text-muted d-flex justify-content-between bg-transparent"
  >
    <div><?php the_tags(); ?></div>
    <!--
    <div class="stats">
      <i class="far fa-comment"></i> <?php comments_number(); ?>
    </div>
-->
  </div>
</div>
</div>