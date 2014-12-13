<?php

$Vtiger_Utils_Log = true;

include_once('vtlib/Vtiger/Menu.php');
include_once('vtlib/Vtiger/Module.php');

// Create module instance and save it first
$module = new Vtiger_Module();
$module->name = 'NgBlock';
$module->version = '1.0';
$module->save();

// Initialize all the tables required
$module->initTables();

// Add the module to the Menu (entry point from UI)
$menu = Vtiger_Menu::getInstance('Settings');
$menu->addModule($module);

$module->setDefaultSharing('Public'); 
$module->initWebservice();
/** Enable and Disable available tools */
$module->enableTools(Array('Import', 'Export', 'Merge'));