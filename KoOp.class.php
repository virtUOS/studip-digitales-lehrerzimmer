<?php

/**
 * Doktorandenverwaltung.class.php
 *
 * ...
 *
 * @author  Annelene Sudau <asudau@uos.de>
 * @version 0.1a
 */


class KoOp extends StudipPlugin implements SystemPlugin 
{

    const KOOP_ROLE = 'KoOp';
    
    public function __construct()
    {
        parent::__construct();
        global $perm;

        if(RolePersistence::isAssignedRole($GLOBALS['user']->user_id,
                                                            self::KOOP_ROLE)){
            $navigation = new Navigation('Lehrer_innenzimmer');
            $navigation->setImage(Icon::create('doctoral_cap', 'navigation'));
            //$navigation->setImage($GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->getPluginPath() . '/assets/images/koop.png');
            $navigation->setURL(PluginEngine::getURL($this, array(), 'index'));
            
//            $item = new Navigation(_('Blick in die Fächer'), PluginEngine::getURL($this, array(), 'index'));
//            $navigation->addSubNavigation('index', $item);
            
            $item = new Navigation(_('Blick in die Fächer'), PluginEngine::getURL($this, array(), 'index/subjects'));
            $navigation->addSubNavigation('subjects', $item);
            
            $item = new Navigation(_('Digitaler Unterricht'), PluginEngine::getURL($this, array(), 'index/digital_teaching'));
            $navigation->addSubNavigation('digital_teaching', $item);
            
            $item = new Navigation(_('Vom Studium in die Praxis'), PluginEngine::getURL($this, array(), 'index/study_to_practice'));
            
            $sub_nav_6 = new Navigation(_('Zurück'), PluginEngine::getURL($this, array(), 'index'));
            $sub_nav_6->setImage(Icon::create('globe', 'navigation'));
            $item->addSubNavigation('index', $sub_nav_6);
            
            
            $sub_nav = new Navigation(_('Studienverlaufspläne'), PluginEngine::getURL($this, array(), 'index/studyplan'));
            $sub_nav->setImage(Icon::create('assessment', 'navigation'));
            $item->addSubNavigation('studyplan', $sub_nav);
            
            $sub_nav_2 = new Navigation(_('Professionalisierung'), PluginEngine::getURL($this, array(), 'index/professional'));
            $sub_nav_2->setImage(Icon::create('consultation', 'navigation'));
            $item->addSubNavigation('professional', $sub_nav_2);
            
            $sub_nav_3 = new Navigation(_('Rund ums Lehramtsstudium'), PluginEngine::getURL($this, array(), 'index/about_teaching'));
            $sub_nav_3->setImage(Icon::create('group2', 'navigation'));
            $item->addSubNavigation('about_teaching', $sub_nav_3);
            
            $sub_nav_4 = new Navigation(_('Lehrformate und Methoden'), PluginEngine::getURL($this, array(), 'index/forms_and_methods'));
            $sub_nav_4->setImage(Icon::create('globe', 'navigation'));
            $item->addSubNavigation('forms_and_methods', $sub_nav_4);
            
            $sub_nav_5 = new Navigation(_('Unterrichtsplanung'), PluginEngine::getURL($this, array(), 'index/planner'));
            $sub_nav_5->setImage(Icon::create('globe', 'navigation'));
            $item->addSubNavigation('planner', $sub_nav_5);
            
            $navigation->addSubNavigation('study_to_practice', $item);
            
            
            $item = new Navigation(_('Mein Weg durchs Studium'), PluginEngine::getURL($this, array(), 'index/my_way'));
            
            $sub_nav_8 = new Navigation(_('Zurück'), PluginEngine::getURL($this, array(), 'index'));
            $sub_nav_8->setImage(Icon::create('globe', 'navigation'));
            $item->addSubNavigation('index', $sub_nav_8);
            
            $sub_nav = new Navigation(_('Studienverlaufspläne'), PluginEngine::getURL($this, array(), 'index/studyplan'));
            $sub_nav->setImage(Icon::create('assessment', 'navigation'));
            $item->addSubNavigation('studyplan', $sub_nav);
            
            $sub_nav_2 = new Navigation(_('Beratungsangebote'), PluginEngine::getURL($this, array(), 'index/consulting'));
            $sub_nav_2->setImage(Icon::create('consultation', 'navigation'));
            $item->addSubNavigation('consulting', $sub_nav_2);
            
            $sub_nav_3 = new Navigation(_('Praktika'), PluginEngine::getURL($this, array(), 'index/practical training'));
            $sub_nav_3->setImage(Icon::create('group2', 'navigation'));
            $item->addSubNavigation('practical training', $sub_nav_3);
            
            $sub_nav_4 = new Navigation(_('Auslandsaufenthalt'), PluginEngine::getURL($this, array(), 'index/abroad'));
            $sub_nav_4->setImage(Icon::create('globe', 'navigation'));
            $item->addSubNavigation('abroad', $sub_nav_4);
            
            $sub_nav_5 = new Navigation(_('Fachschaften'), PluginEngine::getURL($this, array(), 'index/council'));
            $sub_nav_5->setImage(Icon::create('globe', 'navigation'));
            $item->addSubNavigation('council', $sub_nav_5);
            
            $sub_nav_6 = new Navigation(_('Fachstudienberater'), PluginEngine::getURL($this, array(), 'index/subject_consultant'));
            $sub_nav_6->setImage(Icon::create('globe', 'navigation'));
            $item->addSubNavigation('subject_consultant', $sub_nav_6);
            
            $sub_nav_7 = new Navigation(_('Zertifikate'), PluginEngine::getURL($this, array(), 'index/cert'));
            $sub_nav_7->setImage(Icon::create('globe', 'navigation'));
            $item->addSubNavigation('cert', $sub_nav_7);
            
            $navigation->addSubNavigation('my_way', $item);
            
            Navigation::addItem('/koop', $navigation);  
        }    
    }

    public function initialize ()
    {
        PageLayout::addStylesheet($this->getPluginURL().'/assets/koop.css');
    }

    public function perform($unconsumed_path)
    {
        $this->setupAutoload();
        $dispatcher = new Trails_Dispatcher(
            $this->getPluginPath(),
            rtrim(PluginEngine::getLink($this, array(), null), '/'),
            'index'
        );
        $dispatcher->plugin = $this;
        $dispatcher->dispatch($unconsumed_path);
        
    }

    private function setupAutoload()
    {
        if (class_exists('StudipAutoloader')) {
            StudipAutoloader::addAutoloadPath(__DIR__ . '/models');
        } else {
            spl_autoload_register(function ($class) {
                include_once __DIR__ . $class . '.php';
            });
        }
    }
}
