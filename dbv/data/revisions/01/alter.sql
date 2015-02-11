ALTER TABLE `payroll`.`user_usertype` 
ADD INDEX `usertype_idx` (`usertype_id` ASC);
ALTER TABLE `payroll`.`user_usertype` 
ADD CONSTRAINT `usertype`
  FOREIGN KEY (`usertype_id`)
  REFERENCES `payroll`.`usertype` (`usertype_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE,
ADD CONSTRAINT `user`
  FOREIGN KEY (`user_id`)
  REFERENCES `payroll`.`users` (`user_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;

ALTER TABLE `payroll`.`user_session` 
ADD CONSTRAINT `user_id`
  FOREIGN KEY (`user_id`)
  REFERENCES `payroll`.`users` (`user_id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;