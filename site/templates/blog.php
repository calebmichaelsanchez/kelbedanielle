<?php snippet('header') ?>

<!-- <div class="hero hero--blog">
<div class="ghosted">
  <h1><?php echo html($page->title()); ?></h1>
</div>
</div> -->

<section class="blog">

  <?php foreach($page->children()->visible()->flip() as $article): ?>
  
  <article>
    <a href="<?php echo $article->url() ?>">
      <h3>
      	<?php echo html($article->title()) ?>
      </h3>
      <hr class="divider">
      <p><?php echo excerpt($article->text(), 300) ?></p>
    </a>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>