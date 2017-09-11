<section id="secondary" class="main-sidebar widget-area clearfix" role="complementary">
  <header class="sidebar-header clearfix">
    <h2 class="sidebar-title">Проекти</h2>
  </header>

  <aside class="sidebar" role="complementary">
    <?php if ( is_active_sidebar('widgetarea1') ) : ?>
      <?php dynamic_sidebar( 'widgetarea1' ); ?>
    <?php else : ?>
      <!-- If you want display static widget content - write code here
      RU: Здесь код вывода того, что необходимо для статического контента виджетов -->
    <?php endif; ?>
  </aside><!-- /sidebar -->

  <aside id="admiral-magazine-posts-sidebar-5" class="widget admiral_magazine_posts_sidebar clearfix">
    <div class="widget-magazine-posts-sidebar widget-magazine-posts clearfix">
      <div class="widget-header">
        <h3 class="widget-title">АНОНС</h3></div>
      <div class="widget-magazine-posts-content">

      <?php query_posts("showposts=3&cat=10"); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article <?php post_class(); ?>>
            <header class="entry-header">
              <a href="<?php the_permalink(); ?>" rel="bookmark">
                <?php if ( has_post_thumbnail()) { ?>
                  <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } else { ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php } ?>
              </a>
              <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <!-- .entry-header -->
          </article>
        <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>

      </div>
    </div>
  </aside>

</section>
<!-- #secondary -->
