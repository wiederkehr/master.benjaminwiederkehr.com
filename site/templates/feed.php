<?php 

$articles = $pages->find('journal')->children()->visible()->flip()->limit(10);

snippet('feed', array(
  'link'  => url('journal'),
  'items' => $articles,
  'descriptionField'  => 'text', 
  'descriptionLength' => 300
));

?>