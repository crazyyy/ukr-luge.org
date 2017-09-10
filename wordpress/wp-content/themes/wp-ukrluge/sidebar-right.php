      <section id="tertiary" class="small-sidebar widget-area clearfix" role="complementary">
        <header class="sidebar-header clearfix">
          <h2 class="sidebar-title">Партнери та спонсори</h2>
        </header>
        <aside id="text-3" class="widget widget_text clearfix">
          <div class="textwidget">
            <center>
              <a href="http://hlibprom.com.ua/"><img src="<?php echo get_template_directory_uri(); ?>/img/XLIBPROM.jpg" width="124" height="145" alt="ХлібПром"></a>
            </center>
            <br>
            <center>
              <a href="http://novodim.com.ua/"><img src="<?php echo get_template_directory_uri(); ?>/img/banerNOC.png" width="200" height="200" alt="Новодім. Будівельні матеріали"></a>
            </center>
            <br>
            <center><a href="http://galinfo.com.ua/"><img src="<?php echo get_template_directory_uri(); ?>/img/GALINFO.png" width="160
   height=" 160"="" alt="Гал-інфо"></a></center>
            <br>
            <center><a href="http://lviv.fm/"><img src="<?php echo get_template_directory_uri(); ?>/img/LVIV_XVUL.png" width="160
   height=" 160"="" alt="Львівська хвилч"></a></center>
            <br>
            <center><a href="http://vgolos.com.ua/"><img src="<?php echo get_template_directory_uri(); ?>/img/VGOLOS.jpg" width="160
   height=" 160"="" alt="В голос"></a></center>
          </div>
        </aside>
        <aside id="text-10" class="widget widget_text clearfix">
          <div class="textwidget">
          </div>
        </aside>

<aside class="sidebar" role="complementary">
  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>
    <!-- If you want display static widget content - write code here
    RU: Здесь код вывода того, что необходимо для статического контента виджетов -->
  <?php endif; ?>
</aside><!-- /sidebar -->


      </section><!-- #tertiary -->



