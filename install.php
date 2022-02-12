<?php

defined('BASEPATH') or exit('No direct script access allowed');

 add_option('supportlink_enabled', 1);
 add_option('supportlink_menu_disabled', 0);
 add_option('supportlink_link', 'https://docs.macomi.online/');

$CI->db->query('SET foreign_key_checks = 0');

 if (!$CI->db->table_exists(db_prefix().'supportlink')) {
     $CI->db->query('CREATE TABLE `'.db_prefix().'supportlink` (
      `id` INT NOT NULL AUTO_INCREMENT ,
      `supportlink_name` VARCHAR(200) NOT NULL , 
      `supportlink_description` VARCHAR(200) NOT NULL , 
      `quantity_number` INT NOT NULL ,
      `supportlink_link` VARCHAR(200) NULL DEFAULT NULL ,
       PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET='.$CI->db->char_set.';');

     }


