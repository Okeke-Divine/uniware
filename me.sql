CREATE TABLE `schools` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`school_name` TEXT NOT NULL ,
`school_code` INT NOT NULL ,
`school_address` TEXT NOT NULL ,
`school_country` TEXT NOT NULL ,
`school_state` TEXT NOT NULL ,
`verified` INT NOT NULL ,
`blocked` INT NOT NULL ,
`deleted` INT NOT NULL
) ENGINE = MYISAM ;

ALTER TABLE `schools` ADD `time` TEXT NOT NULL ;


ALTER TABLE `schools` CHANGE `verified` `verified` ENUM( '0', '1' ) NOT NULL ,
CHANGE `blocked` `blocked` ENUM( '0', '1' ) NOT NULL ,
CHANGE `deleted` `deleted` ENUM( '0', '1' ) NOT NULL ;
ALTER TABLE `schools` CHANGE `school_code` `school_code` TEXT NOT NULL ;

ALTER TABLE `schools` ADD `admin_considered` TEXT NOT NULL ;


CREATE TABLE `u_n_i_w_a_r_e`.`users_admin` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`username` TEXT NOT NULL ,
`password` TEXT NOT NULL ,
`school_code` TEXT NOT NULL ,
`email` TEXT NOT NULL ,
`phone_number` TEXT NOT NULL
) ENGINE = MYISAM ;



CREATE TABLE `users_teachers` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_name` TEXT NOT NULL ,
`password` TEXT NOT NULL ,
`school` TEXT NOT NULL
) ENGINE = MYISAM ;


CREATE TABLE `users_students` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_name` TEXT NOT NULL ,
`password` TEXT NOT NULL ,
`school` TEXT NOT NULL
) ENGINE = MYISAM ;


ALTER TABLE `users_teachers` ADD `viewed` ENUM( '0', '1' ) NOT NULL ,
ADD `deleted` ENUM( '0', '1' ) NOT NULL ;


ALTER TABLE `users_students` ADD `viewed` ENUM( '0', '1' ) NOT NULL ,
ADD `deleted` ENUM( '0', '1' ) NOT NULL ;


ALTER TABLE `users_students` CHANGE `viewed` `blocked` ENUM( '0', '1' ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;

ALTER TABLE `users_teachers` CHANGE `viewed` `blocked` ENUM( '0', '1' ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL 

ALTER TABLE `users_admin` ADD `blocked` ENUM( '0', '1' ) NOT NULL ,
ADD `deleted` ENUM( '0', '1' ) NOT NULL ;
