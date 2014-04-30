<?php get_template_part('templates/head'); ?>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom" <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php get_template_part('templates/header-top-navbar-home'); ?>
  <?php get_template_part('templates/front-page-intro'); ?>
  <?php get_template_part('templates/front-page-section2'); ?>

  <?php include roots_template_path(); ?>


  <?php get_template_part('templates/footer'); ?>

</body>
</html>
