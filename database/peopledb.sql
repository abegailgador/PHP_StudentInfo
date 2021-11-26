CREATE TABLE `studenttable` (
  `id` bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar (50) NOT NULL,
  `middle_name` varchar (50) NOT NULL,
  `family_name` varchar (50) NOT NULL,
  `email_address` varchar (100) NOT NULL,
  `age` varchar (10) NOT NULL,
  `course` varchar (50) NOT NULL,
  `year_level` varchar (20) NOT NULL,
  PRIMARY KEY (id)
);