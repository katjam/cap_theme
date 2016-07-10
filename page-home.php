<?php get_header(); ?>

            <div id="content">

                <div id="inner-content" class="wrap cf">

                        <main id="main" role="main" itemprop="mainContentOfPage" >
              <div class="section clearfix">
                <h2>Cinema</h2><div><h3><a href="/screenings">COMING SOON - ChickLit</a></h3></div>
                <?php $args = array( 'post_type' => 'capriol-film', 'production-types' => 'cinema' ); ?>
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                              <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                    <section class="entry-content" >
                      <a href ="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('cap-thumb'); ?></a>
                                        <h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    </section>
                              </article>

                            <?php endwhile; wp_reset_query(); ?>
              </div>
              <div class="section clearfix">
                <h2>Television</h2>
                <?php $args = array( 'post_type' => 'capriol-film', 'production-types' => 'television' ); ?>
                <?php $loop = new WP_Query( $args ); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                              <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                  <section class="entry-content" >
                    <a href ="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('cap-thumb'); ?></a>
                                      <h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  </section>
                              </article>

                            <?php endwhile; wp_reset_query(); ?>
              </div>
                        </main>

                </div>

            </div>


<?php get_footer(); ?>
