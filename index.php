<?php

error_reporting(E_ALL);
spl_autoload_register(function ($class_name) {
    include 'class/' . $class_name . '.php';
});

$config = parse_ini_file('config.ini', TRUE);
$db = new MyDb($config['database']);
$view = new View();
$application = new Application($db, $view, $config);

if(isset($_REQUEST['action'])){
    $action = preg_replace('/[^a-z]/i','', $_REQUEST['action']);
} else{
    $action = 'index';
}

$application->setAction($action, $_REQUEST);

?>