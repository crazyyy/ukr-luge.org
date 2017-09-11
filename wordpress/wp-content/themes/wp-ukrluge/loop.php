<div id="post-wrapper" class="post-wrapper clearfix">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
</div><!-- post-wrapper -->
