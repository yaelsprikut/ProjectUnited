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
					<li><a href="http://projectunitedcity.com/"><img src="http://projectunitedcity.com/wp-content/uploads/2015/12/ProjectUnited_Logo_Name_White.png" width="40%" /></li>

</ul>
					<ul class="secondary-menu">
						
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
	
	
	<div class="container mtop">
		<div id="inner-content">