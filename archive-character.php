<?php get_header(); ?>
<div id="contents" class="chara">
<!-- [ contents/ ] -->

<?php get_template_part('/module/_menu'); ?>




<?php if(is_mobile()): ?>
<div id="pagepiling" >

	<div class="ch-menu">
		<h2 class="mod-page-title -ch" data-aos="fade-up">///// Character</h2>
		<ul class="mod-sp-ch-menu">
			<li data-aos="fade-up"><a href="#yoshida-justice"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-1.png"></a></li>
			<li data-aos="fade-up"><a href="#justice-league"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-2.png"></a></li>
			<li data-aos="fade-up"><a href="#super-villan"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-3.png"></a></li>
			<li data-aos="fade-up"><a href="#takanotumedan"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-4.png"></a></li>
			<li data-aos="fade-up"><a href="#shinnyushiain"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-5.png"></a></li>
			<li data-aos="fade-up"><a href="#cast-staff"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-6.png"></a></li>
		</ul>
	</div>

	<!-- 吉田ジャスティス -->
	<a id="yoshida-justice" class="ancker"></a>
	<div class="section p-chara-bg-1" id="section1">
		<h2 class="mod-character-title" data-aos="fade-up"><img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-yoshida.png" alt=""></h2>
		<ul class="mod-character-list">
			<?php
			$args = array(
				'post_type' => 'character',
				'numberposts' => -1,
				'order' => 'ASC',
				'tax_query' => array(
					array(
							'taxonomy' => 'character_group', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => array( 'yoshida_justice' ) //表示したいタームをスラッグで指定
					),
				),
			);
			$my_posts = get_posts( $args );
			if ( $my_posts ) { // 該当する投稿があったら
				foreach ( $my_posts as $post ) :
					setup_postdata( $post );
					?>
		<?php get_template_part('/module/list_ch_sp'); ?>
							<?php
				endforeach;
			}  else {
			}
			wp_reset_postdata();
			?>
		</ul>
	</div>

	<!-- ジャスティスリーグ -->
	<a id="justice-league" class="ancker"></a>
	<div class="section p-chara-bg-2" id="section2">
		<h2 class="mod-character-title" data-aos="fade-up">
			<img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-justice.png" alt="">
		</h2>
		<ul class="mod-character-list">
			<?php
			$args = array(
				'post_type' => 'character',
				'numberposts' => -1,
				'order' => 'ASC',
				'tax_query' => array(
					array(
							'taxonomy' => 'character_group', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => array( 'justice_league' ) //表示したいタームをスラッグで指定
					),
				),
			);
			$my_posts = get_posts( $args );
			if ( $my_posts ) { // 該当する投稿があったら
				foreach ( $my_posts as $post ) :
					setup_postdata( $post );
					?>
		<?php get_template_part('/module/list_ch_sp'); ?>
							<?php
				endforeach;
			}  else {
			}
			wp_reset_postdata();
			?>
		</ul>
	</div>

	<!-- スーパーヴィラン -->
	<a id="super-villan" class="ancker"></a>
	<div class="section p-chara-bg-3" id="section3">
		<h2 class="mod-character-title" data-aos="fade-up">
			<img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-villan.png" alt="">
		</h2>
		<ul class="mod-character-list">
			<?php
			$args = array(
				'post_type' => 'character',
				'numberposts' => -1,
				'order' => 'ASC',
				'tax_query' => array(
					array(
							'taxonomy' => 'character_group', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => array( 'super_villan' ) //表示したいタームをスラッグで指定
					),
				),
			);
			$my_posts = get_posts( $args );
			if ( $my_posts ) { // 該当する投稿があったら
				foreach ( $my_posts as $post ) :
					setup_postdata( $post );
					?>
		<?php get_template_part('/module/list_ch_sp'); ?>
							<?php
				endforeach;
			}  else {
			}
			wp_reset_postdata();
			?>
		</ul>
	</div>

	<!-- 鷹の爪団 -->
	<a id="takanotumedan" class="ancker"></a>
	<div class="section p-chara-bg-4" id="section4">
		<h2 class="mod-character-title" data-aos="fade-up">
			<img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-takano.png" alt="">
		</h2>
		<ul class="mod-character-list">
			<?php
			$args = array(
				'post_type' => 'character',
				'numberposts' => -1,
				'order' => 'ASC',
				'tax_query' => array(
					array(
							'taxonomy' => 'character_group', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => array( 'takanotumedan' ) //表示したいタームをスラッグで指定
					),
				),
			);
			$my_posts = get_posts( $args );
			if ( $my_posts ) { // 該当する投稿があったら
				foreach ( $my_posts as $post ) :
					setup_postdata( $post );
					?>
		<?php get_template_part('/module/list_ch_sp'); ?>
							<?php
				endforeach;
			}  else {
			}
			wp_reset_postdata();
			?>
		</ul>
	</div>

	<!-- 新入社員 -->
	<a id="shinnyushiain" class="ancker"></a>
	<div class="section p-chara-bg-5" id="section5">
		<h2 class="mod-character-title" data-aos="fade-up">
			<img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-shin.png" alt="">
		</h2>
		<ul class="mod-character-list">
			<?php
			$args = array(
				'post_type' => 'character',
				'numberposts' => -1,
				'order' => 'ASC',
				'tax_query' => array(
					array(
							'taxonomy' => 'character_group', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => array( 'shinnyushiain' ) //表示したいタームをスラッグで指定
					),
				),
			);
			$my_posts = get_posts( $args );
			if ( $my_posts ) { // 該当する投稿があったら
				foreach ( $my_posts as $post ) :
					setup_postdata( $post );
					?>
		<?php get_template_part('/module/list_ch_sp'); ?>
							<?php
				endforeach;
			}  else {
			}
			wp_reset_postdata();
			?>
		</ul>
	</div>

	<a id="cast-staff" class="ancker"></a>
	<div class="section p-chara-bg-6" id="section6">

		<h2 data-aos="fade-up">///// STAFF</h2>
		<p data-aos="fade-up">
			監督・脚本・声の出演	FROGMAN<br>
			アニメーション	DLE／白組／GONZO<br>
			配給	ワーナー・ブラザース映画<br>
			音楽	近日公開
		</p>
	</div>
