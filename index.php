<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove / comment the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
// Include Yii bootstrap file
require_once($yii);
Yii::createWebApplication($config)->run();


/*
 * High level Application Lifecycle
 * 1- Pre-initialize: Capplication::preinit()
 * 2- Setup class auto loader & error handling
 * 3- Register core app components
 * 4- Load app config
 * 5- Initialize App: Capplication::init()
 *      a- Register app behaviors
 *      b- Load static app components
 * 6- Raise onBeginRequest event
 * 7- Process user request
 *      a- Resolve user request
 *      b- Create controller
 *      c- Run controller
 * 8- Raise onEndRequest event
 */