CREATE TABLE `user_usertype` (
  `user_id` int(11) NOT NULL,
  `usertype_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  KEY `user_id` (`user_id`,`usertype_id`),
  KEY `usertype_idx` (`usertype_id`),
  CONSTRAINT `usertype` FOREIGN KEY (`usertype_id`) REFERENCES `usertype` (`usertype_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1