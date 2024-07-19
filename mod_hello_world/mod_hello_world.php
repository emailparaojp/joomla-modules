<?php
defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';

$textoModulo = $params->get('textoModulo');

require JModuleHelper::getLayoutPath('mod_hello_world');