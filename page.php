<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>
	<?php
	$page = get_post( get_the_ID() );
	// 現在表示しているページの投稿IDから投稿情報を取得

	$slug = $page->post_name;
	// 投稿のスラッグを取得
	?>


	<div class="mod-page-title -common">
		<h1>
			<strong><?php echo $slug; ?></strong>
			<span><?php the_title(); ?></span>
		</h1>
	</div>

	<div class="p-common">
		<?php the_content(); ?>
	</div>

<?php endwhile; endif; ?>
<?php get_footer();?>
