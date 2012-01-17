<?php snippet('header') ?>
<?php snippet('sidebar') ?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-17 last">
  <div class="span-17 last">
    <h3 class="ui"><?php echo html($page->title()) ?></h3>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Posts -->
  <div class="span-17 last">
    <!-- ——————————————————————————————————————————————————————————————————— Main -->
    <div class="span-17 last post">
      <?php echo kirbytext($page->text()) ?>
    </div><!-- .span-17 last post-->
    <div class="span-17 last footnotes">
      <ol id="autoFootnotes0" class="footnotesList"></ol>
    </div>
  </div><!-- .span-17 last -->
</div><!-- .span-17 last -->
<?php snippet('footer') ?>