<?php
class PagesController extends StudipController {

    public function __construct($dispatcher)
    {
        parent::__construct($dispatcher);
        $this->plugin = $dispatcher->plugin;

    }

    public function before_filter(&$action, &$args)
    {
        parent::before_filter($action, $args);
        PageLayout::setTitle(_("teachUOS"));
        PageLayout::addStylesheet($this->plugin->getPluginURL().'/assets/koop.css');

        $sidebar = Sidebar::Get();
        $sidebar->setImage('../../' .$this->plugin->getPluginPath() . '/assets/images/teach_os.png');


    }

    public function index_action()
    {
        Navigation::activateItem('koop/');
        
    }
    
     public function subjects_action()
    {
        Navigation::activateItem('koop/subjects');
        //$this->redirect(URLHelper::getURL('/studip/qplus-koop/seminar_main.php', ['auswahl' => 'a4204c684df5c46ec74a6f6420f1d81d']));
    }
    
    public function studyplan_action()
    {
        Navigation::activateItem('koop/study_to_practice/studyplan');
    }
    
    public function consulting_action()
    {
        Navigation::activateItem('koop/my_way/consulting');
    }
        
      
    public function study_to_practice_action()
    {
         Navigation::activateItem('koop/study_to_practice');
    }

    public function study_to_practice2_action()
    {
        Navigation::activateItem('koop/study_to_practice2');
    }
 
    public function digital_teaching_action(){
        Navigation::activateItem('koop/digital_teaching');
       
    }
    
    public function digital_teaching2_action(){
        Navigation::activateItem('koop/digital_teaching2');
    }
    
     public function my_way_action(){
        Navigation::activateItem('koop/my_way/council');
        PageLayout::setTitle(_("Mein Weg durchs Studium"));

       
    }
    
    public function my_way2_action(){
        Navigation::activateItem('koop/my_way2');
        PageLayout::setTitle(_("Mein Weg durchs Studium"));
    }
    
    public function Pruefungsordnungen_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=151');
    }
    public function Praktikum_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=152');
    }
    public function Fachschaften_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=153');
    }
    public function Professionalisierung_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=154');
    }
    public function Auslandsaufenthalte_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=155');
    }
    public function Beratungsangebote_action()
    {
        $this->redirect('../courseware/courseware?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=150');
    }

    public function cw_action(){
        
        // hide courseware navigation
        PageLayout::addStyle('.cw-sidebar { display: none; }');
        PageLayout::addStyle('.breadcrumb { display: none; }');
        PageLayout::addStyle('.active-subchapter { display: none; }');
        PageLayout::addStyle('.mode-switch { display: none; }');
        PageLayout::addStyle('#tabs { display: none; }');
        
        // add koop css
        PageLayout::addStylesheet($this->plugin->getPluginURL().'/assets/koop.css');
        PageLayout::addStylesheet($this->plugin->getPluginURL().'/assets/menu.css');
        
        // add koop menu
        PageLayout::addBodyElements($this->get_cw_menu());
        PageLayout::addScript($this->plugin->getPluginURL() . '/assets/menu.js');
        
        require_once 'vendor/trails/trails.php';
        require_once 'app/controllers/studip_controller.php';
        require_once 'app/controllers/authenticated_controller.php';
        
        $Courseware_Plugin = \PluginManager::getInstance()->getPlugin('Courseware');
        
        $dispatcher = new Trails_Dispatcher(
            $Courseware_Plugin->getPluginPath(),
            rtrim(PluginEngine::getLink($Courseware_Plugin, array(), null), '/'),
            'courseware'
            );
        $dispatcher->plugin = $Courseware_Plugin;
        
        $uri = 'courseware?'.explode('?',$_SERVER['REQUEST_URI'])[1];
        echo $dispatcher->map_uri_to_response($dispatcher->clean_request_uri((string) $uri))->output();
        exit();
    }
    
    public function get_cw_menu(){
        $menu_content = "
<div class='koop-sub-content koop-content-centered' style='width:100%;  display: none;'>
      <div class='koop-kacheln-behalter'>
    	
        <div class='flex-wrapper kacheln_header'>        
        	<img  style='width:181px;margin-bottom: 1em;' src='".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C0_studium.svg' />
    		<img  style='width:42px;margin-left: 75px;margin-bottom: 10px;' src='".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C0_comic.svg' />
    	</div>
    	
        <div class='flex-wrapper'>
    
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class='bottom' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C1_faq_hover.svg'/>
                        <img class='top' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C1_faq.svg'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class='bottom' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C2_verlaufsplan_hover.svg'/>
                        <img class='top' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C2_verlaufsplan.svg'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='./cw?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=151'>
                        <img class='bottom' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C3_kcl_hover.svg'/>
                        <img class='top' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C3_kcl.svg'/>
                    </a>
        </div>
        
        <div class='flex-wrapper'>
      
                    <a class='koop-index-navigation sub_kacheln'  href='./cw?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=153'>
                        <img class='bottom' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C4_erfahrungen_hover.svg'/>
                        <img class='top' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C4_erfahrungen.svg'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='./cw?cid=99965fd1039274ecc637698846c52f2b&selected=58'>
                        <img class='bottom' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C5_praktika_hover.svg'/>
                        <img class='top' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C5_praktika.svg'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='#'>
                        <img class='bottom' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C6_stipendien_hover.svg'/>
                        <img class='top' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C6_stipendien.svg'/>
                    </a>
     
        </div>
        
        <div class='flex-wrapper'>
            
                    <a class='koop-index-navigation sub_kacheln'  href='./cw?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=155'>
                        <img class='bottom' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C7_ausland_hover.svg'/>
                        <img class='top' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C7_ausland.svg'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='./cw?cid=a4204c684df5c46ec74a6f6420f1d81d&selected=150'>
                        <img class='bottom' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C8_beratung_hover.svg'/>
                        <img class='top' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/C8_beratung.svg'/>
                    </a>
                    <a class='koop-index-navigation sub_kacheln'  href='../'>
                        <img class='bottom' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/B_teachuos_hover.svg'/>
                        <img class='top' src=".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/B_teachuos.svg'/>
                    </a>
        </div>
                            
                            
                            
                            
        <div class='flex-wrapper'>
        </div>
                            
                            
        <div class='sub_schwebend_blick'><img src='".$GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ."/assets/images/A_schweben.svg'>
            </div>
            
   </div>
   <div class='koop-text-behalter'>
            
   </div>
</div>
";
        
        return $menu_content;
    }

    // customized #url_for for plugins
    public function url_for($to = '')
    {
        $args = func_get_args();

        # find params
        $params = array();
        if (is_array(end($args))) {
            $params = array_pop($args);
        }

        # urlencode all but the first argument
        $args = array_map('urlencode', $args);
        $args[0] = $to;

        return PluginEngine::getURL($this->dispatcher->plugin, $params, join('/', $args));
    }
    
    
    
}
