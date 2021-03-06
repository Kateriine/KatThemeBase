<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * @package   WordPress
 * @subpackage  Adam
 */
?>
<?php Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="uk-container uk-container-center">
  <main role="main">
    <?php if ( have_posts() ): ?>
    <h1>Latest Posts</h1>

    <div class="uk-grid" data-uk-grid-margin>

    <?php while ( have_posts() ) : the_post(); ?>
      <div class="uk-width-medium-1-3">
        <article class="uk-article">
          <h2 class="uk-article-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <div class="uk-article-meta">
            <?php echo custom_date();?>
          </div>
          <?php the_content(); ?>
        </article>
      </div>

    <?php endwhile; ?>
    </div>
    <?php else: ?>
    <h1>No posts to display</h1>
    <?php endif; ?>
  </main>
</div>
<?php Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
