
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="mod-page-title -recruit">

	<h1>
		<strong><?php if ( is_object_in_term($post->ID, 'job','part-time') ): ?>
		<?php the_field("キャッチコピー") ?>
		<?php endif; ?>

		<?php if ( is_object_in_term($post->ID, 'job','contract-employee') ): ?>
		<?php the_field("キャッチコピー") ?>
		<?php endif; ?>

		<?php if ( is_object_in_term($post->ID, 'job','regular-employee') ): ?>
		<?php the_field("キャッチコピー") ?>
		<?php endif; ?></strong>
		<span></span>
		<span><?php the_title(); ?></span>
	</h1>

	<div class="entry-btn-wrap ttt">
		<a href="/entry/?post_id=<?php echo $post->ID; ?>" class="entry-btn white" >この求人に応募する</a>
	</div>

</div>
<div class="p-recruit">
	<?php $ctm = get_field('movie_id');?>
	<?php if(empty($ctm)):?>

	<?php else:?>
		<div class="youtube-wrap">
		<div class="youtube">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $ctm;?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
		</div>
	<?php endif;?>

<?php if ( is_object_in_term($post->ID, 'job','part-time') ): ?>
<table>
	<tr>
		<th>募集職種</th>
		<td><?php the_title(); ?></td>
	</tr>
	<tr>
		<th>雇用形態</th>
		<td>アルバイト</td>
	</tr>
	<tr>
		<th>仕事内容</th>
		<td><?php the_field('仕事内容'); ?></td>
	</tr>
	<tr>
		<th>応募資格</th>
		<td><?php the_field('応募資格'); ?></td>
	</tr>
	<tr>
		<th>勤務地</th>
		<td><?php the_field('勤務地'); ?></td>
	</tr>
	<tr>
		<th>アクセス</th>
		<td><?php the_field('アクセス'); ?></td>
	</tr>
	<tr>
		<th>時給</th>
		<td><?php the_field('時給'); ?></td>
	</tr>
	<tr>
		<th>勤務時間</th>
		<td><?php the_field('時間'); ?></td>
	</tr>
	<tr>
		<th>休日・休暇</th>
		<td><?php the_field('休日'); ?></td>
	</tr>
	<tr>
		<th>待遇・福利厚生</th>
		<td><?php the_field('待遇'); ?></td>
	</tr>
	<tr>
		<th>応募方法</th>
		<td><?php the_field('応募方法'); ?></td>
	</tr>
	<tr>
		<th>窓口</th>
		<td><?php the_field('窓口'); ?></td>
	</tr>
	<tr>
		<th>受付時間</th>
		<td><?php the_field('受付時間'); ?></td>
	</tr>
	<tr>
		<th>面接場所</th>
		<td><?php the_field('面接場所'); ?></td>
	</tr>
</table>
<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'job','contract-employee') ): ?>

<table>
	<tr>
		<th>募集職種</th>
		<td><?php the_title(); ?></td>
	</tr>
	<tr>
		<th>雇用形態</th>
		<td>契約社員</td>
	</tr>
	<tr>
		<th>仕事概要</th>
		<td><?php the_field('仕事概要');?></td>
	</tr>
	<tr>
		<th>応募資格</th>
		<td><?php the_field('応募資格');?></td>
	</tr>
	<tr>
		<th>給与</th>
		<td><?php the_field('給与');?></td>
	</tr>
	<tr>
		<th>昇給</th>
		<td><?php the_field('昇給');?></td>
	</tr>
	<tr>
		<th>諸手当</th>
		<td><?php the_field('諸手当');?></td>
	</tr>
	<tr>
		<th>待遇・福利厚生</th>
		<td><?php the_field('福利厚生');?></td>
	</tr>
	<tr>
		<th>勤務時間</th>
		<td><?php the_field('勤務時間');?></td>
	</tr>
	<tr>
		<th>休日・休暇</th>
		<td><?php the_field('休日休暇');?></td>
	</tr>
	<tr>
		<th>勤務地</th>
		<td><?php the_field('勤務地');?></td>
	</tr>
</table>

<?php endif; ?>

<?php if ( is_object_in_term($post->ID, 'job','regular-employee') ): ?>
	<table>
		<tr>
			<th>募集職種</th>
			<td><?php the_title(); ?></td>
		</tr>
		<tr>
			<th>雇用形態</th>
			<td>正社員</td>
		</tr>
		<tr>
			<th>仕事概要</th>
			<td><?php the_field('仕事概要');?></td>
		</tr>
		<tr>
			<th>応募資格</th>
			<td><?php the_field('応募資格');?></td>
		</tr>
		<tr>
			<th>給与</th>
			<td><?php the_field('給与');?></td>
		</tr>
		<tr>
			<th>昇給</th>
			<td><?php the_field('昇給');?></td>
		</tr>
		<tr>
			<th>諸手当</th>
			<td><?php the_field('諸手当');?></td>
		</tr>
		<tr>
			<th>待遇・福利厚生</th>
			<td><?php the_field('福利厚生');?></td>
		</tr>
		<tr>
			<th>勤務時間</th>
			<td><?php the_field('勤務時間');?></td>
		</tr>
		<tr>
			<th>休日・休暇</th>
			<td><?php the_field('休日休暇');?></td>
		</tr>
		<tr>
			<th>勤務地</th>
			<td><?php the_field('勤務地');?></td>
		</tr>
	</table>
<?php endif; ?>

<div class="entry-btn-wrap">
	<a href="/entry/?post_id=<?php echo $post->ID; ?>" class="entry-btn" >この求人に応募する</a>
</div>

<div class="retuen">
	<a href="/recruit">戻る</a>
</div>

</div>

<?php endwhile; endif; ?>


<?php get_footer();?>
