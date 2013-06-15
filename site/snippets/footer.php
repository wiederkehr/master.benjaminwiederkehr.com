  </div><!-- .container -->
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
  <?php echo js("http://benjaminwiederkehr.com/assets/vendor/jquery/jquery-2.0.2.min.js") ?>
  <?php echo js("http://benjaminwiederkehr.com/assets/vendor/jquery.orbit/jquery.orbit-1.2.3.min.js") ?>
  <?php echo js("http://benjaminwiederkehr.com/assets/js/master.js") ?>
  <?php foreach($page->files()->findByExtension('js') as $js): ?>
  <?php echo js($js->url()) ?>
  <?php endforeach ?>
</body>
</html>