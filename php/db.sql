SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amaclone`
--
CREATE DATABASE IF NOT EXISTS `netflix` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `netflix`;


--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`,`address1`,`address2`) VALUES
(1, 'Ravi Hitang', 'ravihitang@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 0, '8660549912');

 $qry = "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`,`address1`,`address2`) VALUES
 ('','',);";