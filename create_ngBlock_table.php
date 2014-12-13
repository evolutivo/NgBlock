<?php

require_once('include/utils/utils.php');

global $adb;
$adb->query("CREATE TABLE IF NOT EXISTS `vtiger_ng_block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `module_name` varchar(100) DEFAULT NULL,
  `pointing_block_name` varchar(100) DEFAULT NULL,
  `pointing_module_name` varchar(100) DEFAULT NULL,
  `pointing_field_name` varchar(100) DEFAULT NULL,
  `columns` varchar(100) DEFAULT NULL,
  `cond` varchar(100) DEFAULT NULL,
  `paginate` varchar(100) DEFAULT NULL,
  `add_record` varchar(100) DEFAULT NULL,
  `nr_page` int(11) DEFAULT NULL,
  `sort` varchar(100) DEFAULT NULL,
  `edit_record` varchar(50) DEFAULT NULL,
  `delete_record` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;
");

