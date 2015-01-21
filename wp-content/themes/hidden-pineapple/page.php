<?php get_header(); ?>

	<section class="bg-white pad-v">
    <div class="container">

      <div class="row mar-b">
        <div class="span8 offset2">
          <h2><?php the_title(); ?></h2>
        </div>
      </div>

      <div class="row check-visible">
        <div class="span8 offset2">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>

    </div>
  </section>


<?php get_footer(); ?>