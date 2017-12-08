<?php if ( is_home() || is_front_page() ) : ?>
<?php else: ?>
<?php get_template_part('/module/_foot'); ?>
<?php endif; ?>

<?php if(is_mobile()) {?>
<div class="sp"style="text-align:center; padding:16px;">
	<a style="text-align:center;" href="<?php the_field('rec_banner_url','option');?>" target="<?php the_field('rec_banner_target','option');?>">
		<img src="<?php the_field('rec_banner_img','option');?>" alt="<?php the_field('rec_banner_text','option');?>">
	</a>
</div>
<?php } else { ?><?php } ?>

<footer id="footer" data-aos="fade-up">

	<div class="mod_flex -col2">
		<div class="mod_colitem logo">
			<img src="<?php bloginfo('template_directory'); ?>/base/img/tiebreak.svg" alt="TIE BREAK Inc.">
		</div>
		<div class="mod_colitem address">
			<p>〒105-0004 東京都港区新橋１－１８－１<br>
			TEL 03-3502-3515　FAX 03-3502-3515</p>
		</div>

	</div>

	<div class="copyright">
		&copy; 2014 株式会社タイブレイク all rights reserved.
		<p><a href="/privacypolicy">プライバシーポリシー</a>｜<a href="/company">会社概要</a></p>
	</div>

</footer>


<!-- [ /contents ] -->
</div>

<!-- JS -->
<script src="<?php bloginfo('template_directory'); ?>/base/js/common.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
<?php wp_footer(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/base/css/modal-video.min.css">
<script src="<?php bloginfo('template_directory'); ?>/base/js/jquery-modal-video.min.js"></script>
<script>
	$(".js-video-button").modalVideo();
</script>
</body>
</html>
