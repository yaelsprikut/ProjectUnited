<?php /* Template name: Full Width */ ?>  
<?php get_header(); ?>
	<section id="content" class="first clearfix" role="main">
		<div class="page-container full-width">
            <?php if (have_posts()) : ?>
	            <?php while ( have_posts() ) : the_post(); ?>
	                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
                        
                            <?php wiles_breadcrumbs() ?>

							    <section class="entry-content clearfix">
							        <?php the_content(); ?>
								    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'wiles' ), 'after' => '</div>' ) ); ?>
							    </section> <!-- end section -->
							    <footer class="article-footer">
								    <?php edit_post_link( __( 'Edit', 'wiles' ), '<span class="edit-link">', '</span>' ); ?>
							    </footer> <!-- end footer -->
							<?php if ( comments_open() || '0' != get_comments_number() ) comments_template( '', true ); ?>
                        
					</article> <!-- end article -->
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section> <!-- end #main -->
<?php get_footer(); ?>