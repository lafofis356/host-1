<?php
/**
 * @package Blox Page Builder
 * @author UniteCMS.net
 * @copyright (C) 2017 Unite CMS, All Rights Reserved. 
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * */
defined('BLOXBUILDER_INC') or die('Restricted access');


require HelperUC::getPathViewObject("layouts_view.class");
require HelperUC::getPathViewProvider("provider_layouts_view.class");

if(!isset($layoutType))
	$layoutType = UniteFunctionsUC::getGetVar("layout_type", "",UniteFunctionsUC::SANITIZE_KEY);
	

$objLayouts = new UniteCreatorLayoutsViewProvider();
$objLayouts->setLayoutType($layoutType);
$objLayouts->display();
