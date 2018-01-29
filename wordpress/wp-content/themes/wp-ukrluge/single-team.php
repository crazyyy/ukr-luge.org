<?php get_header(); ?>

  <section id="primary" class="content-archive content-area post-layout-two-columns">

    <button id="small-sidebar-toggle" class="small-sidebar-toggle sidebar-toggle"></button>
    <button id="main-sidebar-toggle" class="main-sidebar-toggle sidebar-toggle"></button>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <main id="main" class="site-main" role="main">

        <header class="page-header clearfix">
          <h2 class="page-title"><?php the_title(); ?></h2>
        </header>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


          <?php if( have_rows('groupe_block') ): ?>
            <?php while( have_rows('groupe_block') ): the_row(); ?>

              <div class="teams-group">
                <div class="team-title"><?php the_sub_field('group_title'); ?></div>
                <div class="teams-members">
                  <?php if( have_rows('members') ): ?>
                    <?php while( have_rows('members') ): the_row(); ?>
                      <div class="member">
                        <?php $image = get_sub_field('member_photo'); if( !empty($image) ): ?>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <h6 class="member-title"><?php the_sub_field('member_name'); ?></h6>
                      </div><!-- /.member -->
                    <?php endwhile; ?>
                  <?php endif?>
                </div>
                <!-- /.teams-members -->
              </div><!-- /.teams-group -->

            <?php endwhile; ?>
          <?php endif;  ?>

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
