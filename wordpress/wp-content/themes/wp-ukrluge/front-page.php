<?php /* Template Name: Home Page */ get_header(); ?>

  <section id="primary" class="content-archive content-area post-layout-two-columns">

    <main id="main" class="site-main" role="main">
      <header class="blog-header clearfix">
        <h1 class="blog-title">Новини</h1>
      </header>

      <?php query_posts("showposts=5&cat=1"); ?>
        <div id="post-slider-container" class="post-slider-container type-page clearfix">
          <div id="post-slider-wrap" class="post-slider-wrap clearfix">
            <div id="post-slider" class="post-slider zeeflexslider">
              <ul class="zeeslides">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <li id="slide-<?php the_ID(); ?>" class="zeeslide clearfix">
                    <?php if ( has_post_thumbnail()) { ?>
                      <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php } else { ?>
                      <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                    <?php } ?>
                    <div class="slide-content clearfix">
                      <h2 class="slide-title entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                      <div class="entry-content clearfix">
                        <?php wpeExcerpt('wpeExcerpt10'); ?>
                      </div><!-- .entry-content -->
                    </div>
                  </li>
                <?php endwhile; endif; ?>
              </ul>
            </div>
            <div class="post-slider-controls"></div>
          </div>
        </div><!-- post-slider-container -->
      <?php wp_reset_query(); ?>

      <div id="post-wrapper" class="post-wrapper clearfix">
        <?php query_posts("showposts=10"); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post-column clearfix">
              <article id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                  <?php if ( has_post_thumbnail()) { ?>
                    <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } ?>
                </a>

                <header class="entry-header">
                  <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </header><!-- .entry-header -->

                <div class="entry-content entry-excerpt clearfix">
                  <?php wpeExcerpt('wpeExcerpt20'); ?>
                </div><!-- .entry-content -->
              </article>
            </div>
          <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
      </div><!-- post-wrapper -->

      <?php get_template_part('pagination'); ?>

    </main>
    <!-- #main -->
  </section>
  <!-- #primary -->

  <?php get_sidebar('left'); ?>
  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
