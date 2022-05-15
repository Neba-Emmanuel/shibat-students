-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 01:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shibat_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL DEFAULT 'swisslink1234',
  `role` varchar(32) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `Email`, `Password`, `role`, `Created_on`) VALUES
(1, 'superadmin@swisslinkedu.com', 'emmanuel', 'System Admin', '2022-03-11 12:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `ID` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `dob` varchar(32) NOT NULL,
  `pob` varchar(32) NOT NULL,
  `tel` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(32) NOT NULL,
  `maritalStatus` varchar(32) NOT NULL,
  `specialNeeds` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `img` varchar(100) NOT NULL,
  `idCard` varchar(100) NOT NULL,
  `birthCert` varchar(100) NOT NULL,
  `fatherName` varchar(32) DEFAULT NULL,
  `fatherAddress` varchar(32) DEFAULT NULL,
  `fatherNum` varchar(32) DEFAULT NULL,
  `motherName` varchar(32) DEFAULT NULL,
  `motherAddress` varchar(32) DEFAULT NULL,
  `motherNum` varchar(32) DEFAULT NULL,
  `sponsorName` varchar(32) DEFAULT NULL,
  `sponsorAddress` varchar(32) DEFAULT NULL,
  `sponsorNum` varchar(32) DEFAULT NULL,
  `school` varchar(32) NOT NULL,
  `programme` varchar(32) NOT NULL,
  `level` varchar(32) NOT NULL,
  `instituteAttended` varchar(100) NOT NULL,
  `dfrom` varchar(32) NOT NULL,
  `dto` varchar(32) NOT NULL,
  `programmestudied` varchar(32) NOT NULL,
  `certificate_earned` varchar(32) NOT NULL,
  `remark` varchar(32) DEFAULT NULL,
  `uploadq` varchar(100) NOT NULL,
  `admission_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Matricle` varchar(9) NOT NULL DEFAULT 'SLSS000',
  `status` varchar(32) NOT NULL DEFAULT 'pending',
  `admi_money` int(11) NOT NULL,
  `instituteEmail` varchar(50) NOT NULL DEFAULT 'swisslinkedu.com',
  `admissionDate` varchar(15) DEFAULT NULL,
  `campus_location` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`ID`, `name`, `dob`, `pob`, `tel`, `email`, `gender`, `nationality`, `maritalStatus`, `specialNeeds`, `address`, `img`, `idCard`, `birthCert`, `fatherName`, `fatherAddress`, `fatherNum`, `motherName`, `motherAddress`, `motherNum`, `sponsorName`, `sponsorAddress`, `sponsorNum`, `school`, `programme`, `level`, `instituteAttended`, `dfrom`, `dto`, `programmestudied`, `certificate_earned`, `remark`, `uploadq`, `admission_time`, `Matricle`, `status`, `admi_money`, `instituteEmail`, `admissionDate`, `campus_location`) VALUES
(1, 'Neba Emmanuel Fuh', '12/05/2000', 'Bamenda', '676607269', 'nebaemmanuel736@gmail.com', 'Male', 'Cameroonian', 'Single', 'None', 'Buea Road, Kumba', 'IMG_20210627_163028.jpg', '1-s2.0-S1743919116310573-main.pdf', 'document.pdf', 'Neba Samuel', 'Buea Road, Kumba', '67798990', 'Neba Beatrice', 'Buea Road, Kumba', '67889009', 'Neba Samuel', 'Buea Road, Kumba', '67798990', 'School of Technology', 'Software Engineering', 'HND', 'CCAS Kumba', '07 - 09 - 2017', '10 - 07 - 2019', 'Science', 'Advanced Level', 'Good', 'atestation-2.pdf', '2022-05-03 15:09:54', 'SLK22T101', 'admitted', 25000, 'neba.fuh@swisslinkedu.com', '03 May, 22', 'Kumba'),
(5, 'John Doe', '2010-06-23', 'Buea', '6789433424', 'jogndoe@gmail.com', 'Male', 'Cameroonian', 'Single', 'None', 'Buea', 'IMG-20220122-WA0000.jpg', 'atestation-2.pdf', 'atestation.pdf', '', '', '', '', '', '', '', '', '', 'School of Business', 'Accounting', 'HND', 'GBHS Kumba', '2020-02-04', '2022-06-20', 'Arts', 'Advanced Level', 'Good', 'school_administration_and_management.pdf', '2022-04-07 22:50:49', 'SLD22B102', 'admitted', 0, 'john.doe@swisslinkedu.com', '25/03/2022', ''),
(6, 'Besong Bright', '2001-03-05', 'Mamfe', '677902767', 'brightbesong@gmail.com', 'Female', 'Cameroonian', 'Married', 'None', 'Kumba', '', '', '', '', '', '', '', '', '', '', '', '', 'School of Business', 'Accounting', 'Degree', '', '', '', '', '', '', '', '2022-04-07 22:51:02', 'SLK22B103', 'admitted', 0, 'besong.bright@swisslinkedu.com', '04 Apr, 22', 'Kumba'),
(7, 'Toh Silvian', '2022-02-03', 'Bamenda', '687990944', 'tohsilvian@gmail.com', 'Female', 'Cameroonian', 'Single', 'None', 'Douala', '23770873439_status_b026ff24df514fa287f506c57f54987b.jpg', '', '', '', '', '', '', '', '', '', '', '', 'School of Education', 'Special Education', 'Degree', '', '', '', '', '', '', '', '2022-05-03 10:47:12', 'SLD22E107', 'admitted', 0, 'toh.silvian@swisslinkedu.com', '03 May, 22', 'Douala'),
(8, 'Test User', '2022-04-02', 'Kumba', '678802776', 'test@gmail.com', 'Male', 'Cameroonian', 'Single', 'None', 'Kumba', 'IMG-20210821-WA0019.jpg', 'BehavioralThOrg.pdf', 'Payment reciept.pdf', 'Test user1', 'Kumba', '67993662', 'Test user 2', 'Kumba', '67893231', '', '', '', 'School of Technology', 'Telecommunication', 'HND', 'CCAS Kumba', '2022-03-30', '2022-04-06', 'Science', 'Advanced Level', 'Good', 'atestation.pdf', '2022-04-08 08:02:59', 'SLK22T104', 'admitted', 0, 'test.user@swisslinkedu.com', '08 Apr, 22', 'Kumba'),
(9, 'kuh elizabeth ulle', '1999-06-10', 'bole bakundu', '676717763', 'lyzabelleulle@gmail.com', 'Female', 'Cameroonian', 'Single', 'None', '', 'WIN_20220217_12_20_15_Pro.jpg', '', '', '', '', '', '', '', '', '', '', '', 'School of Technology', 'Software Engineering', 'HND', '', '', '', '', '', '', '', '2022-04-08 12:24:10', '00000000', 'pending', 0, 'swisslinkedu.com', NULL, 'Kumba');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `ID` int(11) NOT NULL,
  `author` varchar(32) NOT NULL,
  `title` text DEFAULT NULL,
  `body` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attachment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`ID`, `author`, `title`, `body`, `time`, `attachment`) VALUES
