<h1>Vom Studium in die Praxis</h1>
<div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. 
    Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
</div>


<h1>Lehrer_Innen-Persönlichkeit</h1>
<ul>
  <li>
    <?= Icon::create('add', 'clickable') ?> 
      Präsentation
  </li>
  <li>
      <img src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $plugin->getPluginPath() . '/assets/images/koop.png'?>"/>
      <?= Icon::create('add', 'clickable') ?> 
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

<img style="margin-left: auto; margin-right: auto; display: block;" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ?>/assets/images/study_to_practice.png"/>


<style>

    #page_title_container {
        display: none;
    }
    
    #flex-header {
/*        display: none !important;*/
    }

     #barTopMenu, #barTopStudip {
        display: none !important;
    }
</style>
