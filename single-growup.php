<?php get_header(); ?>


<div class="mod-page-title -growup">
		<div class="h1">
			<strong>Growup Diary</strong>
			<span>みんなのお休み日記</span>
		</div>
	</div>

	<div class="mod-diary-list">
		<div class="read -growup" data-aos="fade-up">
			<p>
				ここでは、みんなの日々の成長をちょっぴり公開。 株式会社タイブレイクでは『みんなで一緒に楽しく仕事をしながら、ともに成長していきしましょう！』が基本！一人ひとりの成長をみんなで共有しています！
			</p>
		</div>
	</div>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="mod-diary-detail -growup">

	<div class="pageinfo" data-aos="fade-up">
		<h3>★タイブレイクの人材評価制度とは…</h3>
		<p>
			「継続は力なり！」。一人ひとりのペースにあわせて無理なく成長できるように、並走型の教育体制を整えています。また「やる気人事」を採用し「やりたい！」を尊重しています。将来を見据えたステップアップとして13段階の評価基準を設けて見える化、直属の上司による評価だけでなく360度評価を採用することで、あらゆる角度からのサポートを受けることができます。 仕事の悩みなどがあればオペレーションサポート部による個別面談など、メンター制度も充実しています。
		</p>
	</div>

		<div class="images">
			<img src="<?php thumbnails_url();?>" alt="<?php the_title(); ?>">
		</div>
		<time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.m.d'); ?></time>
		<h1>
				<?php the_title(); ?>
		</h1>

		<div class="mod-single-contents">

			<?php the_content(); ?>

		</div>

		<div class="retuen">
			<a href="/growup">戻る</a>
		</div>

</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
