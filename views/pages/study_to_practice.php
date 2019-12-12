
<div class="koop-content">

<h1>Vom Studium in die Praxis</h1>
<div>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. 
    Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
</div>

<div class="flex-wrapper">

    <div class="flex-container">
     <h1>Lehrer_Innen-Persönlichkeit</h1>
<ul>
  <li>
      Präsentation
  </li>
  <li style="background-image:url(<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/koop.png'?>)">
      Stimme und Körpersprache
  </li>
  <li>
      Haltung und Rolle(n)
  </li>
  <li>
      Lehrportfolio
  </li>
  <li>
      Evaluation
  </li>
</ul>
</div>

<div class="flex-container">
<h1>Rund ums Lehramtsstudium</h1>
<ul>
  <li>
      Aktuelle Studien
  </li>
  <li>
      Wissenschaftliches Arbeiten
  </li>
  <li>
      Kommatrainer
  </li>
  <li>
      Recherche
  </li>
  <li>
      Leitfaden Hausarbeit
  </li>
  <li>
      Bedarfsprognosen Lehramt
  </li>
</ul>
</div>

<div class="flex-container">
<h1>Lehrformate und Methoden</h1>
<ul>
  <li>
      Forschendes Lernen
  </li>
  <li>
      Problemorientiertes
  </li>
  <li>
      Kommatrainer
  </li>
  <li>
      Recherche
  </li>
  <li>
      Leitfaden Hausarbeit
  </li>
  <li>
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
    
    .flex-wrapper{
        display: flex;
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
        width: 230px;
        border: solid thin #28497c;
        margin: 15px;
        padding: 20px;
    }
    .flex-container ul {
        list-style: none;
        padding-left: 0px;
    }
    .flex-container ul li{
        background-size: 16px;
        background-position: 0 0;
        background-repeat: no-repeat;
        padding-left: 2em; 
        background-image:url(<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/koop.png'?>)
    }
</style>
