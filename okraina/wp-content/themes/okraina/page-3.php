<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package okraina
 */

get_header(polit);
?>
	<div class="politics">
      <div class="container">
        <a class="politics_btn" id="linkHref" href="<?php echo home_url(); ?>">
          <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.62268e-07 6L9 11.1962L9 0.803847L2.62268e-07 6Z" fill="white" />
          </svg>
          <span>назад</span>
        </a>
        <?php $hero_13 = get_field('group_12');
            if( $hero_13 ): ?>
        <div class="heshteg_black"><?php echo $hero_13['heshteg']; ?></div>
        <div class="p_main"><?php echo $hero_13['sity']; ?><br><?php echo $hero_13['date']; ?><br><br><?php echo $hero_13['text']; ?></div>
        <div class="heshteg_green"><?php echo $hero_13['title']; ?></div>
        <div class="p_main"><?php echo $hero_13['main_text']; ?></div>
        <?php endif; ?>
      </div>
    </div>
<?php
get_footer(polit);