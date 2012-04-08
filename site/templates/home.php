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
    <h3 class="ui">Latest Journal Entries</h3>
  </div>
  <div class="journal">
  <?php
    $journal = $pages->find('journal');
    foreach($journal->children()->visible()->flip()->limit(3) as $entry):
  ?>
    <!-- ——————————————————————————————————————————————————————————————————— Post -->
    <div class="entry span-17 last">
      <h3><a href="<?php echo $entry->url() ?>"><?php echo html($entry->title()) ?></a></h3>
      <span class="entry_date">
      <?php echo $entry->date('Y-m-d') ?>
      </span>
    </div><!-- .entry-->
    <?php endforeach ?>
  </div><!-- .journal -->
</div><!-- .span-17 last -->
<?php snippet('footer') ?>