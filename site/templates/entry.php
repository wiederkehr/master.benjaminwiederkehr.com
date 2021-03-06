<?php snippet('header') ?>
<?php snippet('sidebar') ?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-17 last">
  <div class="span-17 last">
    <h3 class="ui"><a href="<?php echo url('journal') ?>" title="Journal">Journal</a> &raquo; Entry</h3>
  </div>
  <div class="span-17 last">
    <!-- ——————————————————————————————————————————————————————————————————— Post -->
    <div class="span-17 last post">
      <h2 id="entry_title"><?php echo html($page->title()) ?></h2>
      <div id="entry_text">
        <?php echo kirbytext($page->text()) ?>
      </div>
    </div><!-- .span-17 last post-->
    <?php if($page->footnotes()) : ?>
    <!-- ——————————————————————————————————————————————————————————————————— Footnotes -->
    <div class="span-17 last footnotes">
      <ol id="autoFootnotes0" class="footnotesList"></ol>
    </div>
    <?php endif; ?>
  </div><!-- .span-17 last -->
</div><!-- .span-17 last -->
<?php snippet('footer') ?>