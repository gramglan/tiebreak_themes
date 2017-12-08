
<?php get_header(); ?>

<div class="mod-page-title -recruit">
	<h1>
		<strong>Recruit</strong>
		<span>採用情報</span>
	</h1>
</div>

<div class="p-recruit">
	<p class="read">
		株式会社タイブレイクでは、以下の人材を募集しています。
	</p>

	<div class="mod_flex -col3">
		<div class="mod_colitem" data-aos="fade-up">
			<a href="#regular" class=" -pd8">
				<img src="<?php bloginfo('template_directory'); ?>/base/img/top-recruit-1.png">
				<p class="-center -bk -pd8">正社員採用</p>
			</a>
		</div>
		<div class="mod_colitem" data-aos="fade-up">
			<a href="#contract"  class=" -pd8">
				<img src="<?php bloginfo('template_directory'); ?>/base/img/top-recruit-3.png">
				<p class="-center -bk -pd8">契約社員採用</p>
			</a>
		</div>
		<div class="mod_colitem" data-aos="fade-up">
			<a href="#part_time" class=" -pd8">
				<img src="<?php bloginfo('template_directory'); ?>/base/img/top-recruit-2.png">
				<p class="-center -bk -pd8">アルバイト採用</p>
			</a>
		</div>

	</div>

	<a id="regular" class="ancker"></a>
	<h2>正社員採用</h2>
	<ul class="mod-recruit-list">

		<?php
		$args = array(
			'post_type' => 'recruit',
			'numberposts' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'job',
					'field' => 'slug',
					'terms' => 'regular-employee'
				)
			)
		);
		$my_posts = get_posts( $args );
		if ( $my_posts ) { // 該当する投稿があったら
			foreach ( $my_posts as $post ) :
				setup_postdata( $post );
		?>
		<li class="mod-recruit-list-item" data-aos="fade-up">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">


				<div>

					<p><strong><?php the_field("キャッチコピー") ?></strong></p>
					<h3><?php the_title(); ?></h3>
					<p><strong>給与：</strong><?php the_field("給与サマリー") ?></p>
					<p><strong>勤務地：</strong><?php the_field("勤務地サマリー") ?></p>
					<p><strong>仕事内容：</strong><?php the_field("仕事内容サマリー") ?></p>

				</div>
			</a>
			<?php $ctm = get_field('movie_id');?>
			<?php if(empty($ctm)):?>

			<?php else:?>
				<a href="#" class="btn-movie js-video-button" data-video-id='<?php echo $ctm;?>'>
					動画を見る
				</a>
			<?php endif;?>
			<a href="/entry/?post_id=<?php echo $post->ID; ?>" class="btn-entry" >この求人に応募する</a>
		</li>

		<?php
			endforeach;
		}  else {
		}
		wp_reset_postdata();
		?>
	</ul>

<br><br>

	<a id="contract" class="ancker"></a>
	<h2>契約社員採用</h2>
	<ul class="mod-recruit-list">

		<?php
		$args = array(
			'post_type' => 'recruit',
			'numberposts' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'job',
					'field' => 'slug',
					'terms' => 'contract-employee'
				)
			)
		);
		$my_posts = get_posts( $args );
		if ( $my_posts ) { // 該当する投稿があったら
			foreach ( $my_posts as $post ) :
				setup_postdata( $post );
		?>
		<li class="mod-recruit-list-item" data-aos="fade-up">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">
				<div>
					<p><strong><?php the_field("キャッチコピー") ?></strong></p>
					<h3><?php the_title(); ?></h3>
					<p><strong>給与：</strong><?php the_field("給与サマリー") ?></p>
					<p><strong>勤務地：</strong><?php the_field("勤務地サマリー") ?></p>
					<p><strong>仕事内容：</strong><?php the_field("仕事内容サマリー") ?></p>

				</div>
			</a>
			<?php $ctm = get_field('movie_id');?>
			<?php if(empty($ctm)):?>

			<?php else:?>
				<a href="#" class="btn-movie js-video-button" data-video-id='<?php echo $ctm;?>'>
					動画を見る
				</a>
			<?php endif;?>
			<a href="/entry/?post_id=<?php echo $post->ID; ?>" class="btn-entry" >この求人に応募する</a>
		</li>

		<?php
			endforeach;
		}  else {
		}
		wp_reset_postdata();
		?>
	</ul>

<br><br>

	<a id="part_time" class="ancker"></a>
	<h2>アルバイト採用</h2>
	<ul class="mod-recruit-list">

		<?php
		$args = array(
			'post_type' => 'recruit',
			'numberposts' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'job',
					'field' => 'slug',
					'terms' => 'part-time'
				)
			)
		);
		$my_posts = get_posts( $args );
		if ( $my_posts ) { // 該当する投稿があったら
			foreach ( $my_posts as $post ) :
				setup_postdata( $post );
		?>
			<li class="mod-recruit-list-item" data-aos="fade-up">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">
					<div>
						<p><strong><?php the_field("キャッチコピー") ?></strong></p>
						<h3><?php the_title(); ?></h3>
						<p><strong>給与：</strong><?php the_field("給与サマリー") ?></p>
						<p><strong>勤務地：</strong><?php the_field("勤務地サマリー") ?></p>
						<p><strong>アクセス：</strong><?php the_field("アクセス") ?></p>
						<p><strong>仕事内容：</strong><?php the_field("仕事内容サマリー") ?></p>
					</div>
				</a>
				<?php $ctm = get_field('movie_id');?>
				<?php if(empty($ctm)):?>

				<?php else:?>
					<a href="#" class="btn-movie js-video-button" data-video-id='<?php echo $ctm;?>'>
						動画を見る
					</a>
				<?php endif;?>
				<a href="/entry/?post_id=<?php echo $post->ID; ?>" class="btn-entry" >この求人に応募する</a>
			</li>

		<?php
			endforeach;
		}  else {
		}
		wp_reset_postdata();
		?>
	</ul>




</div>




<?php get_footer();?>
