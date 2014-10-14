<?php get_header(); ?>

	<section class="bg-white pad-t--10 pad-b">
		<div class="container">

			<div class="row pad-b">
				<div class="span8">
					<nav class="nav-categories">
						<ul class="hover-wrap">
							<li class="hover-target"><h5>Categories:</h5></li>
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
				<div class="span4">
					<?php get_sidebar(); ?>
				</div>
			</div>

			<div class="row">
				<div class="span8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php $category = get_the_category(); ?>
					<article class="article-excerpt <?php echo $category[0]->slug; ?>">
						<time><?php the_time( get_option( 'date_format' ) ); ?></time>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					</article>
				<?php endwhile; endif; ?>
				</div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>
