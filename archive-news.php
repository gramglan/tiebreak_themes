<?php get_header(); ?>


<div class="mod-page-title -news" data-aos="fade-down">
<h1>
	<strong>News</strong>
	<span>最新情報</span>
</h1>
</div>

<div class="mod-diary-list">
		<div class="read -news" data-aos="fade-up">
			<p>
				タイブレイクの最新情報です。
			</p>
		</div>
		 <?php if ( have_posts() ) : ?>

		<ul class="mod-list -growup">
			<?php while ( have_posts() ) : the_post(); ?>
			<li data-aos="fade-up" class="mod-recruit-list-item">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">
					<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
					<h2>
						<?php the_title(); ?>
					</h2>
				</a>
				<?php $ctm = get_field('movie_id');?>
				<?php if(empty($ctm)):?>

				<?php else:?>
					<a href="#" class="btn-movie js-video-button" data-video-id='<?php echo $ctm;?>'>
						動画を見る
					</a>
				<?php endif;?>
			</li>
			<?php endwhile; ?>

		</ul>


		<div class="mod_pagenation" data-aos="fade-up">
			<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages);} ?>
		</div>

		<?php endif; ?>
	</div>

<style>
.mod-recruit-list-item a{border: none;}
</style>

<?php get_footer();?>
