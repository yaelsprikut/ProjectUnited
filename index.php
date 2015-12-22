<?php get_header(); ?>
	<section id="content" class="first clearfix">
		<div class="home-container">
	<h4 align="center" style="color:gray">Project United is a Movement aimed at empowering those battling poverty</h4>
			<h5 style="color:gray" align="center">We are mapping stories to raise awareness, create change and engage YOU</h5><br>
     	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('item-list mbottom'); ?>>
        <div class="cthumb">
            <a href="<?php the_permalink(); ?>">
			  <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large');} else { ?>
                <img src="<?php  echo get_template_directory_uri(); ?>/images/default-image.png" alt="<?php the_title_attribute();  ?>" />
              <?php } ?>
            </a>
        </div>
        <div class="cdetail">

		<h5><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
         
            
        </div>
    </article>
<?php endwhile; ?>
    <div class="pagenavi alignright">
	    <?php if ($wp_query->max_num_pages > 1) wiles_wp_pagination(); ?>
		

	</div>
<?php else : get_template_part( 'no-results', 'loop' ); endif; ?>
		</div>
	</section> <!-- end #main -->
<?php get_footer(); ?>