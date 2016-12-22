

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `nickname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `cellphone` varchar(128) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD KEY `slug` (`slug`);


ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
