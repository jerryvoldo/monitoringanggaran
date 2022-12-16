<h2><?= esc($title) ?></h2>

<?php if( ! empty($news) && is_array( $news ) ):?>
	<?php foreach( $news as $news_items ): ?>
		<h3><?= esc( $news_items['title'] ) ?></h3>

		<div class="main">
			<?= esc( $news_items['body'] ) ?>
		</div>
		<p>
			<a href="/news/<?= esc( $news_items['slug'], 'url' ) ?>">View article</a>
		</p>
	<?php endforeach;?>
<?php else:?>
	<h3>No news</h3>
	<p>Unable to find any news for you.</p>
<?php endif;?>