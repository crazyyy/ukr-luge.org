<?php get_header(); ?>

  <section id="primary" class="content-archive content-area post-layout-two-columns">
    <main id="main" class="site-main" role="main">
      <header class="blog-header clearfix">
        <h1 class="blog-title"><?php echo sprintf( '%s результатів для: "', $wp_query->found_posts ); echo get_search_query(); ?>"</h1>
      </header>

      <?php get_template_part('loop'); ?>

      <?php get_template_part('pagination'); ?>

    </main>
    <!-- #main -->
  </section>
  <!-- #primary -->

  <?php get_sidebar('left'); ?>
  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
