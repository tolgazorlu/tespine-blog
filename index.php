<?php
      get_header();
    ?>
<section class="contact">
  <div class="container">
  <?php
	            $sidebar_position = get_theme_mod('blogwaves_sidebar_position', 'right');
	            if ($sidebar_position == 'left') {
	                $sidebar_position = 'has-left-sidebar';
	            } elseif ($sidebar_position == 'right') {
	                $sidebar_position = 'has-right-sidebar';
	            } elseif ($sidebar_position == 'no') {
	                $sidebar_position = 'no-sidebar';
	            }
            ?>
    <div class="row">
      <div class="col-sm-8 blog-main">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <?php  
                        if( have_posts() ){
                            while( have_posts() ){
                                the_post();
                                get_template_part('template-parts/content', 'archive');
                         }
                    }
                    ?>
        </div>
      </div>


      <!-- TAGS SIDE -->
      <div class="col-sm-4 col-sm-offset-1 blog-sidebar mt-3">
        <br>
        <div class="sidebar-module sidebar-module-inset">
          <h2>Tags</h2>
          <hr>
        </div>
        <div class="sidebar-module sidebar-module-inset mt-3">
          <div class=""><?php  
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
        <br>
        <div id="block-3" class="widget sidebar-post sidebar widget_block">
          <div class="wp-block-group">
            <div class="wp-block-group__inner-container">
              <h2>Recent Posts</h2>
              <hr>
              <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                <li><h5>
              <?php  
                        if( have_posts() ){
                            while( have_posts() ){
                                the_post();
                                get_template_part('template-parts/content', 'recent');                                
                         }
                    }
                    
                    ?></h5>
                    </a>
                    <br>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- /.blog-sidebar -->

      <?php
                if (($sidebar_position == 'has-left-sidebar') || ($sidebar_position == 'has-right-sidebar')) { ?>
					<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
    </div>
  </div>
</section>

<?php
      get_footer();

    ?>