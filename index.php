<?php 
//Include Config
require('config.php');

require('classes/Bootstrap.php');

//uses GET superglobal
$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();


 ?>