<?php
/*
Template Name: RECRUIT
*/
?>
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="mod-page-title -recruit">
	<h1>
		<strong>Recruit</strong>
		<span>採用情報</span>
	</h1>
</div>

<div class="p-recruit">
	<p class="read">
		株式会社タイブレイクでは、以下の人材を募集しています。
	</p>

	<h2>求人リンク</h2>
	<ul class="recruit_link">
		<?php if( have_rows('recruit_link') ): ?>
		<?php while ( have_rows('recruit_link') ) : the_row(); ?>
		<li>
			<a href="<?php the_sub_field('url');?>" target="_blank">
				<h3>職種：<?php the_sub_field('job');?></h3>
				<p>拠点：<?php the_sub_field('area');?></p>
			</a>

		</li>
	<?php endwhile; ?>
	<?php endif; ?>
	</ul>


	<h2>正社員採用</h2>
	<a href="/recruiting" class="banner">
		<h3>正社員採用はこちら</h3>
	</a>

	<h2>契約社員採用</h2>
	<?php if( have_rows('contract') ): ?>
	<?php while ( have_rows('contract') ) : the_row(); ?>
		<div  class="contract">
		<table>
			<tr>
				<th>職種</th>
				<td><h3><?php the_sub_field('title'); ?></h3></td>
			</tr>
			<?php if( have_rows('detail') ): ?>
			<?php while ( have_rows('detail') ) : the_row(); ?>
			<tr>
				<th><?php the_sub_field('subtitle'); ?></th>
				<td><?php the_sub_field('content'); ?></td>
			</tr>
		<?php endwhile; ?>
		<?php endif; ?>
		</table>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>




	<h2>アルバイト採用</h2>
	<table>
		<tr>
			<th>募集職種</th>
			<td><?php the_field('job'); ?></td>
		</tr>
		<tr>
			<th>雇用形態</th>
			<td><?php the_field('job_type'); ?></td>
		</tr>
		<tr>
			<th>仕事内容</th>
			<td><?php the_field('job_detail'); ?></td>
		</tr>
		<tr>
			<th>応募資格</th>
			<td><?php the_field('job_entry'); ?></td>
		</tr>
		<tr>
			<th>勤務地/給与/時間</th>
			<td>
				<div class="mod_flex -col2">

					<?php if( have_rows('shoplist','option') ): ?>
					<?php while ( have_rows('shoplist','option') ) : the_row(); ?>
						<div class="mod_colitem">
							<h4>ミニストップ<?php the_sub_field('shop_name');?></h4>
							<h5>【住　所】</h5>
							<p><?php the_sub_field('shop_address');?></p>
							<h5>【時　給】</h5>
							<p>7:00～17:00　時給 <?php the_sub_field('pay_1');?>円以上<br>17:00～22:00　時給 <?php the_sub_field('pay_2');?>円以上<br>22:00～5:00　時給 <?php the_sub_field('pay_3');?>円以上</p>
							<h5>【最寄駅】</h5>
							<p><?php the_sub_field('shop_train');?></p>
						</div>
					<?php endwhile; ?>
					<?php endif; ?>


				</div>

				<p class="kome">※夜勤勤務は翌朝7:00～9:00頃までの勤務となります<br>
						※研修期間は時給－50円（4～8ヶ月程度）<br>
						※研修期間中もスキルアップにより3段階の昇給あり<br>
						※研修終了後にもスキルに応じて昇給あり
				</p>
				<h5>【時　間】</h5>
				<p>勤務日時・曜日は１週間毎の自己申告制</p>
					<p class="kome">※プライベートや学業との両立が可能です！</p>
			</td>
		</tr>
		<tr>
			<th>待遇</th>
			<td><?php the_field('job_merut'); ?></td>
		</tr>
		<tr>
			<th>応募方法</th>
			<td>
下記窓口までお電話にて直接お申込み下さい。
<p class="kome">※『ホームページのアルバイト募集を見ました』とお伝えください。</p></td>
		</tr>
		<tr>
			<th>窓口</th>
			<td>株式会社タイブレイク<br>
（ミニストップ新橋１丁目店）<br>
〒105-0004<br>
東京都港区新橋１－１８－１<br>
TEL. 03-3502-3515</td>
		</tr>
		<tr>
			<th>受付時間</th>
			<td>
曜日を問わず24時間応募受付中</td>
		</tr>
		<tr>
			<th>面接場所</th>
			<td>上記窓口であるミニストップ新橋１丁目店にて行います
<p class="kome">※履歴書(写真貼付)を持参して下さい。</p></td>
		</tr>
	</table>


</div>

<?php endwhile; endif; ?>


<?php get_footer();?>
