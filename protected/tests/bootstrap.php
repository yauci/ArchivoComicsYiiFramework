<?php

// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../../../../../../opt/lampp/htdocs/yii/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

date_default_timezone_set('America/Los_Angeles');

require_once($yiit);
require_once (Yii::getPathOfAlias('system.test.CTestCase').'.php');
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
