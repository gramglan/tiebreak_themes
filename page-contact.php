<?php
/*
Template Name: CONTACT
*/
?>
<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
<?php get_header(); ?>
<?php
if(have_posts()): while(have_posts()): the_post();?>
	<div class="mod-page-title -contact" data-aos="fade-down">
		<div class="h1 -min">
			<strong><?php echo $slug; ?></strong>
			<span><?php the_title(); ?></span>
		</div>
	</div>


<div class="mod-diary-detail" data-aos="fade-up">
	<div class="mod-single-contents">

			<?php the_content(); ?>

	</div>
</div>

<?php endwhile; endif; ?>

<?php get_footer();?>
