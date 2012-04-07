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
  <link rel="image_src" href="http://benjaminwiederkehr.com/assets/images/benjaminwiederkehr_logo.png" />
  <!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
  <link rel="icon" href="http://benjaminwiederkehr.com/favicon.ico" type="image/x-icon" />
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
  <link rel="stylesheet" href="http://benjaminwiederkehr.com/assets/css/global/screen.css" type="text/css" media="screen, projection" />
  <link rel="stylesheet" href="http://benjaminwiederkehr.com/assets/css/global/print.css" type="text/css" media="print" />
  <link rel="stylesheet" href="<?php echo url() ?>/assets/stylesheets/orbit-1.2.3.css" type="text/css" media="screen, projection" />
  <link rel="stylesheet" href="<?php echo url() ?>/assets/stylesheets/master.css" type="text/css" media="screen, projection" />
  <?php foreach($page->files()->findByExtension('css') as $css): ?>
  <?php echo css($css->url()) ?>
  <?php endforeach ?>
  <!--[if lt IE 8]>
    <link rel="stylesheet" href="css/global/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
  <script type="text/javascript" src="<?php echo url() ?>/assets/javascripts/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php echo url() ?>/assets/javascripts/jquery.orbit-1.2.3.min.js"></script>
  <script type="text/javascript" src="<?php echo url() ?>/assets/javascripts/jquery.footnotes.1-2-2.min.js"></script>
  <script type="text/javascript" src="http://use.typekit.com/aea1puq.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script type="text/javascript" src="<?php echo url() ?>/assets/javascripts/master.js"></script>
  <?php foreach($page->files()->findByExtension('js') as $js): ?>
  <?php echo js($js->url()) ?>
  <?php endforeach ?>
</head>
<body>
  <div class="container">
    <div id="header" class="span-23">
      <h1>
        <a href="<?php echo url() ?>" rel="me" title="<?php echo h($site->title()) ?>">
          <img src="http://benjaminwiederkehr.com/assets/img/benjaminwiederkehr_master_logo.png" width="230" height="150" alt="<?php echo h($site->title()) ?>" />
        </a>
      </h1>
    </div><!-- .span-23 -->