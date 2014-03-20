DROP TABLE IF EXISTS `#__carousel_items`;
DROP TABLE IF EXISTS `#__carousel_categories`;

DELETE * FROM `#__cck_fieldsets` WHERE `cck_fieldset_id` = 1200;
DELETE * FROM `#__cck_fieldsets_elements` WHERE `cck_fieldset_id` = 1200;