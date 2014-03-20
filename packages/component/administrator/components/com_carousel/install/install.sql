-- ----------------------------
--  Table structure for `#__carousel_items`
-- ----------------------------
CREATE TABLE IF NOT EXISTS `#__carousel_items` (
  `carousel_item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL,
  `cck_fieldset_id` int(11) NOT NULL DEFAULT '11',
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'slide',
  `ordering` bigint(20) unsigned NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`carousel_item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `#__carousel_categories` (
  `carousel_category_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `locked_on` datetime NOT NULL,
  `locked_by` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY (`carousel_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `#__cck_fieldsets`
-- ----------------------------
BEGIN;
INSERT INTO `#__cck_fieldsets` VALUES ('11', 'Slider', 'slider', '1', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
COMMIT;

-- ----------------------------
--  Records of `#__cck_fieldsets_elements`
-- ----------------------------
BEGIN;
INSERT INTO `#__cck_fieldsets_elements` VALUES ('11', '26', '', '', '', '0', '5', '1', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0'), ('11', '8', '', '', '', '0', '2', '1', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0'), ('11', '24', '', '', '', '0', '3', '1', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0'), ('11', '25', '', '', '', '0', '4', '1', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0'), ('11', '1', '', '', '', '0', '1', '1', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0'), ('11', '27', '', '', '', '0', '6', '1', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
COMMIT;