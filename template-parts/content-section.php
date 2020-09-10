<section class="main-section">
  <?php if ( !( is_page( 'about' ) ) ) : ?>
  <header class="main-section-title">
    <h2 class="main-section-title__heading">
      <?php echo $args['sectionTitle']; ?>
    </h2>
  </header><!-- main-section__header -->
  <?php endif ?>

  <div class="main-section-content"> 
    <?php
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', $args[templatePart] );
      endwhile;
    ?>
  </div><!--- main-section__content -->
</section><!-- main-section -->