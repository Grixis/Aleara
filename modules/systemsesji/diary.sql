CREATE TABLE IF NOT EXISTS `diary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  `type` char(1) NOT NULL DEFAULT 'H',
  `location` varchar(100) NOT NULL,
  `poradnia` varchar(100) NOT NULL,
  `private` char(1) NOT NULL,
  `zezwolenie` varchar(255) NOT NULL,
  `wiesc` int(11) NOT NULL DEFAULT '0',
  `avatar` varchar(20) NOT NULL,
  `archiwal` char(1) NOT NULL DEFAULT 'N',
  `votes` int(11) NOT NULL DEFAULT '0',
  `votes_ptk` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `karczma` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `owner` (`owner`),
  KEY `type` (`type`),
  KEY `date` (`date`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `diary_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diaryid` int(11) NOT NULL DEFAULT '0',
  `owner` int(11) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT '',
  `narrator` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `avatar` varchar(38) NOT NULL,
  `wb` int(11) NOT NULL,
  `rasa` varchar(20) NOT NULL,
  `klasa` varchar(20) NOT NULL,
  `poziom` int(11) NOT NULL,
  `podklasa` varchar(20) NOT NULL,
  `rzut` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `subskrybcja_all` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `type` char(1) CHARACTER SET utf8 NOT NULL,
  `t_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `owner` (`owner`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

ALTER TABLE `players` ADD `mg` CHAR( 1 ) NOT NULL DEFAULT 'N'
ALTER TABLE `players` ADD `diary` INT( 2 ) NOT NULL DEFAULT '0'