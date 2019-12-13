
<div class="koop-content-centered koop-content">


    <div class="flex-wrapper">
        
        <!-- Kachelen -->
        <div class="flex-container-half">
            
            <img style='width:350px' src='<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/teach_os.png' ?>'/>
            <!-- Zeile1 -->
            <div class="flex-wrapper">
                 <div class='flex-container-200-200'>
                    <div class="flex-wrapper-td">
                        <div class='flex-container-200-100 fill-blue'>text</div>
                        <div class='flex-container-200-100 fill-blue'>text</div>
                     </div>
                 </div>
                <div class='flex-container-200-200 fill-blue'>text</div>
            </div>
            
            <!-- Zeile2 -->
            <!-- Spalte1 -->
            <div class="flex-wrapper">
                <div class='flex-container-200-200'>
                <div class="flex-wrapper-td">
                    <div class='flex-container-200-100'>
                        <div class="flex-wrapper">
                            <div class='flex-container-100-100'>
                                <div class="flex-wrapper-td">
                                    <div class='flex-container-100-50 fill-blue'>text</div>
                                    <div class='flex-container-100-50 fill-blue'>text</div>
                                </div>
                            </div>
                            <div class='flex-container-100-100 fill-blue'>text</div>
                        </div>
                    </div>
                    <div class='flex-container-200-100 fill-blue'>text</div>
                </div>
                </div>
                
                <div class='flex-container-200-200'>
                    <div class="flex-wrapper-td">
                        <div class='flex-container-200-100 fill-blue'>text</div>
            
                        <div class="flex-wrapper">
                            <div class='flex-container-200-100'>
                            <div class="flex-wrapper">
                                 <div class='flex-container-100-100 fill-blue'>text</div>
                                 <div class='flex-container-100-100 fill-blue'>text</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        
        <div class="flex-container-half-index">

            <h1>Herzlich willkommen</h1>
                Du hast gerade dein Studium begonnen und fragst dich, wann du dein erstes Praktikum machen solltest oder welche Prügungsordnung für dich gilt?
                Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum 
                dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
            </div>
</div>





<img style="margin-left: auto; margin-right: auto; display: block;" src="<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() ?>/assets/images/index.png"/>

<style>
    #layout-sidebar {
        display: none;
    }
    #page_title_container{
        display: none;
    }
    
    .koop-content {
        margin: 30px;
    }
    
    .koop-content-centered {
        margin-left: auto;
        margin-right: auto;
        width: 1200px;
    }
    
    .koop-content h1 {
        text-transform: uppercase;
        margin-bottom: 1em;
        color: #28497c;
    }
    
    .koop-content h2 {
        text-transform: uppercase;
        margin-bottom: 1em;
        color: #28497c;
    }
    
    .flex-wrapper{
        display: flex;
    }
    
    .flex-wrapper-td {
        flex-direction: column;
        display: flex;
    }
     
    .flex-container-smallbox {
        width: 230px;
        border: solid 2px #28497c;
        border-radius: 15px;
        margin: 15px;
        padding: 20px;
    }
    .flex-container-smallbox ul {
        list-style: none;
        padding-left: 0px;
    }
    
    .flex-container-smallbox ul li {
        background-size: 20px;
        background-position: 0% 50%;
        background-repeat: no-repeat;
        padding: 0.5em 0 0 2em; 
        margin: 5px;
    }
    
    .flex-container-half {
        width: 460px;
        margin: 1em;
    }
    
    .flex-container-half-index {
        width: 660px;
        margin: 1em;
        padding-top: 100px;
        padding-left: 1em;
    }
    
    .flex-container-half-linklist {
        width: 460px;
        border: solid 2px #28497c;
        border-radius: 15px;
        margin: 1em;
        padding: 20px;
    }
    
    .flex-container-half-linklist ul {
        padding: 0 40px 0 10px;
    }
    
    .koop-container-full {
        margin: 1em;
    }
    
    .flex-container-200-200 {
        width: 200px;
        height: 200px;
        margin: 3px
    }
    
    .flex-container-200-100 {
        width: 200px;
        height: 97px;
        margin-bottom: 3px;
        overflow: hidden;
    }

    .flex-container-200-100:last-child {
        width: 200px;
        height: 100px;
        margin-bottom: 0;
    }
    
    .flex-container-100-100 {
        width: 98px;
        height: 100px;
        margin-right: 2px;
    }
    .flex-container-100-100:last-child{
        width: 100px;
        margin-right: 0;
    }
    
    .flex-container-100-50 {
        width: 98px;
        height: 45px;
        margin-bottom: 2px
    }

    .flex-container-100-50:last-child {
        height: 50px;
        margin-bottom: 0;
    }
    
    .fill-blue {
        background-color: #28497c;
    }
</style>
