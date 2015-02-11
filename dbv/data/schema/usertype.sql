CREATE TABLE `usertype` (
  `usertype_id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`usertype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1