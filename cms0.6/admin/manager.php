<?php
$rootFile = dirname(__FILE__);
$fileLength = mb_strlen(basename(dirname(__FILE__)), 'utf-8')*(-1);
require_once(substr($rootFile, 0, $fileLength) . 'initialise.inc.php');
require_once(ROOT_PATH . '/action/ManagerAction.class.php');
require_once(ROOT_PATH . '/model/Model.class.php');
require_once(ROOT_PATH . '/model/ManagerModel.class.php');

$template = new Template();
$manager = new ManagerAction($template);
//注入变量应在生成编译文件之前注入
$template->display('manager.tpl');
