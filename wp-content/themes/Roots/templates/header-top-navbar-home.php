
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
            <ul class='nav navbar-nav'>
              <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(array('items_wrap' => '%3$s', 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
                endif;
              ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="http://umd.ventureboard.co/users/sign_in">UMD</a></li>
                  <li><a href="http://uva.ventureboard.co/users/sign_in">UVA</a></li>
                  <li><a href="http://ncsu.ventureboard.co/users/sign_in">NC STATE</a></li>
                  <li><a href="http://libertydev.com/users/sign_in">LibertyDev</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Waitlist</li>
                  <li><a href="#">Get VentureBoard!</a></li>
                </ul>
              </li>
            </ul>
        </div>
      </div>
    </nav>
</header>
