<?php 
// 控制器基类
class Controller {
    protected $pageName = '';
    protected $loadJs = true;
    protected $data = null;
    function __construct() {
    
    }
    protected function view($name = '') {
        $name = $name ? $name : VIEW . '.ctp';
        $this->fileName = $fileName= './view/'. $name;

        if(!is_file($fileName)) {
            echo "<h1 style='text-align:center; margin-top:50px;'>你肯定没有按照提示一步一步的操作</h2>
                    <h1 style='text-align:center; margin-top:50px;'><span style='color:red; font-weight:700;'>/view/". VIEW .".ctp</span>这个文件肯定不存在，再仔细好好的检查检查！</h1>
            "; 
            exit;
        }

<<<<<<< HEAD
       require( 'view/enter/template.ctp');
=======
       require(__WEB__ . 'view/enter/template.ctp');
>>>>>>> ee232e3d738279320d3a638b94eeae53b3e71b5d
    }

    public function renderMainContent() {
        require($this->fileName);
    }

    protected function renderCssContent() {
        $pageName = $this->pageName;
<<<<<<< HEAD
        $cssJson =__WEB__  . "gruntjs/css/" . 'link.json';
=======
        $cssJson =__WEB__  . "css/" . 'link.json';
>>>>>>> ee232e3d738279320d3a638b94eeae53b3e71b5d
        $cssArray  = json_decode(file_get_contents($cssJson, true));

        foreach($cssArray as $key => $value) {
            if($key === "GLOBAL") :
                foreach($value as $v) {
<<<<<<< HEAD
                    echo "\t<link rel='stylesheet' type='text/css' href=". __WEB__ ."gruntjs/css/" . $v.".min.css>\n\t";
=======
                    echo "\t<link rel='stylesheet' type='text/css' href=". __WEB__ ."css/" . $v.">\n\t";
>>>>>>> ee232e3d738279320d3a638b94eeae53b3e71b5d
                }
                endif;

            if($pageName) :
                if($key === $pageName):
                    foreach($value as $v) {
<<<<<<< HEAD
                        echo "\t<link rel='stylesheet' type='text/css' href=". __WEB__ ."gruntjs/css/" . $v.".min.css>\n\t";
=======
                        echo "\t<link rel='stylesheet' type='text/css' href=". __WEB__ ."css/" . $v.">\n\t";
>>>>>>> ee232e3d738279320d3a638b94eeae53b3e71b5d
                    }
                    endif;
                endif;
        }
<<<<<<< HEAD
    } 
=======
    }
>>>>>>> ee232e3d738279320d3a638b94eeae53b3e71b5d

    protected function renderJsContent() {
        $pageVars = array();
        $pageVars['NAME'] = $this->pageName;    
        $pageVars['LOADJS'] = $this->loadJs;
        $pageVars['DATA'] = $this->data;
        $pageVars = json_encode($pageVars);

        $jsContent =<<<js
       \n\t <script>var   zPREFACE = {$pageVars};</script>
js;
    echo $jsContent;

    echo $add = "\n\t\t<script src='". __WEB__ ."js/libs/sea.js' data-config='" .__WEB__. "js/sea-config.js' data-main='" .__WEB__. "js/boot.js'></script>\n";

    }

}
