<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry cf">

							<header class="article-header">

								<h1><?php _e( 'Page Not Found', 'cap-theme' ); ?></h1>

							</header>

							<section class="entry-content">

								<p><?php _e( 'The page you were looking for was not found try a search.', 'cap-theme' ); ?></p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>

							<footer class="article-footer">

							</footer>

						</article>

					</main>

				</div>

			</div>

<?php get_footer(); ?>
