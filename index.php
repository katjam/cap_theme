<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

              <?php $args = array( 'post_type' => 'capriol-film' ); ?>
              <?php $loop = new WP_Query( $args ); ?>
							<?php while ($loop->have_posts()) : $loop->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                  <section class="entry-content" > 
                    <a href ="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('cap-thumb'); ?></a>              
									  <h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  </section>  
							</article>

							<?php endwhile; wp_reset_query(); ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
