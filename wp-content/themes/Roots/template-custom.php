<?php
/*
Template Name: custom template
*/
?>

<?php get_template_part('templates/head'); ?>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom" <?php body_class(); ?>>


 <?php get_template_part('templates/header-top-navbar-other'); ?>
 <?php get_template_part('templates/content', 'page'); ?>

 <?php include roots_template_path(); ?>


 <?php get_template_part('templates/footer'); ?>

</body>
</html>