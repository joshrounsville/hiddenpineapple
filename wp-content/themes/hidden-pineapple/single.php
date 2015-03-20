<?php get_header(); ?>

	<section class="bg-white pad-t--40 pad-b">
		<div class="container">

			<div class="row">
				<div class="span8 offset2 span-m-10 offset-m-1">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $category = get_the_category(); ?>
						<article class="article-single <?php echo $category[0]->slug; ?>">
							<time><?php the_time( get_option( 'date_format' ) ); ?></time>
							<?php the_content(); ?>
						</article>
					<?php endwhile; endif; ?>
				</div>
			</div>

		</div>
	</section>

	<?php if ( get_next_post_link() || get_previous_post_link() ) : ?>
	<section class="bg-white section-pagination">
		<div class="container">
			<div class="row">
				<div class="span12">

					<nav class="nav-pagination">
						<ul>
							<?php if ( get_previous_post_link() ) : ?>
							<li class="pagination-prev"><?php previous_post_link( '%link', '<i class="icon icon-arrow-left"></i> Previous Post' ); ?></li>
							<?php endif; ?>
							<li class="pagination-blog">
								<a href="<?php echo get_page_link(7); ?>"><i class="icon icon-grid"></i></a>
							</li>
							<?php if ( get_next_post_link() ) : ?>
							<li class="pagination-next"><?php next_post_link( '%link', 'Next Post <i class="icon icon-arrow-right"></i>' ); ?></li>
							<?php endif; ?>
						</ul>
					</nav>

				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

<?php get_footer(); ?>
