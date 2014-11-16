<?php snippet('header') ?>

<!-- <div class="hero hero--about">
<div class="ghosted">
	<h1><?php echo html($page->title()); ?></h1>
</div>
</div> -->

<section class="about">
	<article>
		<div class="profile">
			<img src="/images/about/about.jpg" alt="Kelbe Danielle Goupil">
		</div>
		<h6>wife | friend | deep-thinker | christ-follower</h6>
		<?php echo kirbytext($page->text()); ?>
	</article>
</section>

<?php snippet('footer') ?>