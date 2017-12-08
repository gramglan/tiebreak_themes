<aside id="common-side">

		<div class="mod_flex -col3">


			<!-- [recommend products] -->
			<div class=" mod_colitem" data-aos="fade-up">
				<div class="mod-recommend-products">
					<figure>
						<img src="<?php the_field('recommend_p_img','option'); ?>" alt="><?php the_field('recommend_p_text','option'); ?>">
						<figcaption>
							<span>オススメ</span>
							<h4><?php the_field('recommend_p_text','option'); ?></h4>
						</figcaption>
					</figure>
				</div>

				<!--div class="service-link">
					<a href="http://www.ministop.co.jp/" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/base/img/ministop.jpg" alt="ミニストップ">
					</a>
				</div-->

			</div>

			<!-- [holiday] -->
			<div class="mod-side-diary mod_colitem" data-aos="fade-up">
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
							<p><?php echo mb_substr($post->post_title, 0, 14).'……'; ?></p>
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
			<div class="mod-side-diary mod_colitem" data-aos="fade-up">
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
							<p><?php echo mb_substr($post->post_title, 0, 14).'……'; ?></p>
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
