<?php 
/*
Template Name: automagic sitemap



will automatically generate a sitemap using all pages posts and catergories on your site

*/

?>

<?php get_header(); ?>
    
    <div id="content">
	<?php 
	//THE LOOP.
	if( have_posts() ): 
		while( have_posts() ):
		the_post(); ?>
	
        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
            <h2 class="entry-title"> <a href="<?php the_permalink(); ?>"> 
				<?php the_title(); ?> 
			</a></h2>

            <div class="entry-content">
                <div class="onethird">
                    <h3>Pages:</h3>
                    <ul>
                        <?php wp_list_pages( array(

                                'title_li' => '',
                            

                            ) ); ?>
                    </ul>    
                </div>
                <div class="onethird">
                    <h3>Blog posts</h3>

                    <ul>
                        <?php 
                            wp_get_archives( array(

                                'type' => 'alpha', // each post, in alpha order by title

                            ));
                         ?>

                    </ul>

                </div>
                <div class="onethird">
                    <h3>RSS feeds</h3>
                    <ul>
                        <li><a href="<?php bloginfo('rss2_url'); ?>">Blog Posts Feed</a></li>
                        <li><a href="<?php bloginfo('comments_rss2_url') ?>">comments Feed</a></li>

                    </ul>
                      <h3>catergories</h3>  
                    <ul>
                      <?php
                        wp_list_categories(array(
                            'title_li' => '',
                            'feed_image' => get_bloginfo('template_directory') . '/images/icon_feed.png',    
                            )); ?>
                    </ul>
                </div>
            </div>
       
        
		<?php comments_template(); ?>
		 </article><!-- end post -->
      <?php 
	  endwhile;
	  else: ?>

	  <h2>Sorry, no posts found</h2>

	  <?php endif; //END OF LOOP. ?>
	          
        
        <div id="nav-below" class="pagination"> 
        	<?php //TODO: Make pagination functional ?>
            <a href="/blog/page/2/" >&larr; View Older Posts</a> 
        </div><!-- end #nav-below --> 
        
    </div><!-- end content -->
    
<?php get_footer(); ?>  