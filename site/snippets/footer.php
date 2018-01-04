  </div><!-- .container -->
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
  <?php echo js("assets/vendor/jquery/jquery-2.0.2.min.js") ?>
  <?php echo js("assets/vendor/jquery.orbit/jquery.orbit-1.2.3.min.js") ?>
  <?php echo js("assets/js/script.js") ?>
  <?php foreach($page->files()->findByExtension("js") as $js): ?>
  <?php echo js($js->url()) ?>
  <?php endforeach ?>
</body>
</html>
