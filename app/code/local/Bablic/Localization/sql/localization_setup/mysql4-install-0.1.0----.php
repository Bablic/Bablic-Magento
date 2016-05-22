<?php

$installer = $this;

$installer->startSetup();

$installer->run("
 CREATE TABLE {$this->getTable('bablic_localization')} (
  `localization_id` int(11) unsigned NOT NULL auto_increment,
  `localization_detail` text,
  `status` int(11) NOT NULL,
  'access_token' text,
  'site_id' int(10),
  `created_time` datetime NULL,
  PRIMARY KEY (`localization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->endSetup(); 