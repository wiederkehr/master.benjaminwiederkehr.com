<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ——————————————————————————————————————————————————————————————————— META -->
  <meta charset="UTF-8" />
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="Description" content="<?php echo html($site->description()) ?>" />
  <meta name="Keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="Author" content="<?php echo html($site->author()) ?>" />
  <meta name="Copyright" content="<?php echo date('Y') ?>" />
  <meta name="Distribution" content="Global" />
  <meta name="Language" content="en" />
  <meta name="Robots" content="index, follow" />
  <!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
  <link rel="image_src" href="http://benjaminwiederkehr.com/assets/img/logos/benjaminwiederkehr_logo_dark.png" />
  <meta property="og:image" content="http://benjaminwiederkehr.com/assets/img/logos/benjaminwiederkehr_logo_dark.png" />
  <!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
  <link rel="icon" href="http://benjaminwiederkehr.com/favicon.ico" type="image/x-icon" />
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
  <?php echo css("http://benjaminwiederkehr.com/assets/vendor/jquery.orbit/orbit-1.2.3.css") ?>
  <?php echo css("http://benjaminwiederkehr.com/assets/css/style.css") ?>
  <?php echo css("http://benjaminwiederkehr.com/assets/css/master.css") ?>
  <?php foreach($page->files()->findByExtension('css') as $css): ?>
  <?php echo css($css->url()) ?>
  <?php endforeach ?>
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
  <script type="text/javascript" src="http://use.typekit.com/aea1puq.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <!-- ——————————————————————————————————————————————————————————————————— RSS -->
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('journal/feed') ?>" title="Benjamin Wiederkehr's Master Journal" />
</head>
<body>
  <div class="container">
    <div id="header" class="span-23">
      <h1>
        <a href="<?php echo url() ?>" rel="me" title="<?php echo h($site->title()) ?>">
          <img src="http://benjaminwiederkehr.com/assets/img/logos/benjaminwiederkehr_master_logo.png" width="230" height="150" alt="<?php echo h($site->title()) ?>" />
        </a>
      </h1>
    </div><!-- .span-23 -->