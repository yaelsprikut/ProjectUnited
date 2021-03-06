<?php /* Template name: Full Width */ ?>  
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
		
			<div class="top-nav">
				
				<div class="section-inner">
					
					<ul class="primary-menu">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="padding:0;"><img src="http://projectunitedcity.com/wp-content/uploads/2015/12/ProjectUnited_Logo_Name_White.png" width="40%" style="padding-top:1.1em;"></a></li>
						<?php 
							if ( has_nav_menu( 'primary' ) ) {
								wp_nav_menu( array( 
								
									'container' => '', 
									'items_wrap' => '%3$s',
									'theme_location' => 'primary'
																
								) ); 
							}
						?>
															
					</ul> <!-- /secondary-menu -->
				
					<ul class="social-menu">
						
						<?php 
							if ( has_nav_menu( 'social' ) ) {
								wp_nav_menu(
									array(
										'theme_location'	=>	'social',
										'container'			=>	'',
										'container_class'	=>	'menu-social',
										'items_wrap'		=>	'%3$s',
										'menu_id'			=>	'menu-social-items',
										'menu_class'		=>	'menu-items',
										'depth'				=>	1,
										'link_before'		=>	'<span class="screen-reader-text">',
										'link_after'		=>	'</span>',
										'fallback_cb'		=>	'',
									)
								);
								echo '<li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-151"><a class="search-toggle" href="#"><span class="screen-reader-text">Search</span></a></li>';
							}
						?>
						
					</ul> <!-- /social-menu -->
				
				<div class="clear"></div>
				
				</div> <!-- /section-inner -->
				<div class="clear"></div>
			</div> <!-- /top-nav -->
			<div class="clear"></div>
		<?php endif; ?>

		<div class="search-container">
			
			<div class="section-inner">
			
				<?php get_search_form(); ?>
			
			</div> <!-- /section-inner -->
			
		</div> <!-- /search-container -->
		<?php if(is_home()) echo '<div class="postheader">
			 <p align="center">
				 <img src="http://projectunitedcity.com/wp-content/uploads/2015/12/ProjectUnited_Logo-Only.png" width="100em"><br>
				 <h4 class="postheader">Project United is a Movement aimed at empowering those battling poverty.</h4>
				 <h5 class="postheader">We are mapping stories to raise awareness, create change and engage you.</h5><br><br>
				 <div align="center"><a class="btn" href="http://projectunitedcity.com/story-map-page/">&#10097; Read Our Stories</a></div>
			 </p>		
		</div>'; ?>
		<!-- /postheader -->
		<div class="header-wrapper">
		
			<div class="header">
					
				<div class="section-inner">
				
					<?php if ( get_theme_mod( 'wiles_logo' ) ) : ?>
				
				        <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
				        	<img src='<?php echo esc_url( get_theme_mod( 'wiles_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
				        </a>
				
					<?php else : ?>
				
				<?php if(is_home()) echo '<h1 class="blog-title">'; else echo '<h2 class="blog-title">'; ?>
						
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
						
						<?php if(is_home()) echo '</h1>'; else echo '</h2>'; ?>
						
						
					<?php endif; ?>
					
					<div class="nav-toggle">
						
						<div class="bars">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
						</div>
						
					</div> <!-- /nav-toggle -->
				
				</div> <!-- /section-inner -->
				
			</div> <!-- /header -->
			
						
			<ul class="mobile-menu">
				
				<?php 
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary'
														
						) ); 
					}
				?>
				
			</ul> <!-- /mobile-menu -->
				
		</div> <!-- /header-wrapper -->
					
		
<!-- end -->
	
	
	<div class="container mtop" style="max-width: 100%;">
		<div id="inner-content">
	<section id="content" class="first clearfix" role="main">
		<div class="page-container full-width">
            <?php if (have_posts()) : ?>
	            <?php while ( have_posts() ) : the_post(); ?>
	                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
                        

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