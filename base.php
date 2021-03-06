<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
  ?>

  <div class="off-canvas-wrap">
    <div class="inner-wrap">

      <div class="page-wrap">
        <?php
          //get_template_part('templates/header');
        ?>
        <?php get_template_part('templates/teaser-element'); ?>

        <div class="container" role="document">
          <div class="content row">
            <main class="main" role="main">
              <?php include roots_template_path(); ?>
            </main><!-- /.main -->

          </div><!-- /.content -->
        </div><!-- /.wrap -->

      </div>

      <?php get_template_part('templates/footer'); ?>
    </div>
  </div>

</body>
</html>
