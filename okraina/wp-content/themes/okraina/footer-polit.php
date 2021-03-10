<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package okraina
 */

?>
</main>
  <div class="fotter_1">
    <div class="container">
      <div class="fotter_block_1">
        <div class="fotter_title">Отдел франчайзинга:</div>
        <div class="fotter_tell">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fott_tell.svg" alt="">
          <?php if(!dynamic_sidebar('phone-fotter-1')); ?>
        </div>
        <div class="fotter_tell">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fott_tell.svg" alt="">
          <?php if(!dynamic_sidebar('phone-fotter-2')); ?>
        </div>
        <div class="fotter_mail">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fott_mail.svg" alt="">
          <?php if(!dynamic_sidebar('mail-fotter')); ?>
        </div>
      </div>
      <div class="fotter_block_2">
        <div class="fotter_title">Предложить помещение:</div>
        <div class="fotter_tell">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fott_tell.svg" alt="">
          <?php if(!dynamic_sidebar('phone-fotter-3')); ?>
        </div>
      </div>
      <div class="fotter_block_3">
        <div class="fotter_social">
          <?php $hero_12 = get_field('header_social_ico');
            if( $hero_12 ): ?>
          <a class="social-f" href="<?php echo $hero_12['link_1']; ?>" target="_blank">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook_w.svg" alt="">
          </a>
          <a class="social-vk" href="<?php echo $hero_12['link_2']; ?>" target="_blank">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/vk_w.svg" alt="">
          </a>
          <a class="social-inst" href="<?php echo $hero_12['link_3']; ?>" target="_blank">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/instagram_w.svg" alt="">
          </a>
          <a class="social-yt" href="<?php echo $hero_12['link_4']; ?>" target="_blank">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/youtube_w.svg" alt="">
          </a>
          <?php endif; ?>
        </div>
        <div class="fotter_reserch">© 2006 - 2021 Окраина</div>
        <a class="fotter_politics" href="http://okraina.cms.demopro.ga/privacy-policy/">Политика конфиденциальности</a>
      </div>
    </div>
    <div class="mnogolan">
      <a href="https://mnogoland.ru/">Разработано студией MNOGOLAND</a>
    </div>
  </div>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/common.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/libs.js"></script>
</body>
</html>
