-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 24, 2020 at 10:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
                           `id` int(11) NOT NULL,
                           `titre` varchar(50) NOT NULL,
                           `description` longtext NOT NULL,
                           `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `description`, `id_user`) VALUES
(1, 'Coeur', 'en bon état', 10),
(2, 'Pied', 'Moyen mais passable', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `id` int(11) NOT NULL,
                        `login` varchar(50) NOT NULL,
                        `password` varchar(50) NOT NULL,
                        `email` varchar(50) NOT NULL,
                        `description` longtext,
                        `date_inscription` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `description`, `date_inscription`) VALUES
(10, 'DelphineLep', '4acf98715cbacd7d0a44b3c73f217ddc2ad38b93', 'a@a.com', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
    ADD PRIMARY KEY (`id`),
    ADD KEY `annonce_user_FK` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
    ADD CONSTRAINT `annonce_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
