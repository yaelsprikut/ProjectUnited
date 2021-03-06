<?php get_header(); ?>
	<?php 
	//infinite scroll (technically goes up to 100 but can be altered) YS
		$temppp = get_option( 'posts_per_page' );
		update_option( 'posts_per_page', 100 );
	?>
	<section id="content" class="first clearfix">
		<div class="home-container">
     	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('item-list mbottom'); ?>>
        <div id="title" class="cthumb">
            <a href="<?php the_permalink(); ?>">
				         			<h5 class="text"><?php the_title(); ?></h5>
			  <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large'); } else { ?>
                <img src="<?php  echo get_template_directory_uri(); ?>/images/default-image.png" alt="<?php the_title_attribute();  ?>" />
              <?php } ?>
            </a>
        </div>
        <div class="cdetail">
		        <div class="cdetail">
        <div class="postmeta">
       		    <p class="vsmall pnone">
     		        <span class="mdate alignright"><?php echo the_time(get_option( 'date_format' )) ?></span></p>
			</div>
            
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