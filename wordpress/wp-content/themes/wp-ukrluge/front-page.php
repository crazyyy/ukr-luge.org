<?php /* Template Name: Home Page */ get_header(); ?>

  <section id="primary" class="content-archive content-area">

    <button id="small-sidebar-toggle" class="small-sidebar-toggle sidebar-toggle"></button>
    <button id="main-sidebar-toggle" class="main-sidebar-toggle sidebar-toggle"></button>

    <main id="main" class="site-main" role="main">
      <header class="blog-header clearfix">
        <h1 class="blog-title">Новини</h1>
      </header>

      <div id="post-slider-container" class="post-slider-container type-page clearfix">
        <div id="post-slider-wrap" class="post-slider-wrap clearfix">
          <div id="post-slider" class="post-slider zeeflexslider">
            <ul class="zeeslides">

              <li id="slide-22013" class="zeeslide clearfix">
                <img width="600" height="399" src="http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo.jpg" class="slide-image wp-post-image" alt="" srcset="http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo.jpg 600w, http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo-150x100.jpg 150w, http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo-300x200.jpg 300w, http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo-120x80.jpg 120w, http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo-480x320.jpg 480w" sizes="(max-width: 600px) 100vw, 600px">
                <div class="slide-content clearfix">
                  <h2 class="slide-title entry-title"><a href="http://www.noc.lviv.ua/novyny/22013" rel="bookmark">Юрій Турянський нагородить кращого спортсмена червня</a></h2>
                  <div class="entry-content clearfix">
                    <p>Голова відділення НОК України у Львівській області Юрій Турянський нагородить кращого спортсмена червня. Нагадаємо, ним став Павло Коростильов, який блискуче</p>
                  </div><!-- .entry-content -->
                </div>
              </li>

            </ul>
          </div>

          <div class="post-slider-controls"></div>
        </div>
      </div><!-- post-slider-container -->

      <div id="post-wrapper" class="post-wrapper clearfix">

        <div class="post-column clearfix">
          <article id="post-22013" class="post-22013 post type-post status-publish format-standard has-post-thumbnail hentry category-49 category-novyny">
            <a href="http://www.noc.lviv.ua/novyny/22013" rel="bookmark">
              <img width="600" height="399" src="http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo.jpg 600w, http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo-150x100.jpg 150w, http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo-300x200.jpg 300w, http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo-120x80.jpg 120w, http://www.noc.lviv.ua/wp-content/uploads/2017/09/Korostylov_pavlo-480x320.jpg 480w" sizes="(max-width: 600px) 100vw, 600px">
            </a>

            <header class="entry-header">
              <h2 class="entry-title"><a href="http://www.noc.lviv.ua/novyny/22013" rel="bookmark">Юрій Турянський нагородить кращого спортсмена червня</a></h2>
            </header><!-- .entry-header -->

            <div class="entry-content entry-excerpt clearfix">
              <p>Голова відділення НОК України у Львівській області Юрій Турянський нагородить кращого спортсмена червня. Нагадаємо, ним став Павло Коростильов, який блискуче</p>
            </div><!-- .entry-content -->
          </article>
        </div>

      </div><!-- post-wrapper -->

      <?php get_template_part('pagination'); ?>

    </main>
    <!-- #main -->
  </section>
  <!-- #primary -->

  <?php get_sidebar('left'); ?>
  <?php get_sidebar('right'); ?>

<?php get_footer(); ?>