</div>
<?php get_template_part('/module/_foot'); ?>


<?php else: //PCMODE ?>



	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/base/css/ajax/jquery.pagepiling.min.css">

	<ul id="ch-menu">
			<li data-menuanchor="page1" class="active"><a href="#yoshida-justice"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-1.png"></a></li>
			<li data-menuanchor="page2"><a href="#justice-league"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-2.png"></a></li>
			<li data-menuanchor="page3"><a href="#super-villan"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-3.png"></a></li>
			<li data-menuanchor="page4"><a href="#takanotumedan"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-4.png"></a></li>
			<li data-menuanchor="page5"><a href="#shinnyushiain"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-5.png"></a></li>
			<li data-menuanchor="page6"><a href="#cast-staff"><img src="<?php bloginfo('template_directory'); ?>/base/img/ch-menu/menu-6.png"></a></li>
	</ul>

	<div id="pagepiling" >
		<!-- 吉田ジャスティス -->
		<div class="section p-chara-bg-1" id="section1">
			<h2 class="mod-character-title" data-aos="zoom-out" data-aos-duration="1500">
				<img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-yoshida.png" alt="">
			</h2>
			<ul class="mod-character-list view-pc">
				<?php
				$args = array(
					'post_type' => 'character',
					'numberposts' => -1,
					'order' => 'ASC',
					'tax_query' => array(
            array(
                'taxonomy' => 'character_group', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'yoshida_justice' ) //表示したいタームをスラッグで指定
            ),
        	),
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) { // 該当する投稿があったら
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>
			<?php get_template_part('/module/list_ch_pc'); ?>
								<?php
					endforeach;
				}  else {
				}
				wp_reset_postdata();
				?>
			</ul>
		</div>


		<!-- ジャスティスリーグ -->
    <div class="section p-chara-bg-2" id="section2">
			<h2 class="mod-character-title"><img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-justice.png" alt=""></h2>
			<ul class="mod-character-list view-pc">
				<?php
				$args = array(
					'post_type' => 'character',
					'numberposts' => -1,
					'order' => 'ASC',
					'tax_query' => array(
            array(
                'taxonomy' => 'character_group', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'justice_league' ) //表示したいタームをスラッグで指定
            ),
        	),
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) { // 該当する投稿があったら
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>
			<?php get_template_part('/module/list_ch_pc'); ?>
								<?php
					endforeach;
				}  else {
				}
				wp_reset_postdata();
				?>
			</ul>
    </div>

		<!-- スーパーヴィラン -->
    <div class="section p-chara-bg-3" id="section3">
			<h2 class="mod-character-title"><img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-villan.png" alt=""></h2>
			<ul class="mod-character-list view-pc">
				<?php
				$args = array(
					'post_type' => 'character',
					'numberposts' => -1,
					'order' => 'ASC',
					'tax_query' => array(
            array(
                'taxonomy' => 'character_group', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'super_villan' ) //表示したいタームをスラッグで指定
            ),
        	),
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) { // 該当する投稿があったら
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>
			<?php get_template_part('/module/list_ch_pc'); ?>
								<?php
					endforeach;
				}  else {
				}
				wp_reset_postdata();
				?>
			</ul>
    </div>

		<!-- 鷹の爪団 -->
    <div class="section p-chara-bg-4" id="section4">
			<h2 class="mod-character-title"><img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-takano.png" alt=""></h2>
			<ul class="mod-character-list view-pc">
				<?php
				$args = array(
					'post_type' => 'character',
					'numberposts' => -1,
					'order' => 'ASC',
					'tax_query' => array(
            array(
                'taxonomy' => 'character_group', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'takanotumedan' ) //表示したいタームをスラッグで指定
            ),
        	),
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) { // 該当する投稿があったら
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>
			<?php get_template_part('/module/list_ch_pc'); ?>
								<?php
					endforeach;
				}  else {
				}
				wp_reset_postdata();
				?>
			</ul>
    </div>

		<!-- 新入社員 -->
    <div class="section p-chara-bg-5" id="section5">
			<h2 class="mod-character-title"><img src="<?php bloginfo('template_directory'); ?>/base/img/title-ch-shin.png" alt=""></h2>
			<ul class="mod-character-list view-pc flexcol-7">
				<?php
				$args = array(
					'post_type' => 'character',
					'numberposts' => -1,
					'order' => 'ASC',
					'tax_query' => array(
            array(
                'taxonomy' => 'character_group', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'shinnyushiain' ) //表示したいタームをスラッグで指定
            ),
        	),
				);
				$my_posts = get_posts( $args );
				if ( $my_posts ) { // 該当する投稿があったら
					foreach ( $my_posts as $post ) :
						setup_postdata( $post );
						?>
			<?php get_template_part('/module/list_ch_pc'); ?>
								<?php
					endforeach;
				}  else {
				}
				wp_reset_postdata();
				?>
			</ul>
    </div>

		<div class="section p-chara-bg-6" id="section6">
			<div class="cast-st">
				<div class="mod_flex -col2">

					<div class="mod_colitem">
						<h2 data-aos="zoom-out" data-aos-duration="1500">///// STAFF</h2>
						<p data-aos="zoom-out" data-aos-duration="1500">
							監督・脚本・声の出演	FROGMAN<br>
							アニメーション	DLE／白組／GONZO<br>
							配給	ワーナー・ブラザース映画<br>
							音楽	近日公開
						</p>
					</div>
				</div>
			</div>

			<?php get_template_part('/module/_foot'); ?>


	  </div>

	</div>

	<?php
	//PC版　MODAL
	$args = array(
		'post_type' => 'character',
		'numberposts' => -1,
		'order' => 'ASC'
	);
	$my_posts = get_posts( $args );
	if ( $my_posts ) { // 該当する投稿があったら
		foreach ( $my_posts as $post ) :
			setup_postdata( $post );
			?>
<?php get_template_part('/module/modal_ch_pc'); ?>
					<?php
		endforeach;
	}  else {
	}
	wp_reset_postdata();
	?>



