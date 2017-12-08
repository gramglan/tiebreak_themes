<?php get_header(); ?>


<div class="mod-page-title -holiday" data-aos="fade-down">
		<h1>
			<strong>Holiday Diary</strong>
			<span>みんなのお休み日記</span>
		</h1>
	</div>

<div class="mod-diary-list">
		<div class="read -holiday" data-aos="fade-up">
			<p>
				ここでは、休日事前申告制度を利用して取得したみんなのお休みをちょっぴり公開。
				株式会社タイブレイクでは『仕事もプライベートも笑顔で楽しく！』が基本。
				お休みして楽しんだ笑顔は、公開日記でみんなで共有しています！
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
			<h3>※休日事前申告制度とは…</h3>
			<p>
				当社では『みんなで一緒に楽しく仕事をしよう！』をもっとも大切にしています。仕事だけでなく、プライベートでもいっぱい楽しもう！がタイブレイク・スタイル！それを可能にしているのがタイブレイク独自のお休み制度である『休日事前申告制度』。正社員には平日、土日を問わず事前にお休みを指定できる制度があります。これまで多くのお休み申請がありましたが、その休日取得率は100％なんです。もちろん、店長さんだってどんどん活用できちゃいます！
P.S.アルバイトさんはシフトが週ごとの完全自己申告制です。こちらも、もちろんプライベートは充実できます。
			</p>
		</div>
		<?php endif; ?>
	</div>

<?php get_footer();?>
