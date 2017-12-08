<?php get_header(); ?>


<div class="mod-page-title -holiday">
		<div class="h1">
			<strong>Holiday Diary</strong>
			<span>みんなのお休み日記</span>
		</div>
</div>
<div class="mod-diary-list">
		<div class="read -holiday" data-aos="fade-up">
			<p>
				ここでは、休日事前申告制度を利用して取得したみんなのお休みをちょっぴり公開。
				株式会社タイブレイクでは『仕事もプライベートも笑顔で楽しく！』が基本。
				お休みして楽しんだ笑顔は、公開日記でみんなで共有しています！
			</p>
		</div>
</div>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<div class="mod-diary-detail -holiday">

	<div class="pageinfo" data-aos="fade-up">
		<h3>★休日事前申告制度とは… </h3>
		<p>
			当社では『みんなで一緒に楽しく仕事をしよう！』をもっとも大切にしています。
仕事だけでなく、プライベートでもいっぱい楽しもう！がタイブレイク・スタイル！
それを可能にしているのがタイブレイク独自のお休み制度である『休日事前申告制度』。
旅行・ライブ・同窓会、その他、コミケ・ゲーム大会出場などなど、プライベートでのイベント時には、平日、土日を問わず事前にお休みを指定できる制度があります。
これまで多くのお休み申請がありましたが、その休日取得率は100％なんです。
もちろん、店長さんだってどんどん活用できちゃいます！
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
			<a href="/holiday">戻る</a>
		</div>

</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
