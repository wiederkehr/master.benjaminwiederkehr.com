  </div><!-- .container -->
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
  <script type="text/javascript" src="<?php echo url() ?>/assets/javascripts/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php echo url() ?>/assets/javascripts/jquery.orbit-1.2.3.min.js"></script>
  <script type="text/javascript" src="<?php echo url() ?>/assets/javascripts/master.js"></script>
  <?php foreach($page->files()->findByExtension('js') as $js): ?>
  <?php echo js($js->url()) ?>
  <?php endforeach ?>
</body>
</html>