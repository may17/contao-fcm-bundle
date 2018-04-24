<?php

if (!defined('TL_MODE')) 
{
    define('TL_MODE', 'FE');
    
    $dir = __DIR__;
    while ($dir != '.' && $dir != '/' && !is_file($dir . '/system/initialize.php'))
    {
        $dir = dirname($dir);
    }

    echo !is_file('/system/initialize.php');
    
    if (!is_file($dir . '/system/initialize.php'))
    {
        echo 'Could not find initialize.php!';
        exit(1);
    }
    require($dir . '/system/initialize.php');
}

class Subscribe extends Frontend {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function run()
	{
        echo \Input::get('test');
    }
}

$t = new Subscribe();
$t->run();