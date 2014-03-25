<?php snippet('header') ?>
<?php snippet('sidebar') ?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="home span-17 last">
  <div>
    <h3 class="ui">Synopsis</h3>
  </div>
  <div class="introduction">
    <?php echo kirbytext($page->text()) ?>
  </div>
  <div>
    <h3 class="ui">Core Contributions</h3>
  </div>
  <div class="journal">
  <?php
    $articles = $pages->find('journal')
                        ->children()
                        ->visible()
                        ->filterBy('tags', 'Essential', ',')
                        ->flip();
    foreach($articles as $entry): 
  ?>
    <!-- ——————————————————————————————————————————————————————————————————— Post -->
    <div class="entry span-17 last">
      <h3><a href="<?php echo $entry->url() ?>"><?php echo html($entry->title()) ?></a></h3>
      <span class="entry_date">
        <a href="<?php echo $entry->url() ?>">
          <?php echo $entry->date('Y-m-d') ?>
        </a>
      </span>
    </div><!-- .entry-->
    <?php endforeach ?>
  </div><!-- .journal -->
</div><!-- .span-17 last -->
<?php snippet('footer') ?>