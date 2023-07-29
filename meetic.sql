-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 29, 2023 at 05:14 PM
-- Server version: 5.7.32
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `meetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilisators`
--

CREATE TABLE `utilisators` (
  `id` int(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date_naissance` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `hobbie` varchar(255) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `date_connexion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisators`
--

INSERT INTO `utilisators` (`id`, `prenom`, `nom`, `mail`, `password`, `city`, `date_naissance`, `genre`, `hobbie`, `date_inscription`, `date_connexion`) VALUES
(1, 'Lucas', 'MARIE-ANNE', 'pro.lucasmarieanne@gmail.com', '$6$rounds=5000$Q95hhdhJG8763hja$J4Jq1cIr.GYKAINU6IBv/pq.c2WHXT4HGhHEwQ.vL.mZP8iP3hwI5H5QtvcqCME3ubiUD3DMT3WBo4VQjf7Hg.', 'Linas', '18', 'Homme', 'Salle de sport', '2023-02-22 15:26:47', '2023-02-22 15:26:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilisators`
--
ALTER TABLE `utilisators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilisators`
--
ALTER TABLE `utilisators`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
