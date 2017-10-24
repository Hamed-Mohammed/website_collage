-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2017 at 08:37 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collage`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `num_idenf` varchar(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `career_title` varchar(255) NOT NULL,
  `brith` varchar(255) NOT NULL,
  `emp_image` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `num_idenf`, `emp_name`, `password`, `career_title`, `brith`, `emp_image`, `salary`, `control`) VALUES
(1, 'col-0001', 'Hamed', '12345678', 'Developer', '1993/5/11', 'Hamed947065827.jpg', '12000000', 'yes'),
(2, 'col-0002', 'Ahmed', '2222', 'Engeering', '1990/1/6', 'Ahmed2048338960.jpg', '1000000', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title_news` varchar(255) NOT NULL,
  `text_news` text NOT NULL,
  `pic_for_news` varchar(255) NOT NULL,
  `access_to_control` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title_news`, `text_news`, `pic_for_news`, `access_to_control`) VALUES
(1, 'Academic Skills', 'The college is keen to provide training opportunities for students in the private sector and the public sector for special institutions to facilitate the integration of students in the job market after graduation, and the integration of academic skills and knowledge requirements of practical life. The college is seeking to launch a series of continuous education programs in the latest information and communication technologies for students and beneficiaries from inside and outside the university to spread education and culture in this area. To achieve the vision of the college and itâ€™s ambitious goals to acquire a privileged position among universities in the region the college needs to provide an environment and outstanding academic programs in addition to the scientific and practical capabilities of student development. The college decided each four years starting from 2009 to review the study plans for initial studies programs and graduate studies for all departments to keep pace with the evolution in this field and meet the requirements of the labor market.', 'Academic Skills1986783578.png', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
