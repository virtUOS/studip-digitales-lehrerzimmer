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
        PageLayout::setTitle(_("teach UOS"));
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

 
    public function digital_teaching_action(){
        Navigation::activateItem('koop/digital_teaching');
       
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
