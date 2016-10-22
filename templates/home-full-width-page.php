<?php
/**
 * Template Name: Home Full-width Page-2
 * Description: A full-width template with no sidebar
 *
 * @package Portfolio Press
 */

get_header(); ?>

	<div id="primary" class="full-width">
		<div id="content" role="main">
		<!--	 <p>TEMPLATES:full-width-page.php test template used</p>-->

			<?php the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
		<!--hardwired gallery: images link to pages OR post categorys-->
		<!--Open Gallery-->
			<div id='gallery-6' class='gallery galleryid-243 gallery-columns-3 gallery-size-thumbnail'>
		<!--early works-->

				<figure class='gallery-item'>
						<div class='gallery-icon portrait'>
						<a href='<?php echo bloginfo( 'url'); ?>/category/early-works/'>	
						<!--<a href='<?php echo bloginfo( 'url'); ?>/portfolio#early-works'>--><!--</a>-->
							<!--	<img class="overlay" width="314" height="224" src="<?php bloginfo('stylesheet_directory'); ?>/images/AB5-Red-Arc-314x224.jpg" class="attachment-thumbnail" alt="Red-Arc" />-->
								<img class="overlay" width="314" height="224" src="<?php bloginfo('stylesheet_directory'); ?>/images/EN1-Childs-play-314x224.jpg" class="attachment-thumbnail" alt="Childs-play" />
							</a>
						</div>
		<!--caption--><h3>Early Works</h3>	
				</figure><figure class='gallery-item'>
		<!--encaustic-->					
						<div class='gallery-icon landscape'>
							
							<a href='<?php echo bloginfo( 'url'); ?>/category/encaustic/'>
								<img width="314" height="224" src="<?php bloginfo('stylesheet_directory'); ?>/images/EN4-X-Marks-the-Spot-314x224.jpg" class="attachment-thumbnail" alt="X-Marks-the-Spot-" />
							</a>
						</div>
		<!--caption--><h3>Encaustic</h3>				
				</figure><figure class='gallery-item'>
		<!--abstract-->					
						<div class='gallery-icon portrait'>
							
							<a href='<?php echo bloginfo( 'url'); ?>/category/abstract/'>
								<img width="314" height="224" src="<?php bloginfo('stylesheet_directory'); ?>/images/AB12-Dark-Spiral-314x224.jpg" class="attachment-thumbnail" alt="Dark-Spiral-" />
							</a>
						</div>
		<!--caption--><h3>Abstract</h3>					
				</figure><figure class='gallery-item'>
		<!--canvas-and-paper-->						
						<div class='gallery-icon portrait'>
							
							<a href='<?php echo bloginfo( 'url'); ?>/category/canvas-and-paper/'>
								<img width="314" height="224" src="<?php bloginfo('stylesheet_directory'); ?>/images/CP4-Paper-Tear-Red-314x224.jpg" class="attachment-thumbnail" alt="Paper-Tear-Red-" />
							</a>
						</div>
		<!--caption--><h3>Canvas and Paper</h3>					
				</figure><figure class='gallery-item'>
		<!--impressionist-->					
						<div class='gallery-icon landscape'>
							
							<a href='<?php echo bloginfo( 'url'); ?>/category/impressionist/'>
								<img width="314" height="224" src="<?php bloginfo('stylesheet_directory'); ?>/images/I1-Blue-Moon-Rising-314x224.jpg" class="attachment-thumbnail" alt="Blue-Moon-Rising-" />
							</a>
						</div>
		<!--caption--><h3>Impressionist</h3>					
				</figure><figure class='gallery-item'>
		<!--sculpture-->						
						<div class='gallery-icon portrait'>
							<a href='<?php echo bloginfo( 'url'); ?>/category/sculpture/'>
								
								<img width="314" height="224" src="<?php bloginfo('stylesheet_directory'); ?>/images/S2-Female-torso-quarter-view-314x224.jpg" class="attachment-thumbnail" alt="Female-torso-quarter-view-" />
							</a>
						</div>
		<!--caption--><h3>Sculpture</h3>					
				</figure>
		</div><!--Close Gallery-->
			
					<?php edit_post_link( __( 'Edit', 'portfolio-press' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->

			<?php comments_template( '', true ); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>