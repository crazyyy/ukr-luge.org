<?php get_header(); ?>

  <section id="primary" class="content-archive content-area post-layout-two-columns">

    <button id="small-sidebar-toggle" class="small-sidebar-toggle sidebar-toggle"></button>
    <button id="main-sidebar-toggle" class="main-sidebar-toggle sidebar-toggle"></button>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <main id="main" class="site-main" role="main">

        <header class="page-header clearfix">
          <h2 class="page-title"><?php the_category(', '); ?></h2>
        </header>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content clearfix">
            <?php the_content(); ?>
          </div><!-- .entry-content -->

        </article>

      </main>
    <?php endwhile; endif; ?>
  </section>
  <!-- #primary -->

  <?php get_sidebar('left'); ?>
  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
