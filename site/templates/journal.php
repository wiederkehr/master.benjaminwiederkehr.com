<?php snippet('header') ?>
<?php snippet('sidebar') ?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-17 last">
  <div class="span-17 last">
    <h3 class="ui">Journal</h3>
  </div>
  <div class="span-17 last journal">
  <?php
    if(param('tag')) {
      $articles = $pages->find('journal')
                        ->children()
                        ->visible()
                        ->filterBy('tags', param('tag'), ',')
                        ->flip();
    } else {
      $articles = $pages->find('journal')
                        ->children()
                        ->visible()
                        ->flip();
    }
    foreach($articles as $entry): 
  ?>
    <!-- ——————————————————————————————————————————————————————————————————— Post -->
    <div class="span-17 last entry collapsed">
      <h2 class="entry_title">
        <a href="<?php echo $entry->url() ?>">
          <?php echo html($entry->title()) ?>
          <span class="entry_toggle">Expand</span>
        </a>
      </h2>
      <span class="entry_date">
        <a href="<?php echo $entry->url() ?>">
          <?php echo $entry->date('Y-m-d') ?>
        </a>
      </span>
    </div><!-- .span-17 last post-->
    <?php endforeach ?>
  </div><!-- .span-17 last -->
</div><!-- .span-17 last -->
<?php snippet('footer') ?>