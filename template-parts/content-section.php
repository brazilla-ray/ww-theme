<section class="site-main-section">
  <?php if ( !( is_page( 'about' ) ) ) : ?>
  <header class="site-main-section-header">
    <h2>
      <?php echo $args['sectionTitle']; ?>
    </h2>
  </header><!-- site-main-section-header -->
  <?php endif ?>

  <div class="site-main-section-content"> 
    <?php
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', $args[templatePart] );
      endwhile;
    ?>
  </div><!--- site-main-section-content -->
</section><!-- site-main-section -->