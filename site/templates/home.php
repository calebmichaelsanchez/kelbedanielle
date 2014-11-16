<?php snippet('header') ?>

<div class="hero hero--home">
	<div class="ghosted">
		<h1><?php echo html($page->author()); ?></h1>
		<hr class="divider">
		<h2><?php echo html($page->tagline()); ?></h2>
	</div>
</div>
<!-- <section class="welcome">
	<article><?php echo kirbytext($page->text()); ?></article>
</section> -->

<section class="most-recent-article">

	<?php foreach($site->find('blog')->children()->visible()->flip()->limit(1) as $article): ?>
	
	<article>
	    <h3>
	    	<?php echo html($article->title()) ?>
	    </h3>
	    
	    <h6><?php echo html($article->pubdate()) ?></h6>

	    <hr class="divider">
	    <?php echo kirbytext($article->text()) ?>
	    <hr class="divider">
	</article>

	<?php endforeach ?>

</section>

<section class="read-more">
	<article>
		<h2><a href="/blog">Read more articles</a></h2>
	</article>
</section>


<?php snippet('footer') ?>