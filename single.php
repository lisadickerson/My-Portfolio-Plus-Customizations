<?php
/**
 * Template for displaying a single post
 *
 * @package Portfolio+
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>

						<div class="entry-meta">
							<?php portfolioplus_postby_meta(); ?>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php portfolioplus_display_image(); ?>
								<!--Custom fields via ACF Plugin for portfolio images: gets custom meta data.
								Conditons as to what editing page it shows up on are in the plugin setting.
								Set for post format image only-->			
									<div id="custom-meta">
										<?php //the_field('title');
												$title = get_field('title'); 
													if( $title ): ?> <!-- If there is content title get it and format-->
														<span class="c-feilds">Title: <i><?php the_field('title'); ?></i></span><br>
													<?php endif; ?> <!-- End loop on title -->
										
										<?php //the_field('date');
												$date = get_field('date'); 
													if( $date ): ?> <!-- If there is content date get it and format-->
														<span class="c-feilds">Date : <i><?php the_field('date'); ?></i></span><br>
													<?php endif; ?> <!-- End loop on development_role -->
													
										<?php //the_field('medium');
												$medium = get_field('medium'); 
													if( $medium ): ?> <!-- If there is content site_url get it and format-->
														<span class="c-feilds">Medium : <i><?php the_field("medium"); ?></i></span><br>
													<?php endif; ?> <!-- End loop on site_url -->
													
										<?php //the_field('dimensions');
												$dimensions = get_field('dimensions'); 
													if( $dimensions ): ?> <!-- If there is content site_url get it and format-->
														<span class="c-feilds">Dimensions : <i><?php the_field("dimensions"); ?></i></span><br>
													<?php endif; ?> <!-- End loop on site_url -->
										<?php //the_field('price');
												$price = get_field('price'); 
													if( $price ): ?> <!-- If there is content site_url get it and format-->
														<span class="c-feilds">Price : <i><?php the_field("price"); ?></i></span><br>
													<?php endif; ?> <!-- End loop on site_url -->
									</div><!--close custom-meta-->
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'portfolio-plus' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

					<?php portfolioplus_footer_meta( $post ); ?>

				</article><!-- #post-<?php the_ID(); ?> -->

				<?php if ( of_get_option('portfolio_navigation', true ) ) {
					portfolioplus_post_nav();
				} ?>

				<?php if ( comments_open() ) {
					comments_template( '', true );
                } ?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>