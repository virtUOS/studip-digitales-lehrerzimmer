
<div class="koop-content">

<h1>Vom Studium in die Praxis</h1>
<div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. 
    Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
</div>

<div>

    <div class="flex-container">
     <h1>Lehrer_Innen-Persönlichkeit</h1>
<ul>
  <li>
    <?= Icon::create('add', 'clickable') ?> 
      Präsentation
  </li>
  <li>
      <img src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/koop.png'?>" alt="add" width="16" height="16">
      Stimme und Körpersprache
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Haltung und Rolle(n)
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Lehrportfolio
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Evaluation
  </li>
</ul>
</div>

<div class="flex-container">
<h1>Rund ums Lehramtsstudium</h1>
<ul>
  <li>
    <?= Icon::create('add', 'clickable') ?> 
      Aktuelle Studien
  </li>
  <li>
      <img src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/koop.png'?>" alt="add" width="16" height="16">
      Wissenschaftliches Arbeiten
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Kommatrainer
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Recherche
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Leitfaden Hausarbeit
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Bedarfsprognosen Lehramt
  </li>
</ul>
</div>

<div class="flex-container">
<h1>Lehrformate und Methoden</h1>
<ul>
  <li>
    <?= Icon::create('add', 'clickable') ?> 
      Forschendes Lernen
  </li>
  <li>
      <img src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/koop.png'?>" alt="add" width="16" height="16">
      Problemorientiertes
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Kommatrainer
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Recherche
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Leitfaden Hausarbeit
  </li>
  <li>
      <?= Icon::create('add', 'clickable') ?> 
      Bedarfsprognosen Lehramt
  </li>
</ul>
</div>

</div>

</div>
    
    
    
<img style="margin-left: auto; margin-right: auto; display: block;" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ?>/assets/images/study_to_practice.png"/>


<style>

    .koop-content {
        margin: 30px;
    }
    
    #page_title_container {
        display: none;
    }
    
    #flex-header {
/*        display: none !important;*/
    }

     #barTopMenu, #barTopStudip {
        display: none !important;
    }
    
    .flex-container {
        width: 200px;
    }
</style>
