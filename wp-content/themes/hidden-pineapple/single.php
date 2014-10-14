<?php get_header(); ?>

	<section class="bg-white pad-v">
		<div class="container">

			<div class="row">
				<div class="span8">
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

<?php get_footer(); ?>
