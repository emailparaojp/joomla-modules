<?php
defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';

$items = ModCustomCarouselHelper::getItems($params);

require JModuleHelper::getLayoutPath('mod_custom_carousel');