<?php endif; ?>




<!-- [ /contents ] -->
</div>





<?php get_footer();?>
<?php if(is_mobile()): ?>
	<script src="<?php bloginfo('template_directory'); ?>/base/js/iziModal.min.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>
<?php else: ?>
	<script src="<?php bloginfo('template_directory'); ?>/base/js/jquery.pagepiling.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/base/js/jquery.plainmodal.min.js"></script>
	<script type="text/javascript">
		var deleteLog = false;
		$(document).ready(function() {
			$('#pagepiling').pagepiling({
				menu: '#ch-menu',
				anchors: ['yoshida-justice', 'justice-league', 'super-villan','takanotumedan','shinnyushiain','cast-staff'],
				navigation: {
							'textColor': '#fff',
							'bulletsColor': '#fff',
							'position': 'right',
							'tooltips': ['吉田ジャスティス', 'ジャスティス・リーグ', 'スーパーヴィラン','鷹の爪団','シン入社員','cast-staff']
				}
			});
			//modal
			$('.modal').click(function() {
				var idname = '#modal-' + $(this).attr("id");
				$(idname).plainModal('open', {overlay: {color: '#000', opacity: 0.8}});
				//console.log(idname);
			});
			$('.modal_close').plainModal('close');
		});
		AOS.init();
	</script>
<?php endif; ?>

</body>
</html>
