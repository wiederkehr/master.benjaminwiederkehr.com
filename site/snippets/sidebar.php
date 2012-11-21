<!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
<div id="sidebar" class="span-5 append-1">
  <div class="sidebar_title">
    <h3 class="ui">About</h3>
  </div>
  <div class="sidebar_content">
    <p class="lead">
      Hello, I am Benjamin,<br/> 
      User Experience Designer from Z&uuml;rich.
      This is where I document my Master study in Interaction Design.
    </p>
  </div>
  <div class="sidebar_title">
    <h3 class="ui">Navigation</h3>
  </div>
  <div class="sidebar_content">
    <ul>
      <?php foreach($pages->visible() AS $p): ?>
      <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="sidebar_title">
    <h3 class="ui">Information</h3>
  </div>
  <div class="sidebar_content">
    <dl>
      <dt>University</dt><dd><a href="http://www.zhdk.ch">Z&uuml;rich University of the Arts</a></dd>
      <dt>Institute</dt><dd><a href="http://sdfb.ch/">Swiss Design Institute for Finance and Banking</a></dd>
      <dt>Mentors</dt>
      <dd><a href="http://gmb.zhdk.ch/">Prof. Dr. Gerhard M. Buurman</a></dd>
      <dd><a href="http://viad.zhdk.ch/de/people/karmen-franinovic">Karmen Franinović</a></dd>
      <dt>Advisors</dt>
      <dd><a href="http://infosthetics.com/">Prof. Andrew Vande Moere</a></dd>
      <dd><a href="http://www.hs-augsburg.de/~mstoll/">Prof. Michael Stoll</a></dd>
      <dd><a href="http://enrico.bertini.me/">Prof. Enrico Bertini</a></dd>
      <dd><a href="http://stamen.com/">Eric Rodenbeck</a></dd>
      <dt>Partner</dt><dd><a href="http://interactivethings.com/">Interactive Things</a></dd>
    </dl>
  </div>
</div>