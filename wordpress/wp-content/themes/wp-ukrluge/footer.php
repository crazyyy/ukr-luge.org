
    </div>
    <!-- #content -->

    <div id="footer" class="footer-wrap">
      <footer id="colophon" class="site-footer container" role="contentinfo">
        <div class="footer-content clearfix">
          <div id="footer-text" class="site-info">
            <span class="credit-link">
              <a href="http://wp-templates.ru/" title="Шаблоны WordPress">WordPress</a> / <a href="https://themezee.com/themes/admiral/" title="Admiral WordPress Theme">Admiral</a> / <a href="http://builderbody.ru/skolko-nuzhno-pit-vody-v-den/" title="Сколько нужно пить воды в день" target="_blank">Вода</a>
            </span>
          </div>
          <!-- .site-info -->
        </div>
      </footer>
      <!-- #colophon -->
    </div>
  </div>
  <!-- #page -->



 <div id="infinite-footer" style="bottom: 0px;">
    <div class="container">
      <div class="blog-info">
        <a id="infinity-blog-title" href="http://www.noc.lviv.ua/" target="_blank" rel="home" title="Scroll back to top">
            Відділення Національного олімпійського комітету України у Львівській області          </a>
      </div>
      <div class="blog-credits">
        &copy; <?php echo date("Y"); ?> Собственность <?php bloginfo('name'); ?>.
    </div>
  </div><!-- #infinite-footer -->

<?php wp_footer(); ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js"></script>
  <script type="text/javascript">
  /* <![CDATA[ */
    var admiral_menu_title = "Navigation";
  /* ]]> */
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/navigation.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sidebar.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
  <script type="text/javascript">
  /* <![CDATA[ */
  var admiral_slider_params = {
    "animation": "slide",
    "speed": "7000"
  };
  /* ]]> */
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/spin.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.spin.js"></script>
  <script type="text/javascript">
  //<![CDATA[
  var infiniteScroll = {
    "settings": {
      "id": "post-wrapper",
      "ajaxurl": "http:\/\/www.noc.lviv.ua\/?infinity=scrolling",
      "type": "scroll",
      "wrapper": false,
      "wrapper_class": "infinite-wrap",
      "footer": true,
      "click_handle": "1",
      "text": "Older posts",
      "totop": "Scroll back to top",
      "currentday": "05.09.17",
      "order": "DESC",
      "scripts": [],
      "styles": [],
      "google_analytics": false,
      "offset": 0,
      "history": {
        "host": "www.noc.lviv.ua",
        "path": "\/page\/%d",
        "use_trailing_slashes": false,
        "parameters": ""
      },
      "query_args": {
        "error": "",
        "m": "",
        "p": 0,
        "post_parent": "",
        "subpost": "",
        "subpost_id": "",
        "attachment": "",
        "attachment_id": 0,
        "name": "",
        "static": "",
        "pagename": "",
        "page_id": 0,
        "second": "",
        "minute": "",
        "hour": "",
        "day": 0,
        "monthnum": 0,
        "year": 0,
        "w": 0,
        "category_name": "",
        "tag": "",
        "cat": "",
        "tag_id": "",
        "author": "",
        "author_name": "",
        "feed": "",
        "tb": "",
        "paged": 0,
        "meta_key": "",
        "meta_value": "",
        "preview": "",
        "s": "",
        "sentence": "",
        "title": "",
        "fields": "",
        "menu_order": "",
        "embed": "",
        "category__in": [],
        "category__not_in": [],
        "category__and": [],
        "post__in": [],
        "post__not_in": [],
        "post_name__in": [],
        "tag__in": [],
        "tag__not_in": [],
        "tag__and": [],
        "tag_slug__in": [],
        "tag_slug__and": [],
        "post_parent__in": [],
        "post_parent__not_in": [],
        "author__in": [],
        "author__not_in": [],
        "posts_per_page": 6,
        "ignore_sticky_posts": false,
        "suppress_filters": false,
        "cache_results": true,
        "update_post_term_cache": true,
        "lazy_load_term_meta": true,
        "update_post_meta_cache": true,
        "post_type": "",
        "nopaging": false,
        "comments_per_page": "50",
        "no_found_rows": false,
        "order": "DESC"
      },
      "last_post_date": "2017-08-28 09:37:49"
    }
  };
  //]]>
  </script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/infinity-scroll.js"></script>

  <script type="text/javascript">
  jQuery.extend(infiniteScroll.settings.scripts, ["jquery-core", "jquery-migrate", "jquery", "html5shiv", "admiral-jquery-navigation", "admiral-jquery-sidebar", "flexslider", "admiral-post-slider", "spin", "jquery.spin", "tztk-infinite-scroll", "wp-embed"]);
  jQuery.extend(infiniteScroll.settings.styles, ["tztk-infinite-scroll", "admiral-stylesheet", "genericons", "admiral-default-fonts", "admiral-flexslider"]);
  </script>

</body>
</html>
