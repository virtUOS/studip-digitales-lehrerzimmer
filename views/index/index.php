
<div class="koop-content">


    <div class="flex-wrapper">
        
        <!-- Kachelen -->
        <div class="flex-container-half">
            
            <img src='<?= $GLOBALS['ABSOLUTE_URI_STUDIP'] . $this->plugin->getPluginPath() . '/assets/images/teach_os.png' ?>'/>
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
        width: 194px;
        height: 194px;
        padding: 3px
    }
    
    .flex-container-200-100 {
        width: 200px;
        height: 97px;
        padding-bottom: 3px
    }
    
    .flex-container-100-100 {
        width: 98px;
        height: 100px;
        padding-right: 2px;
    }
    
    .flex-container-100-50 {
        width: 100px;
        height: 48px;
        padding-bottom: 2px
    }
    
    .fill-blue {
        background-color: #28497c;
    }
</style>