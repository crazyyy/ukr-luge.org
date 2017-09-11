<section id="tertiary" class="small-sidebar widget-area clearfix" role="complementary">
  <header class="sidebar-header clearfix">
    <h2 class="sidebar-title">Партнери та спонсори</h2>
  </header>

  <aside class="sidebar" role="complementary">
    <?php if ( is_active_sidebar('widgetarea2') ) : ?>
      <?php dynamic_sidebar( 'widgetarea2' ); ?>
    <?php else : ?>
      <!-- If you want display static widget content - write code here
      RU: Здесь код вывода того, что необходимо для статического контента виджетов -->
    <?php endif; ?>
  </aside><!-- /sidebar -->

</section><!-- #tertiary -->
