<?php get_header(); ?>


<div class="mod-page-title -news">
	<div class="h1 -min">
		<strong>News</strong>
		<span>最新情報</span>
	</div>
</div>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="mod-diary-detail -news">
	<?php $ctm = get_field('movie_id');?>
	<?php if(empty($ctm)):?>
		<div class="images">
			<img src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">
		</div>
	<?php else:?>
		<div class="youtube-wrap">
		<div class="youtube">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $ctm;?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
		</div>
	<?php endif;?>

		<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
		<h1>
				<?php the_title(); ?>
		</h1>

		<div class="mod-single-contents">

			<?php the_content(); ?>

		</div>

		<div class="retuen">
			<a href="/news">戻る</a>
		</div>

</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
