
<li>
	<?php $ccc = get_post_meta($post->ID, 'other_link', true);?>
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
		<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time><span><?php the_title(); ?></span>
	</a>
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
</li>
