# wellness
This is a php mysql (mariaBD) application I wrote for Rebecca Schlegal at Pasco High School.
I would like to license it as Open Source so others could add to and develop it.
I will publish the database structure in this README.md

CREATE TABLE IF NOT EXISTS `wellness` (
  `id` int(32) NOT NULL auto_increment,
  `ip` varchar(64) NOT NULL,
  `timein` varchar(32) NOT NULL,
  `datein` varchar(32) NOT NULL,
  `namenumber` varchar(64) NOT NULL,
  `scores` varchar(64) NOT NULL,
  `total` varchar(3) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;
