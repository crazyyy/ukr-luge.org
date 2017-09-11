<?php get_header(); ?>

  <section id="primary" class="content-archive content-area post-layout-two-columns">
    <main id="main" class="site-main" role="main">

      <header class="page-header clearfix">
        <h2 class="page-title">404</h2>
      </header>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content clearfix">
          <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
          <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
        </div><!-- .entry-content -->

      </article>

    </main>
  </section><!-- #primary -->

  <?php get_sidebar('left'); ?>
  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
