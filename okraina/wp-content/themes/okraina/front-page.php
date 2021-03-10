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

get_header();
?>

<div class="corporate_network_fl" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
          <div class="corporate_network_left">
			<?php $hero = get_field('group_1');	
			if( $hero ): ?>
			            <div class="heshteg_dop"><?php echo $hero['heshteg']; ?></div>
			            <h1><?php echo $hero['title']; ?></h1>
			            <div class="p_dop"><?php echo $hero['sub_title']; ?></div>
			<?php endif; ?>
            <div class="flex_corporate_network">
            	<?php echo do_shortcode( '[contact-form-7 id="6" title="Контактная форма 1"]' ); ?>
            </div>
            <div class="p_dop_1">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных</div>
            <div class="heshteg_dop">#о нас в цифрах</div>
            <div class="flex_corporate_network_1">
              <div class="corporate_number_l">За
                <br>
                <span class="number_span">30</span>
                <br>
                <span class="days_span">дней</span>
                <br>Запуск
                <br>бизнеса
              </div>
              <div class="corporate_number_r">
                <div class="corporate_number_top">до
                  <br>
                  <span class="price_span">400 000 ₽</span>
                  <br>Чистая прибыль
                </div>
                <div class="corporate_number_bot">
                  <span class="six_span">6-12</span>
                  <span class="mounth_span"> месяцев</span>
                  <br>Окупаемость
                </div>
              </div>
            </div>
          </div>
          <div class="corporate_network_right">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_main.webp" alt="">
          </div>
        </div>
        <div class="corporate_network_image_block">
        	<?php $hero_1 = get_field('group_2');	
			if( $hero_1 ): ?>
			    <img src="<?php echo $hero_1['image_1']['url']; ?>" alt="<?php echo $hero_1['image_1']['alt']; ?>" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
			    <img src="<?php echo $hero_1['image_2']['url']; ?>" alt="<?php echo $hero_1['image_2']['alt']; ?>" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="800" data-aos-delay="350" data-aos-once="true">
			    <img src="<?php echo $hero_1['image_3']['url']; ?>" alt="<?php echo $hero_1['image_3']['alt']; ?>" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
			<?php endif; ?>
        </div>
      </div>
    </div>
    <div class="partnership" id="yak2">
      <div class="container">
        <div class="partnership_fl" data-aos="fade-right" data-aos-offset="400" data-aos-duration="1000" data-aos-once="true">
          <div class="partnership_left" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
          	<?php $hero_9 = get_field('group_9');
              		if( $hero_9 ): ?>
            <div class="partnership_left_txt_open"><?php echo $hero_9['my_uzhe_otkryli']; ?></div>
            <div class="partnership_left_txt_number"><?php echo $hero_9['kolichestvo_magazinov']; ?></div>
            <div class="partnership_left_txt_magazine"><?php echo $hero_9['magazinov']; ?></div>
            <div class="heshteg_grey"><?php echo $hero_9['onlajn-schyotchik']; ?></div>
            <a class="btn_main" id="pop" href="#text-popup" target="_blank">Стать партнёром</a>
            <?php endif; ?>
            <div id="text-popup" class="white-popup mfp-hide class_dop_1">
              <div class="pop_partnership">
                <div class="heshteg_black">#Мы готовы рассмотреть партнерство</div>
                <div class="partnership_p">Введите свои данные и мы Вам перезвоним</div>
                <div class="pop_great_3">
			    	<div class="cirle_ico"><svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 8.5L9.48 15L19 2" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
			    	<div class="heshteg_black">#спасибо</div>
			    	<div class="text_pop">Ваша заявка отправлена, мы перезвоним</div>
          		</div>
                <?php echo do_shortcode( '[contact-form-7 id="139" title="Форма в popup_1"]' ); ?>
                
                <div class="partnership_p_dop">*Нажимая на кнопку, вы даете согласие на обработку своих персональных данных</div>
              </div>
            </div>
          </div>
          <div class="partnership_right" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
          	<?php $hero_10 = get_field('group_10');
              		if( $hero_10 ): ?>
            <div class="heshteg_grey"><?php echo $hero_10['heshteg']; ?></div>
            <div class="oblast_block">
              <div class="oblast_block_l">
                <div class="murm_oblast"><?php echo $hero_10['murmanskaya_oblast']; ?></div>
                <div><?php echo $hero_10['sity_1']; ?></div>
                <div><?php echo $hero_10['sity_2']; ?></div>
                <div><?php echo $hero_10['sity_3']; ?></div>
                <div><?php echo $hero_10['sity_4']; ?></div>
              </div>
              <div class="oblast_block_r">
                <div class="len_oblast"><?php echo $hero_10['leningradskaya_oblast']; ?></div>
                <div class="len_oblast_flex">
                  <div class="len_oblast_column">
                    <div><?php echo $hero_10['sity_5']; ?></div>
                    <div><?php echo $hero_10['sity_6']; ?></div>
                    <div><?php echo $hero_10['sity_7']; ?></div>
                    <div><?php echo $hero_10['sity_8']; ?></div>
                    <div><?php echo $hero_10['sity_9']; ?></div>
                  </div>
                  <div class="len_oblast_column">
                    <div><?php echo $hero_10['sity_10']; ?></div>
                    <div><?php echo $hero_10['sity_11']; ?></div>
                    <div><?php echo $hero_10['sity_12']; ?></div>
                    <div><?php echo $hero_10['sity_13']; ?></div>
                  </div>
                  <div class="len_oblast_column">
                    <div><?php echo $hero_10['sity_14']; ?></div>
                    <div><?php echo $hero_10['sity_15']; ?></div>
                    <div><?php echo $hero_10['sity_16']; ?></div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="about" id="yak1">
      <div class="container">
        <div class="about_fl" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
          <?php $hero_3 = get_field('group_3');	
				if( $hero_3 ): ?>
          <img src="<?php echo $hero_3['image_group_3']['url']; ?>" alt="">
          <div class="about_right">
            <section data-scrollbar id="my-scrollbar">
              <div class="scroll-content">
					<div class="heshteg_black"><?php echo $hero_3['heshteg_group_3']; ?></div>
	                <div class="p_main"><?php echo $hero_3['text_group_3']; ?></div>
				<?php endif; ?>
              </div>
              <div class="scrollbar-track scrollbar-track-y">
                <div class="scrollbar-thumb scrollbar-thumb-y"></div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="model">
      <div class="parallax_2" id="scene_2">
        <img class="paralax_2_1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_2_1.png" alt="" data-depth="1.5">
        <img class="paralax_2_2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_2_2.png" alt="" data-depth="1.6">
        <img class="paralax_2_3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_2_3.png" alt="" data-depth="1.7">
      </div>
      <div class="container">
        <div class="model_fl" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true" id="scroll">
          <?php $hero_4 = get_field('group_4');	
				if( $hero_4 ): ?>
          <div class="model_fl_money"><?php echo $hero_4['title_group_4']; ?>
            <br>
            <span class="number"><?php echo $hero_4['text_group_4']; ?></span>
          </div>
          <?php endif; ?>
          <?php $hero_5 = get_field('group_5');	
				if( $hero_5 ): ?>
          <div class="model_fl_royal"><?php echo $hero_5['title_group_5']; ?>
            <br>
            <span class="number"><?php echo $hero_5['text_group_5']; ?></span>
          </div>
          <?php endif; ?>
          <?php $hero_6 = get_field('group_6');	
				if( $hero_6 ): ?>
          <div class="model_fl_home"><?php echo $hero_6['title_group_6']; ?><span>
              </spa>
              <span class="txt">от</span>
              <span class="number"><?php echo $hero_6['text_group_6']; ?></span>
              <span class="txt">м2</span>
            </span>
          </div>
          <?php endif; ?>
          <a class="btn_main" id="linkHref" href="#yak5" target="_blank">Получить финансовую модель</a>
        </div>
        <div class="model_fl_1">
          <div class="model_block_l" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true" id="scroll_2">
            <div class="model_block_l_cart">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Rectangle 22.png" alt="">
              <div class="corner">
              	<?php $hero_7 = get_field('group_7');
              		if( $hero_7 ): ?>
                <div class="corner_block_title">
                  <div class="corner_title"><?php echo $hero_7['firmennyj_zagolovok']; ?></div>
                  <div class="corner_metr">
                    <span class="number"><?php echo $hero_7['firmennyj_m2']; ?></span>
                    <span class="txt">м2</span>
                  </div>
                </div>
                <div class="corner_block_rows">
                  <div class="row"><?php echo $hero_7['vlozheniya']; ?><span class="bold_600"><?php echo $hero_7['stoimost']; ?> тыс. р.</span>
                  </div>
                  <hr>
                  <br>
                  <div class="row"><?php echo $hero_7['oborudovanie']; ?><span class="bold_600"><?php echo $hero_7['stoimost_1']; ?> тыс. р.</span>
                  </div>
                  <div class="row"><?php echo $hero_7['oformlenie_interer']; ?><span class="bold_600"><?php echo $hero_7['stoimost_2']; ?> тыс. р.</span>
                  </div>
                  <div class="row"><?php echo $hero_7['tovarnoe_napolnenie']; ?><span class="bold_600"><?php echo $hero_7['stoimost_3']; ?> тыс. р.</span>
                  </div>
                  <div class="row"><?php echo $hero_7['paushalnyj_vznos']; ?><span class="bold_600"><?php echo $hero_7['stoimost_4']; ?> тыс. р.</span>
                  </div>
                  <br>
                  <br>
                  <div class="row_1"><?php echo $hero_7['chistaya_pribyl']; ?><span class="bold_600_green"><?php echo $hero_7['stoimost_5']; ?> ₽</span>
                  </div>
                  <div class="row_1"><?php echo $hero_7['srok_okupaemosti']; ?><span class="bold_600_green"><?php echo $hero_7['stoimost_6']; ?> месяцев</span>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <a class="btn_main" href="#yak5" target="_blank">Получить финансовую модель</a>
          </div>
          <div class="model_block_r" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true" id="scroll_3">
            <div class="model_block_r_cart">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Rectangle 24.png" alt="">
              <div class="magazine">
              	<?php $hero_8 = get_field('group_8');
              		if( $hero_8 ): ?>
                <div class="magazine_block_title">
                  <div class="magazine_title"><?php echo $hero_8['firmennyj_zagolovok']; ?></div>
                  <div class="magazine_metr">
                    <span class="number"><?php echo $hero_8['firmennyj_m2']; ?></span>
                    <span class="txt">м2</span>
                  </div>
                </div>
                <div class="magazine_block_rows">
                  <div class="row"><?php echo $hero_8['vlozheniya']; ?><span class="bold_600"><?php echo $hero_8['stoimost']; ?> тыс. р.</span>
                  </div>
                  <hr>
                  <br>
                  <div class="row"><?php echo $hero_8['oborudovanie']; ?><span class="bold_600"><?php echo $hero_8['stoimost_1']; ?> тыс. р.</span>
                  </div>
                  <div class="row"><?php echo $hero_8['oformlenie_interer']; ?><span class="bold_600"><?php echo $hero_8['stoimost_2']; ?> тыс. р.</span>
                  </div>
                  <div class="row"><?php echo $hero_8['tovarnoe_napolnenie']; ?><span class="bold_600"><?php echo $hero_8['stoimost_3']; ?> тыс. р.</span>
                  </div>
                  <div class="row"><?php echo $hero_8['paushalnyj_vznos']; ?><span class="bold_600"><?php echo $hero_8['stoimost_4']; ?> тыс. р.</span>
                  </div>
                  <br>
                  <br>
                  <div class="row_1"><?php echo $hero_8['chistaya_pribyl']; ?><span class="bold_600_green"><?php echo $hero_8['stoimost_5']; ?> ₽</span>
                  </div>
                  <div class="row_1"><?php echo $hero_8['srok_okupaemosti']; ?><span class="bold_600_green"><?php echo $hero_8['stoimost_6']; ?> месяцев</span>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <a class="btn_main" href="#yak5" target="_blank">Получить финансовую модель</a>
          </div>
        </div>
      </div>
    </div>
    <div class="success_story" id="yak3">
      <div class="container">
        <div class="slider-for">
        <?php if( have_rows('slider') ): ?>
			<?php while( have_rows('slider') ): the_row(); 
				// переменные
				$image = get_sub_field('img_slider');
				$title = get_sub_field('title_slider');
				$text = get_sub_field('suv_title_slider');
				?>
				<a class="slider-dop">
		            <div class="fl_1">
		              <img src="<?php echo $image['url']; ?>">
		              <div class="fl_2">
		                <div class="success_story_title_1">
		                  <div class="heshteg_black">#Истории успеха</div>
		                  <button class="btn_main" id="pop_1" href="#text-popup_1">
		                    <div class="circle_plus">+</div>
		                    <div class="btn_main_txt">Присоединиться</div>
		                  </button>
		                </div>
		                <div class="success_story_title_2">
		                  <div class="block_title">
		                    <span><?php echo $title; ?></span>
		                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/99.svg" alt="">
		                  </div>
		                  <div class="p_main"><?php echo $text; ?></div>
		                </div>
		              </div>
		            </div>
		        </a>
			<?php endwhile; ?>
		<?php endif; ?>
        </div>
        <div class="pop_great">
        	<div class="cirle_ico"><svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 8.5L9.48 15L19 2" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          	<div class="heshteg_black">#спасибо</div>
          	<div class="text_pop">Ваша заявка отправлена, мы перезвоним</div>
        </div>
        <div id="text-popup_1" class="white-popup mfp-hide class_dop">
          <div class="pop_partnership">
            <div class="heshteg_black">#Мы готовы рассмотреть партнерство</div>
            <div class="partnership_p">Введите свои данные и мы Вам перезвоним</div>
            <div class="pop_great_2">
		    	<div class="cirle_ico"><svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 8.5L9.48 15L19 2" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
		    	<div class="heshteg_black">#спасибо</div>
		    	<div class="text_pop">Ваша заявка отправлена, мы перезвоним</div>
          	</div>
            <?php echo do_shortcode( '[contact-form-7 id="139" title="Форма в popup_1"]' ); ?>
            <div class="pop_great">
	        	<div class="cirle_ico"><svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 8.5L9.48 15L19 2" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
	          	<div class="heshteg_black">#спасибо</div>
	          	<div class="text_pop">Ваша заявка отправлена, мы перезвоним</div>
        	</div>
            <div class="partnership_p_dop">*Нажимая на кнопку, вы даете согласие на обработку своих <span>персональных данных</span>
            </div>
          </div>
          
        </div>
        <div id="text-popup_2" class="white-popup mfp-hide">
          <div class="pop_partnership">
            <div class="heshteg_black">#Мы готовы рассмотреть партнерство</div>
            <div class="partnership_p">Введите свои данные и мы Вам перезвоним</div>
            <form>
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.99996 9.78131C12.2236 9.78131 14.0264 7.59171 14.0264 4.89069C14.0264 2.1896 13.4345 0 9.99996 0C6.56539 0 5.97339 2.1896 5.97339 4.89069C5.97339 7.59171 7.77619 9.78131 9.99996 9.78131Z" fill="#4D434B" />
                <path d="M2.39483 17.2489C2.39415 17.0842 2.39346 17.2025 2.39483 17.2489V17.2489Z" fill="#4D434B" />
                <path d="M17.605 17.3774C17.6071 17.3323 17.6057 17.0646 17.605 17.3774V17.3774Z" fill="#4D434B" />
                <path d="M17.5963 17.0512C17.5217 12.3459 16.9072 11.0052 12.2048 10.1565C12.2048 10.1565 11.5428 11 9.99997 11C8.45712 11 7.79506 10.1565 7.79506 10.1565C3.14392 10.9959 2.49203 12.3168 2.40632 16.8983C2.39929 17.2724 2.39603 17.2921 2.39478 17.2487C2.39506 17.33 2.3954 17.4806 2.3954 17.743C2.3954 17.743 3.51495 19.9999 9.99997 19.9999C16.4849 19.9999 17.6045 17.743 17.6045 17.743C17.6045 17.5744 17.6047 17.4571 17.6048 17.3774C17.6036 17.4042 17.6011 17.3522 17.5963 17.0512Z" fill="#4D434B" />
              </svg>
              <input type="text">
            </form>
            <form>
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                  <path d="M17.5102 13.2102L14.9983 10.6982C14.1012 9.80111 12.576 10.16 12.2172 11.3262C11.948 12.1337 11.0509 12.5822 10.2435 12.4028C8.44925 11.9542 6.02701 9.62168 5.57845 7.73772C5.30931 6.93027 5.84759 6.03314 6.655 5.76404C7.82127 5.40519 8.18012 3.88007 7.28299 2.98295L4.77104 0.470991C4.05334 -0.156997 2.97678 -0.156997 2.3488 0.470991L0.644257 2.17553C-1.06028 3.96978 0.823682 8.72455 5.04018 12.941C9.25667 17.1575 14.0114 19.1313 15.8057 17.337L17.5102 15.6324C18.1383 14.9147 18.1383 13.8382 17.5102 13.2102Z" fill="#4D434B" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="18" height="18" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <input type="tel">
            </form>
            <div class="btn_main">Отправить заявку</div>
            <div class="partnership_p_dop">*Нажимая на кнопку, вы даете согласие на обработку своих <span>персональных данных</span>
            </div>
          </div>
        </div>
        <div id="text-popup_3" class="white-popup mfp-hide">
          <div class="pop_partnership">
            <div class="heshteg_black">#Мы готовы рассмотреть партнерство</div>
            <div class="partnership_p">Введите свои данные и мы Вам перезвоним</div>
            <form>
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.99996 9.78131C12.2236 9.78131 14.0264 7.59171 14.0264 4.89069C14.0264 2.1896 13.4345 0 9.99996 0C6.56539 0 5.97339 2.1896 5.97339 4.89069C5.97339 7.59171 7.77619 9.78131 9.99996 9.78131Z" fill="#4D434B" />
                <path d="M2.39483 17.2489C2.39415 17.0842 2.39346 17.2025 2.39483 17.2489V17.2489Z" fill="#4D434B" />
                <path d="M17.605 17.3774C17.6071 17.3323 17.6057 17.0646 17.605 17.3774V17.3774Z" fill="#4D434B" />
                <path d="M17.5963 17.0512C17.5217 12.3459 16.9072 11.0052 12.2048 10.1565C12.2048 10.1565 11.5428 11 9.99997 11C8.45712 11 7.79506 10.1565 7.79506 10.1565C3.14392 10.9959 2.49203 12.3168 2.40632 16.8983C2.39929 17.2724 2.39603 17.2921 2.39478 17.2487C2.39506 17.33 2.3954 17.4806 2.3954 17.743C2.3954 17.743 3.51495 19.9999 9.99997 19.9999C16.4849 19.9999 17.6045 17.743 17.6045 17.743C17.6045 17.5744 17.6047 17.4571 17.6048 17.3774C17.6036 17.4042 17.6011 17.3522 17.5963 17.0512Z" fill="#4D434B" />
              </svg>
              <input type="text">
            </form>
            <form>
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                  <path d="M17.5102 13.2102L14.9983 10.6982C14.1012 9.80111 12.576 10.16 12.2172 11.3262C11.948 12.1337 11.0509 12.5822 10.2435 12.4028C8.44925 11.9542 6.02701 9.62168 5.57845 7.73772C5.30931 6.93027 5.84759 6.03314 6.655 5.76404C7.82127 5.40519 8.18012 3.88007 7.28299 2.98295L4.77104 0.470991C4.05334 -0.156997 2.97678 -0.156997 2.3488 0.470991L0.644257 2.17553C-1.06028 3.96978 0.823682 8.72455 5.04018 12.941C9.25667 17.1575 14.0114 19.1313 15.8057 17.337L17.5102 15.6324C18.1383 14.9147 18.1383 13.8382 17.5102 13.2102Z" fill="#4D434B" />
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="18" height="18" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <input type="tel">
            </form>
            <div class="btn_main">Отправить заявку</div>
            <div class="partnership_p_dop">*Нажимая на кнопку, вы даете согласие на обработку своих <span>персональных данных</span>
            </div>
          </div>
        </div>
        <div class="flex_slider_nav">
          <div class="slider-nav">
          	
			<?php if( have_rows('slider') ): ?>
				<?php while( have_rows('slider') ): the_row(); 
					$image = get_sub_field('img_slider');
					$title = get_sub_field('title_slider');
					?>
					 <a class="sl">
			            <img src="<?php echo $image['url']; ?>" alt="">
			            <div class="slider-nav_title"><?php echo $title; ?></div>
		            </a>
				<?php endwhile; ?>
			<?php endif; ?>
          </div>
          <div class="slider-nav-btn">
            <a class="arrow_prev">
              <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.93402e-07 8L13.5 15.7942L13.5 0.205771L3.93402e-07 8Z" fill="white" />
              </svg>
            </a>
            <a class="arrow_next">
              <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 8L0.499999 15.7942L0.5 0.205771L14 8Z" fill="white" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="news">
      <div class="parallax_3" id="scene_3">
        <img class="paralax_3_1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_3_1.png" alt="" data-depth="1.2">
        <img class="paralax_3_2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_3_2.png" alt="" data-depth="1.3">
        <img class="paralax_3_3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_3_3.png" alt="" data-depth="1.4">
        <img class="paralax_3_4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_3_4.png" alt="" data-depth="1.2">
        <img class="paralax_3_5" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_3_5.png" alt="" data-depth="1.3">
        <img class="paralax_3_6" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_3_6.png" alt="" data-depth="1.4">
        <img class="paralax_3_7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/paralax_3_7.png" alt="" data-depth="1.2">
      </div>
      <div class="container" id="yak4">
        <div class="heshteg_black">#новости</div>
        <div class="news_blocks">
        <?php $args = array(
			'post_type'      => 'post',
			'posts_per_page' => 4,
			'orderby'        => 'date',
			'order'          => 'DESC',
		);
		$q = new WP_Query($args);
		?>

		<?php if ( $q->have_posts() ) : ?>
			<?php while ( $q->have_posts() ) : $q->the_post(); ?>
				<div class="news_block" data-aos="zoom-in" data-aos-offset="200" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
		            <a>
		              <?php the_post_thumbnail('full'); ?>
		            </a>
		            <a class="news_block_title"><?php the_title(); ?></a>
		            <div class="p_main"><?php the_excerpt(); ?></div>
		            <a class="news_block_btn" id="e_<?php echo $с; $с++; ?>" href="#p_<?php echo $k; ?>">
		              <div class="news_block_btn_txt">Посмотреть</div>
		              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/witness_1.svg" alt="">
		            </a>
		        </div>
		        <div id="p_<?php echo $k; $k++; ?>" class="white-popup_1 mfp-hide">
		            <div class="pop_news">
		              <div class="pop_news_fl">
		                <div class="pop_news_fl_l">
		                  <?php echo get_the_post_thumbnail() ?>
		                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pop_1.png" alt="">
		                </div>
		                <div class="pop_news_fl_r">
		                  <div class="pop_news_fl_r_title"><?php the_title(); ?></div>
		                  <div class="pop_news_fl_r_txt"><?php the_excerpt(); ?></div>
		                </div>
		              </div>
		              <p class="pop_news_fl_p"> <?php the_content(); ?></p>
		            </div>
          		</div>
			<?php endwhile; wp_reset_postdata(); ?>
		<?php endif; ?>
        </div>
        <div class="join_fl" id="yak5">
          <div class="pop_great_1">
		    	<div class="cirle_ico"><svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 8.5L9.48 15L19 2" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
		    	<div class="heshteg_black">#спасибо</div>
		    	<div class="text_pop">Ваша заявка отправлена, мы перезвоним</div>
          </div>
          <div class="join_block_l">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/join_img.webp" alt="">
          </div>
          <div class="join_block_r" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
          	<?php $hero_11 = get_field('group_11');
              	if( $hero_11 ): ?>
            <div class="heshteg_grey"><?php echo $hero_11['heshteg']; ?></div>
            <div class="join_block_r_title"><?php echo $hero_11['title']; ?></div>
            <div class="p_main"><?php echo $hero_11['vopros']; ?></div>
            <span class="telefone"><?php echo $hero_11['phone']; ?></span>
            <div class="p_main_fl">
              <div class="p_main">Или напишите нам сейчас:</div>
              <span class="email"><?php if(!dynamic_sidebar('mail-fotter')); ?></span>
            </div>
            <div class="flex">
            	<?php echo do_shortcode( '[contact-form-7 id="137" title="Контактная форма 2"]' ); ?>
            	
            </div>
            <div class="p_dops">Нажимая на кнопку, вы даете согласие на обработку своих <span>персональных данных</span>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

<?php
get_footer();
