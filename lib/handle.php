<?php 
    include_once('lib/session.php'); 
    Session::init();
?>
<?php 
    include_once('lib/database.php');
    include_once('helpers/format.php');

    spl_autoload_register(function ($className) {
        include_once("classes/" .$className. ".php");
    });
    
    $db = new Database();
    $fm = new Format();

    $imgClass = new Image();
    
?>