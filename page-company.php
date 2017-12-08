<?php
/*
Template Name: COMPANY
*/
?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="mod-page-title -company" data-aos="fade-down">
	<h1>
		<strong>Company</strong>
		<span>企業情報</span>
	</h1>
</div>

<div class="p-company">
	<div class="mod_flex -col2">

		<div class="mod_colitem" data-aos="fade-up">
			<h2>企業理念</h2>
			<p>私たちの経営理念は『地域に密着した笑顔あふれる店舗』創りと<br>
				『一人ひとりの笑顔を実現していく人材サポート』を通じて、<br>
				<strong>笑顔の輪を拡げていくことです。</strong></p>
			<div class="comp-img">
				<img src="<?php bloginfo('template_directory'); ?>/base/img/comp-ph1.png">
			</div>
			<p>
				お客様の笑顔、従業員の笑顔、地域の笑顔、取引先様・関係先様の笑顔、会社の笑顔…。笑顔の輪を拡げ、そして笑顔が連鎖し、多くの人々の笑顔を実現することが私たちのミッションです。
			</p>
		</div>

		<div class="mod_colitem" data-aos="fade-up">
			<h2>経営方針</h2>
			<p>経営方針は『3つの心』。心を大切にしております。</p>
			<div class="comp-img">
				<img src="<?php bloginfo('template_directory'); ?>/base/img/comp-ph2.png">
			</div>
			<p class="caps">
				※'ohanaとは、ハワイ語で 「家族」を意味する言葉ですが、いわゆる血縁関係のみを指す言葉ではなく、お互いに助け合うことを厭わない強い心の絆で結ばれた仲間・共同体という意味があります。
		</div>

	</div>
</div>

<a id="interview" class="ancker"></a>
<div class="p-message">
	<div class="wrap">
		<h2 data-aos="fade-up">
			TOP MESSAGE
			<span>トップメッセージ</span>
		</h2>
		<div class="topimg" data-aos="fade-up">
			<img src="<?php bloginfo('template_directory'); ?>/base/img/sp-int.jpg">
		</div>
		<h3 data-aos="fade-up">
		人は互いにつながることで安らぎを感じる。
		</h3>
		<p data-aos="fade-up">
			2011年3月11日。今なお多くの人々の記憶に新しい東日本大震災。そして、2016年4月14日に発生した熊本地震。そのような出来事にふれるなかで、私たちは、人と人との関わり合いと助け合い、その大切さを感じ、学び、それらを再確認するといった経験を積み重ねてきました。人は誰しもが、多くの人にふれ合うなかで、喜びや幸せを感じ、ときに寂しさや悲しみも共有し、そして、お互いにつながっていることに安心や心の安らぎを感じたりもします。昨今では、そのような人と人との関わり合い、つながりをより大切にしようという趨勢も強まりつつあります。
		</p>

		<h3 data-aos="fade-up">
			『心』という付加価値を以って、<br>『笑顔』の輪を拡げてゆく
		</h3>
		<p data-aos="fade-up">
			そのような時代のなかで、多くの人々の生活に密着し、日々刻々と変化するお客様のニーズに常にキャッチアップしていくことは、毎日の生活に身近な存在であるコンビニエンスストアの重要な役割であるということは言うまでもありません。しかしながら、ただ単に欲しいものを手に入れたことだけで、満足感を得られる時代はとうの昔に終わりを告げています。これからは付加価値が求められる時代です。付加価値と言っても様々ありますが、真に必要とされる付加価値は『心』であると考えます。誰もが少なからず不安や悩みを抱えている今の時代、私たちが『心』という付加価値を以って、多くの人々に『笑顔』の輪を拡げていくことは、毎日の生活に密着しているコンビニエンスストアだからこそ成し遂げなければならないミッションです。そして、それは企業としての存在価値を高め、私たちにも大いなる成長をもたらしてくれることでしょう。
			<br><br>
			また、より多くの人々に『笑顔』の輪を拡げていくため、新たに人材ビジネスの事業も立ち上げました。 イノベーションにより、差別化されたビジネスモデルを構築し、既存の人材ビジネスモデルでは到底実現できない、 一人ひとりに真に『心』で寄り添う人材サポートを通じて『笑顔』を実現していきます。
		</p>

	</div>

</div>

<div class="p-company-detail" data-aos="fade-up">
	<h2>会社概要</h2>
	<table>
		<?php if( have_rows('会社概要') ): ?>
		<?php while ( have_rows('会社概要') ) : the_row(); ?>
			<tr>
				<th>
					<?php the_sub_field('company_detail_th');?>
				</th>
				<td>
					<?php the_sub_field('company_detail_td');?>
				</td>
			</tr>
		<?php endwhile; ?>
		<?php endif; ?>
	</table>
</div>
<div class="p-company-detail -access" data-aos="fade-up">
	<h2>アクセス
	</h2>
	<div class="mod_flex -col2">
		<div class="mod_colitem">
			<div class="ggmap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.3283240701494!2d139.75340151525847!3d35.6689168801972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bec6657e1cf%3A0x179cc78e2fe9cd36!2z44CSMTA1LTAwMDQg5p2x5Lqs6YO95riv5Yy65paw5qmL77yR5LiB55uu77yR77yY4oiS77yR!5e0!3m2!1sja!2sjp!4v1499621351057" width="480" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="mod_colitem">
			<p><strong>本社</strong><br>
	〒105-0004<br>
	東京都港区新橋１-１８-１<br>
	03-3502-3515</p>
			<h3>公共交通機関</h3>
			<p>
				都営三田線『内幸町駅』より徒歩１分<br>
	JR各線、銀座線、都営浅草線、ゆりかもめ『新橋駅』より徒歩３分<br>
	千代田線、日比谷線、丸ノ内線『霞ヶ関駅』より徒歩５分
			</p>
		</div>
	</div>


</div>

<div class="p-company-detail -history" data-aos="fade-up">
	<h2>沿革
	</h2>
	<table>
		<?php if( have_rows('history') ): ?>
		<?php while ( have_rows('history') ) : the_row(); ?>
			<tr>
				<th >
					<?php the_sub_field('company_history_th');?>
				</th>
				<td>
					<?php the_sub_field('company_history_td');?>
				</td>
			</tr>
		<?php endwhile; ?>
		<?php endif; ?>
	</table>
</div>


<?php endwhile; endif; ?>


<?php get_footer();?>
