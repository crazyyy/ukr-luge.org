<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <section id="primary" class="content-archive content-area post-layout-two-columns">

      <main id="main" class="site-main" role="main">

        <header class="page-header clearfix">
          <h2 class="page-title"><?php the_title(); ?></h2>
        </header>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="entry-content clearfix">
            <?php the_content(); ?>
          </div><!-- .entry-content -->

        </article>

      </main>
    </section><!-- #primary -->
  <?php endwhile; endif; ?>

  <?php get_sidebar('left'); ?>
  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
