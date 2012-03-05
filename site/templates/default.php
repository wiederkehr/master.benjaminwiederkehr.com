<?php snippet('header') ?>
<?php snippet('sidebar') ?>
<!-- ——————————————————————————————————————————————————————————————————— Content -->
<div id="content" class="span-17 last">
  <div class="span-17 last">
    <h3 class="ui"><?php echo html($page->title()) ?></h3>
  </div>
  <div class="span-17 last">
    <!-- ——————————————————————————————————————————————————————————————————— Post -->
    <div class="span-17 last post">
      <?php echo kirbytext($page->text()) ?>
    </div><!-- .span-17 last post-->
    <?php if($page->footnotes()) : ?>
    <!-- ——————————————————————————————————————————————————————————————————— Footnotes -->
    <div class="span-17 last footnotes">
      <ol id="autoFootnotes0" class="footnotesList"></ol>
    </div>
    <?php endif; ?>
    <?php if($page->updated()) : ?>
    <!-- ——————————————————————————————————————————————————————————————————— Version -->
    <div class="span-17 last version">
      <p>
        <span title="Last edited on <?php 
        $updated = strtotime($page->updated());
        echo date('Y-m-d', $updated);
        ?>">
        Version <?php echo $page->version();?>
        </span>
      </p>
    </div>
    <?php endif; ?>
  </div><!-- .span-17 last -->
</div><!-- .span-17 last -->
<?php snippet('footer') ?>