<?php snippet('header') ?>
<?php snippet('sidebar') ?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-17 last">
  <div class="span-17 last">
    <h3 class="ui">Journal</h3>
  </div>
  <div class="span-17 last journal">
  <?php foreach($page->children()->visible()->flip() as $entry): ?>
    <!-- ——————————————————————————————————————————————————————————————————— Post -->
    <div class="span-17 last entry">
      <h2><a href="<?php echo $entry->url() ?>"><?php echo html($entry->title()) ?></a></h2>
      <span class="journal_date">
      <?php echo $entry->date('Y-m-d') ?>
      </span>
    </div><!-- .span-17 last post-->
    <?php endforeach ?>
  </div><!-- .span-17 last -->
</div><!-- .span-17 last -->
<?php snippet('footer') ?>