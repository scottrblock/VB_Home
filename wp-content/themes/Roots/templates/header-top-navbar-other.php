
<header>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="#page-top">
              </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
              <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(array('items_wrap' => '%3$s', 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
                endif;
              ?>
            </ul>
        </div>
      </div>
    </nav>
</header>
