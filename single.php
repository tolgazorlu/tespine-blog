<?php
      get_header();
    ?>

<section class="contact">
  <div class="container">
    <div class="row">
      <div class="shadow col-sm-8 blog-main">
        <div class="row">
          <div class="col-md-12">
            <br>
            <h2>
              <?php the_title(); ?>
            </h2>

            <?php 
                if( have_posts() ){
                  while( have_posts() ){
                    the_post();
                    get_template_part('template-parts/content', 'article');
                  }
                }
            ?>
            <hr />
            <?php the_tags(); ?>
            <hr />
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-sm-offset-1 blog-sidebar mt-3">
        <div class="sidebar-module sidebar-module-inset mt-3">
          <div class="sidebar-module sidebar-module-inset">
            <h2>Tags</h2>
            <hr>
          </div>
          <div>
              <?php  
                        if( have_posts() ){
                                get_template_part('template-parts/content', 'tags');                                
                         
                    }
              ?>
          </div>
        </div>
        <br/>
        <div class="sidebar-module sidebar-module-inset">
          <h2>Categories</h2>
          <hr>
        </div>
        <div>
            <?php  
              if( have_posts() ){
                get_template_part('template-parts/content', 'categories');     
              }
            ?>
        </div>
      <div id="block-3" class="widget sidebar-post sidebar widget_block">
        <div class="wp-block-group">
          <div class="wp-block-group__inner-container">
            <br>
            <br>
            <h2>Recent Posts</h2>
            <hr>
            <ul class="wp-block-latest-posts__list wp-block-latest-posts">
              <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 10, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach( $recent_posts as $post_item ) : ?>
              <li>
                <h5>
                  <a href="<?php echo get_permalink($post_item['ID']) ?>">
                    <p class="slider-caption-class">
                      <?php echo $post_item['post_title'] ?>
                    </p>
                  </a>
                </h5>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /.blog-sidebar -->
  </div>
  </div>
</section>


<?php
      get_footer();

    ?>