<?php get_header(); ?>


<div class="mod-page-title -growup" data-aos="fade-down">
		<h1>
			<strong>Growup Daiary</strong>
			<span>みんなの成長日記</span>
		</h1>
	</div>

<div class="mod-diary-list">
	<div class="read -growup" data-aos="fade-up">
		<p>
			ここでは、みんなの日々の成長をちょっぴり公開。 株式会社タイブレイクでは『みんなで一緒に楽しく仕事をしながら、ともに成長していきしましょう！』が基本！一人ひとりの成長をみんなで共有しています！
		</p>
	</div>
		 <?php if ( have_posts() ) : ?>

		<ul class="mod-list -growup">
			<?php while ( have_posts() ) : the_post(); ?>
			<li data-aos="fade-up">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">
					<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
					<h2>
						<?php the_title(); ?>
					</h2>
				</a>
			</li>
			<?php endwhile; ?>

		</ul>


		<div class="mod_pagenation" data-aos="fade-up">
			<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages);} ?>
		</div>


		<div class="pageinfo" data-aos="fade-up">
			<h3>★タイブレイクの人材評価制度とは…</h3>
			<p>
				「継続は力なり！」。一人ひとりのペースにあわせて無理なく成長できるように、並走型の教育体制を整えています。また「やる気人事」を採用し「やりたい！」を尊重しています。将来を見据えたステップアップとして13段階の評価基準を設けて見える化、直属の上司による評価だけでなく360度評価を採用することで、あらゆる角度からのサポートを受けることができます。 仕事の悩みなどがあればオペレーションサポート部による個別面談など、メンター制度も充実しています。
			</p>
		</div>
		<?php endif; ?>
	</div>

<?php get_footer();?>
