<?php
/*
Template Name: SERVICE
*/
?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="mod-page-title -service" data-aos="fade-down">
	<h1>
		<strong>Service</strong>
		<span>商品・サービス情報</span>
	</h1>
</div>

	<div class="service-contants">


		<?php if( have_rows('service') ): ?>
			<?php while ( have_rows('service') ) : the_row(); ?>
			<div class="mod_flex -col2 <?php the_sub_field('service_img_float');?>" data-aos="fade-up">
				<div class="mod_colitem">
					<div class="service-img">
						<img src="<?php the_sub_field('service_img');?>">
					</div>
				</div>
				<div class="mod_colitem">
					<div class="service-box">
						<h2 class="service-title"><?php the_sub_field('service_name');?></h2>
						<div class="service-detail">
							<?php the_sub_field('service_detail');?>
						</div >

					</div>
				</div>
			</div>
			<?php if( have_rows('service_more') ): ?>
				<ul class="mod_flex -col3">
				<?php while ( have_rows('service_more') ) : the_row(); ?>

						<li class="mod_colitem service-products-w" data-aos="fade-up">
							<div class="service-products">
								<h3><?php the_sub_field('service_more_title');?></h3>
								<div ><?php the_sub_field('service_more_detail');?></div>
							</div>
						</li>

				<?php endwhile; ?>
				</ul>
			<?php endif; ?>

		<?php endwhile; ?>
	<?php endif; ?>


	</div>

<?php endwhile; endif; ?>


<?php get_footer();?>
