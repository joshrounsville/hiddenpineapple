<?php get_header(); ?>

	<section class="bg-white pad-t--10 pad-b">
		<div class="container">

			<div class="row pad-b--40 hover-target">
				<div class="span8">
					<nav class="nav-categories">
						<ul>
							<li><h5>Categories:</h5></li>
							<?php
								$catArgs = array(
									'echo' => 0,
									'title_li' => '',
									'show_count' => 1
								);
								$variable = wp_list_categories($catArgs);
								$variable = preg_replace('~\((\d+)\)(?=\s*+<)~', '$1', $variable);
								echo $variable;
							?>
						</ul>
					</nav>
				</div>
				<div class="span4 mobile-hide">
					<?php get_sidebar(); ?>
				</div>
			</div>

			<div class="row">
				<div class="span8 offset2 span-m-10 offset-m-1">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php $category = get_the_category(); ?>
					<article class="article-excerpt <?php echo $category[0]->slug; ?>">
						<a href="<?php the_permalink() ?>">
							<time><?php the_time( get_option( 'date_format' ) ); ?></time>
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
							<span class="read-more">Read More</span>
						</a>
					</article>
				<?php endwhile; ?>
				<?php else : ?>
					<h3>No results.</h3>
				<?php endif; ?>
				</div>
			</div>

		</div>
	</section>

	<?php if ( get_next_posts_link() || get_previous_posts_link() ) : ?>
	<section class="bg-white section-pagination">
		<div class="container">
			<div class="row">
				<div class="span12">

					<nav class="nav-pagination">
						<ul>
							<?php if ( get_previous_posts_link() ) : ?>
							<li class="pagination-prev"><?php previous_posts_link( '<i class="icon icon-arrow-left"></i> Previous Page' ); ?></li>
							<?php endif; ?>
							<?php if ( get_next_posts_link() ) : ?>
							<li class="pagination-next"><?php next_posts_link( 'Next Page <i class="icon icon-arrow-right"></i>' ); ?></li>
							<?php endif; ?>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

<?php get_footer(); ?>