(1, 'System Admin', 'Test Announcement', '<b>Hello,</b> <i><u>World!</u></i>', '2022-03-22 23:51:19', NULL),
(2, 'System Admin', 'Course Registration', 'Hey!, <i>it works...</i>', '2022-03-25 19:48:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `registration_account`
--

CREATE TABLE `registration_account` (
  `ID` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `DOB` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_account`
--

INSERT INTO `registration_account` (`ID`, `Name`, `Email`, `DOB`, `Password`, `Created_on`) VALUES
(1, 'Neba Emmanuel Fuh', 'nebaemmanuel736@gmail.com', '12/05/2000', '202cb962ac59075b964b07152d234b70', '2022-03-01 17:24:17'),
(2, 'Besong Bright', 'brightbesong@gmail.com', '10/05/2001', 'b2674bfdd6e99bf9f94ff22a16ccc035', '2022-03-03 20:38:07'),
(3, 'nshom samuel ngum', 'ferdinandetc3hu@gmail.com', '12/05/2000', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-09 17:53:16'),
(4, 'John Doe', 'jogndoe@gmail.com', '05/09/2002', '25d55ad283aa400af464c76d713c07ad', '2022-03-16 17:43:20'),
(5, 'ronald', 'ferdinandetchu@gmail.com', '12/05/2000', '25d55ad283aa400af464c76d713c07ad', '2022-03-16 18:02:16'),
(6, 'Bisong Bright', 'brightbisong@gmail.com', '2009-06-16', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-16 21:37:01'),
(7, 'Toh Silvian', 'tohsilvian@gmail.com', '2022-02-07', 'ca3106a5ae0dc6d6099c14d905bd5e1d', '2022-04-07 09:03:29'),
(8, 'Test User', 'test@gmail.com', '2021-12-30', '5d9c68c6c50ed3d02a2fcf54f63993b6', '2022-04-08 07:52:40'),
(9, 'elizabeth ulle', 'lyzabelleulle@gmail.com', '1999-06-10', '28d483f1be5b2e36d71fee6a4616fa52', '2022-04-08 12:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `student_account`
--

CREATE TABLE `student_account` (
  `ID` int(11) NOT NULL,
  `Matricle_Number` varchar(32) NOT NULL,
  `Institute_Email` varchar(32) NOT NULL,
  `Phone_No.` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pic` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_account`
--

INSERT INTO `student_account` (`ID`, `Matricle_Number`, `Institute_Email`, `Phone_No.`, `Password`, `Created_on`, `pic`) VALUES
(1, 'SL22T101', 'neba.fuh@swisslinkedu.com', '6789433424', '0d0de813c1105498e3435dd2fbf7fa26', '2022-04-07 22:43:38', 'IMG-20220206-WA0006.jpg'),
(2, 'SL22B101', 'john.doe@swisslinkedu.com', '7689380332', '827ccb0eea8a706c4c34a16891f84e7b', '2022-04-07 01:48:15', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ID` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `level` varchar(10) NOT NULL,
  `amount` varchar(32) NOT NULL,
  `number` varchar(32) NOT NULL,
  `Matricle` varchar(32) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `registration_account`
--
ALTER TABLE `registration_account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_account`
--
ALTER TABLE `student_account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_account`
--
ALTER TABLE `registration_account`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_account`
--
ALTER TABLE `student_account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
