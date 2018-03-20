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
  <link rel="image_src" href="assets/img/benjaminwiederkehr_master_logo.png" />
  <meta property="og:image" content="assets/img/benjaminwiederkehr_master_logo.png" />
  <!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
  <?php echo css("assets/vendor/jquery.orbit/orbit-1.2.3.css") ?>
  <?php echo css("http://benjaminwiederkehr.com/assets/css/style.1.0.css") ?>
  <?php echo css("assets/css/style.css") ?>
  <?php foreach($page->files()->findByExtension('css') as $css): ?>
  <?php echo css($css->url()) ?>
  <?php endforeach ?>
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
  <script type="text/javascript" src="https://use.typekit.com/aea1puq.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <!-- ——————————————————————————————————————————————————————————————————— GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3202544-14"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-3202544-14');
  </script>
  <!-- ——————————————————————————————————————————————————————————————————— RSS -->
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('journal/feed') ?>" title="Benjamin Wiederkehr's Master Journal" />
</head>
<!-- ——————————————————————————————————————————————————————————————————— BODY -->
<body>
  <div class="container">
    <div id="header" class="span-23">
      <div class="span-6">
        <h1>
          <a href="<?php echo url() ?>" rel="me" title="<?php echo h($site->title()) ?>">
            <span class="title">Benjamin Wiederkehr</span>
  					<span class="subtitle">Master</span>
          </a>
        </h1>
      </div><!-- .span-6 -->
    </div><!-- .span-23 -->
