<?php 
//Class Auto Load 
function ClassAutoLoad($ClassName){
    $directories = ["forms","processes","structure","tables","global","store"];
    foreach($directories AS $dir){
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir .  DIRECTORY_SEPARATOR . $ClassName . '.php';
        
        if(file_exists($FileName) AND is_readable($FileName)){
         require $FileName;
        }
   }
    
}
spl_autoload_register('ClassAutoLoad');

//require_once "structure/layouts.php";
$ObjLayouts = new layouts();

//require_once "structure/menus.php";
//Stores new layout class
$ObjMenus = new menus();
$ObjContents = new contents();

//$Obj = new fnc();
//print "me";
// $path = dirname(__FILE__) . DIRECTORY_SEPARATOR.  ;
//print $path;
//$arr = ["Green","Black","Red","White"];
//foreach($arr AS $color){
    //print $color . "<br>";
//}
//$file = "index.php";
//if(is_readable($file)){
//    print "Yes";
//}else{
//    print "No";
//}
