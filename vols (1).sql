-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 juil. 2022 à 10:33
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vols`
--

-- --------------------------------------------------------

--
-- Structure de la table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(25) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

CREATE TABLE `passager` (
  `id` int(25) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `id_vols` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nombre_passager` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_vols`, `username`, `nombre_passager`, `categorie`) VALUES
(23, 26, 'Asmaa Salama', '4 passager', 'Classe Economique'),
(25, 28, 'Somia ', '2 passager', 'Classe Economique'),
(27, 28, 'Nadia', '2 passager', 'Classe Economique'),
(28, 26, 'abdelhadi', '2 passager', 'Classe Economique'),
(32, 26, 'AYMEN', '2 passager', 'Classe Economique'),
(33, 26, 'nadia', '2 passager', 'Classe Economique');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `role` varchar(20) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `First_name` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `role`, `Last_name`, `First_name`, `password`, `email`) VALUES
(1, 'user', 'nadia', 'elhadri', 'dfer', 'nadiaelhadri99@gmail.com'),
(2, 'admin', 'ELhadri', 'nadia', '1234', 'nadia@gestionvol.com'),
(3, 'user', 'nadia', 'elhadri', '1345', 'nadiaelhadr215@gmail.com'),
(4, 'user', 'babouj', 'Omar', '2345', 'omarycode@gmail.com'),
(5, 'user', 'MOULTAMIS', 'Imane', '3456', 'imaneycod@gmail.com'),
(6, 'user', '', '', '', ''),
(7, 'user', 'rosafi', 'Fahd', '4567', 'fahd@gmail.com'),
(8, 'user', 'nadia', 'elhadri', '12345', 'nadiaelhadri99@gmail.com'),
(9, 'user', 'MOULTAMIS', 'Imane', '567890', 'imaneyu@gmail.com'),
(10, 'user', 'elhadri', 'saida', '12345', 'nadiaelhadri99@gmail.com'),
(11, 'user', 'elhadri', 'nadia', '&é\"\'', 'nadia@yc'),
(12, 'user', 'elhadri', 'nadia', '1234', 'admin@yc'),
(13, 'user', 'nadia', 'elhadri', '123', 'nadia@yc');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `id` int(25) NOT NULL,
  `Date_depart` date NOT NULL,
  `Date_arrive` date NOT NULL,
  `ville_depart` varchar(25) NOT NULL,
  `ville_arrive` varchar(40) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `Etat_vol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`id`, `Date_depart`, `Date_arrive`, `ville_depart`, `ville_arrive`, `prix`, `Etat_vol`) VALUES
(26, '2022-03-26', '2022-04-02', 'Casa', 'liyon', '200$', '1'),
(27, '2022-03-31', '2022-04-08', 'Casa', 'Los angeles', '300$', '0'),
(28, '2022-04-03', '2022-04-10', 'marrackech', 'Copenhague', '250$', '1'),
(31, '2022-04-29', '2022-05-08', 'marrackech', 'madrid', '100$', '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `passager`
--
ALTER TABLE `passager`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vol_fk` (`id_vols`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `passager`
--
ALTER TABLE `passager`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `vol`
--
ALTER TABLE `vol`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `vol_fk` FOREIGN KEY (`id_vols`) REFERENCES `vol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
