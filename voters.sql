--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `id_card` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `voters` CHANGE `id` `id` INT(225) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);