<?php  
 
 
require_once(Yii::getPathOfAlias('application.extensions.smarty').DIRECTORY_SEPARATOR.'Smarty.class.php');  
//require_once('/protected/extensions/Smarty.class.php');  
define('SMARTY_VIEW_DIR', Yii::getPathOfAlias('application.views'));  
 
class CSmarty extends Smarty {  
    const DIR_SEP = DIRECTORY_SEPARATOR;  
    function __construct() {  
        parent::__construct();  
         
        $this->template_dir = SMARTY_VIEW_DIR;  
        $this->compile_dir = SMARTY_VIEW_DIR.self::DIR_SEP.'template_c';  
        $this->caching = true;  
        $this->cache_dir = SMARTY_VIEW_DIR.self::DIR_SEP.'cache';  
        $this->left_delimiter  =  '<!--{';  
        $this->right_delimiter =  '}-->';  
        $this->cache_lifetime = 3600;  
    }  
    function init() {}  
}  
?> 