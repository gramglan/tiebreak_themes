<?php get_header(); ?>


	<div class="top-contents">


	</div>


	<main id="box">

		<div class="main">
			<h2 class="p-top-company-title" data-aos="fade-up">
				Company
			</h2>
			<p class="p-top-company-read" data-aos="fade-up">
				”笑顔”の輪を拡げたい… その想いを心に抱いて。<br>
				私たちは『地域に密着した笑顔あふれる店舗』創りと『一人ひとりの笑顔を実現していく人材サポート』を通じて多くの人々の笑顔を実現することを目指します。
			</p>
			<div class="mod_flex -col2 -mb24">
				<div class="mod_colitem" data-aos="fade-up">
					<a href="/company/#interview" class=" -pd8">
						<img src="<?php bloginfo('template_directory'); ?>/base/img/top-message.png">
					</a>
				</div>
				<div class="mod_colitem">
					<a href="/company" class=" -pd8" data-aos="fade-up">
						<img src="<?php bloginfo('template_directory'); ?>/base/img/top-company.png">
					</a>
					<a href="/shop" class=" -pd8" data-aos="fade-up">
						<img src="<?php bloginfo('template_directory'); ?>/base/img/top-shoplist.png">
					</a>
				</div>

			</div>

			<h2 class="p-top-recruit-title" data-aos="fade-up">
				<i class="icon -hand"></i>
				Recruit
			</h2>

			<div class="mod_flex -col2">
				<div class="mod_colitem" data-aos="fade-up">
					<a href="/recruit#regular" target="_blank" class=" -pd8">
						<img src="<?php bloginfo('template_directory'); ?>/base/img/top-recruit-1.png">
						<p class="-center -bk -pd8">正社員採用</p>
					</a>
				</div>
				<div class="mod_colitem" data-aos="fade-up">
					<a href="/recruit#contract" target="_blank" class=" -pd8">
						<img src="<?php bloginfo('template_directory'); ?>/base/img/top-recruit-3.png">
						<p class="-center -bk -pd8">契約社員採用</p>
					</a>
				</div>
				<div class="mod_colitem" data-aos="fade-up">
					<a href="/recruit#part_time" target="_blank" class=" -pd8">
						<img src="<?php bloginfo('template_directory'); ?>/base/img/top-recruit-2.png">
						<p class="-center -bk -pd8">アルバイト採用</p>
					</a>
				</div>

			</div>


			<h2 class="p-top-news-title" data-aos="fade-up">
				<i class="icon -new"></i>
				News
			</h2>

			<ul class="mod-news-list">

				<?php
				$args = array(
					'post_type' => 'news',
					'numberposts' => 4,
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) { // 該当する投稿があったら
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
				?>
					<li class="mod-news-list-item mod-recruit-list-item" data-aos="fade-up">
						<a href="<?php the_permalink(); ?>">
							<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
							<p><?php the_title(); ?></p>
						</a>
						<?php $ctm = get_field('movie_id');?>
						<?php if(empty($ctm)):?>

						<?php else:?>
							<a href="#" class="btn-movie js-video-button" data-video-id='<?php echo $ctm;?>'>
								動画を見る
							</a>
						<?php endif;?>
					</li>

				<?php
					endforeach;
				}  else {
				}
				wp_reset_postdata();
				?>
			</ul>

		</div>

		<aside class="side">

			<!-- [recommend products] -->
			<div class="mod-recommend-products" data-aos="fade-up">
				<figure>
					<img src="<?php the_field('recommend_p_img','option'); ?>" alt="><?php the_field('recommend_p_text','option'); ?>">
					<figcaption>
						<span>オススメ</span>
						<h4>
						<?php the_field('recommend_p_text','option'); ?></h4>
					</figcaption>
				</figure>
			</div>

			<div class="tb-col2">
			<!-- [holiday] -->
			<div class="mod-side-diary" data-aos="fade-up">
				<h3 class="mod-side-diary-title -holiday">
					Holiday Daiary
				</h3>
				<div class="mod-side-diary-subtitle -holiday">
					<span class=" -holiday">みんなのお休み日記</span>
				</div>
				<?php
				$args = array(
					'post_type' => 'holiday',
					'numberposts' => 1,
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) { // 該当する投稿があったら
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
				?>
				<ul class="owl">
					<li class="item">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">
							<p><?php the_title(); ?></p>
							<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
						</a>
					</li>

				</ul>
				<?php
					endforeach;
				}  else {
				}
				wp_reset_postdata();
				?>


				<div class="mod-side-diary-more -holiday">
					<a href="/holiday">
						<i  class="icon -arrowright"></i>
						<span>みんなのお休み日記をもっとみる</span>
					</a>
				</div>
			</div>

			<!-- [growup] -->
			<div class="mod-side-diary" data-aos="fade-up">
				<h3 class="mod-side-diary-title -growup">
					Growup Daiary
				</h3>
				<div class="mod-side-diary-subtitle -growup">
					<span class=" -growup">みんなの成長日記</span>
				</div>

				<?php
				$args = array(
					'post_type' => 'growup',
					'numberposts' => 1,
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) { // 該当する投稿があったら
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
				?>
				<ul class="owl">
					<li class="item">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">
							<p><?php the_title(); ?></p>
							<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
						</a>
					</li>

				</ul>
				<?php
					endforeach;
				}  else {
				}
				wp_reset_postdata();
				?>

				<div class="mod-side-diary-more -growup">
					<a href="/growup">
						<i  class="icon -arrowright"></i>
						<span>みんなの成長日記をもっとみる</span>
					</a>
				</div>
			</div>

			</div>

		</aside>

	</main>

<style>
.mod-recruit-list-item{background: none;}
.mod-recruit-list-item a{border: none;}
</style>

<?php get_footer();?>
