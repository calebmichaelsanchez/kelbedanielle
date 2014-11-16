<?php snippet('header') ?>

<section class="blog-article">
	<article>
		<h3><?php echo html($page->title()); ?></h3>
		<hr class="divider">
		<?php echo kirbytext($page->text()); ?>
	</article>
</section>

<?php snippet('footer') ?>