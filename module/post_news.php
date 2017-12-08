<?php
	$ccc = get_post_meta($post->ID, 'other_link', true);
	$modal = get_post_meta($post->ID, 'link_modal', true);
?>
<div class="mod-news-list-item" data-aos="fade-up">
	<?php if(empty($ccc)):?>
			<?php if( get_field('link_modal') ){?>
			 <a
			data-izimodal-open="#modal-<?php echo $postid = get_the_ID(); ?>"
			data-izimodal-iframeurl="<?php the_permalink(); ?>?status=modal"
			data-subtitle="<?php echo get_the_time('Y-m-d'); ?>"
			>
			<?php } else { ?>
				 <a href="<?php the_permalink(); ?>">
			<?php } ?>
	<?php else:?>
		<a href="<?php the_field('other_link'); ?>" target="<?php the_field('link_target'); ?>">
	<?php endif; ?>
		<img src="<?php thumbnails_url(); ?>">
		<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
		<p>
			<?php the_title(); ?>
		</p>
		<span>もっと読む</span>
	</a>
</div>
<?php if( get_field('link_modal') ){?>
	<script>
	$(function() {
		$("#modal-<?php echo $postid = get_the_ID(); ?>").iziModal({
			iframe: true,
			iframeURL: "<?php the_permalink(); ?>?status=modal",
			iframeHeight: 800,
			zindex: 8000,
			closeButton: true,
			title:'NEWS',
			headerColor:'transparent',
			overlayColor: 'rgba(0, 0, 0, 0.9)',
		});
	});
	</script>
<?php } else { ?>
<?php } ?>
