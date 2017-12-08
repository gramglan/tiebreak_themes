<?php
$cat = get_the_category();
$cat = $cat[0];
$ccc = get_post_meta($post->ID, 'other_link', true);
?>

<li>
	<?php if(empty($ccc)):?>
		<a href="<?php the_permalink(); ?>">
	<?php else:?>
		<a href="<?php the_field('other_link'); ?>" target="<?php the_field('link_target'); ?>">
	<?php endif; ?>
		<img class="tp-visual" src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">
		<span class="category <?php echo $cat->category_nicename; ?>"><?php echo $cat->cat_name; ?></span>
		<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
		<h3>
			<?php the_title(); ?>
		</h3>
	</a>
</li>
