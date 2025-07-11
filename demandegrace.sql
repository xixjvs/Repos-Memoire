-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 mai 2025 à 15:54
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `demandegrace`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandemesse`
--

CREATE TABLE `demandemesse` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `offrande_total` float NOT NULL,
  `demandeur_id` int(11) NOT NULL,
  `messe_id` int(11) NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `demandemesse`
--

INSERT INTO `demandemesse` (`id`, `reference`, `date`, `heure`, `description`, `offrande_total`, `demandeur_id`, `messe_id`, `statut`) VALUES
(7, '#ref1732704309', '2024-12-06', '18:30', 'action de grace', 8000, 17, 17, 0),
(8, '#ref1732710641', '2024-12-05', '06:45', 'demande', 4000, 17, 17, 0),
(9, '#ref1732713382', '2024-12-04', '06:45', 'dddddddddd', 4000, 17, 17, 0),
(10, '#ref1732718300', '2024-12-15', '09:30', 'lkkkkkkd', 4000, 16, 17, 0),
(13, '#ref1732724368', '2024-12-08', '11:00', 'llllllllllllllllllll', 6000, 40, 19, 0),
(14, '#ref1732794619', '2024-12-01', '07:30', 'jjjjjjjjjjjjjjjjjss', 4000, 41, 17, 0),
(15, '#ref1732794880', '2024-12-08', '11:00', 'jhhhhhhhhhhhhhhhhh', 4000, 42, 17, 0),
(16, '#ref1733157535', '2024-12-08', '07:30', 'Messe d\'action de grace pour mon nouveau travail', 4000, 17, 17, 0),
(17, '#ref1733749308', '0000-00-00', '06:45', 'yyyyyyyyyyyyyyyyyyyyyyyyy', 6000, 17, 19, 0),
(18, '#ref1733749604', '2024-12-29', '09:30', 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 4000, 17, 17, 0),
(19, '#ref1733763170', '2024-12-28', '11:00', 'ttttttttttttttttttttttttttttttttttttttttt', 4000, 17, 17, 0),
(20, '#ref1734124135', '2024-12-13', '11:00', 'kkkkkkkkkkkkkkkkkkkk', 4000, 17, 17, 0),
(21, '#ref1734629556', '2024-12-21', '06:45', 'lllllllllllllllllll', 4000, 17, 17, 0),
(22, '#ref1734629613', '2024-12-25', '07:30', 'kkkkkkkkkkkkkkkkkkkkkk', 4000, 17, 20, 0),
(23, '#ref1734631055', '2024-12-25', '07:30', 'messe ', 6000, 17, 19, 0),
(24, '#ref1734687569', '2024-12-22', '07:30', 'sama messe', 4000, 17, 17, 0),
(25, '#ref1734688010', '2024-12-22', '07:30', 'Messe pour mon nouveau emploie', 4000, 46, 17, 0),
(26, '#ref1735047563', '2024-12-29', '18:30', 'jjjjjjjjjjjjjjjjjjjjj', 4000, 49, 17, 0),
(27, '#ref1735047675', '2024-12-29', '07:30', 'hhhhhhhhhhhh', 6000, 50, 19, 0),
(28, '#ref1736164449', '2025-01-19', '09:30', 'messse', 6000, 51, 19, 0),
(29, '#ref1736416695', '2025-01-19', '07:30', 'mmeeeeee', 4000, 52, 17, 0),
(30, '#ref1736416969', '2025-01-12', '07:30', 'kgfdsss', 4000, 53, 17, 0),
(31, '#ref1738676658', '2025-02-23', '09:30', 'hhhhhhhhhhhhhhhhhhhhhhhhllllll', 4000, 54, 20, 0);

-- --------------------------------------------------------

--
-- Structure de la table `messes`
--

CREATE TABLE `messes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `offrande` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messes`
--

INSERT INTO `messes` (`id`, `nom`, `offrande`) VALUES
(17, 'Messe D\'action de grâce', 4000),
(19, 'Messe Requiem', 6000),
(20, 'Messe simple', 4000),
(22, 'Messe Mariage', 10000);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `adresse`, `tel`, `email`, `password`, `role`) VALUES
(1, 'admin', 'SAMEDY', 'Dakar', '+221772334542', 'admin@gmail.com', '$2y$12$siobiw.snPgt/m.3B0uLOOC.gkFxF7L4VL2Qwy2Wj1yFd9dNSXeU2', 'admin'),
(15, 'Laye', 'Diouf', 'dakar', '77777777', 'laye05@gmail.com', '$2y$12$k.6/n8fbWByUD/oMUdX/WOyHPtrzYqk3sQ2as6Yr/h27l3LpLgXiK', 'client'),
(16, 'jean', 'Diouf', 'dakar', '77777777', 'jean@gmail.com', '$2y$12$1lhlF9elwwCuNGC8M9.hd.L0doC5usuLCeO1x9s00I5Huu8ShhGeS', 'client'),
(17, 'Paul', 'Diouf', 'Parcelles', '770000000', 'paul12@gmail.com', '$2y$12$4Yg34.73T3.TvNVo8kL3g.1HnykLmYL69zBymoKcL8eZNsRY.Ua3e', 'client'),
(18, 'Charles', 'SAMEDY', 'Parcelles', '770000000', 'rene@gmail.com', '$2y$12$K8JvqDq5a2Aq2wouuMaDDOgp/nVU8OKPtJLyXJjHvc4G/Xz8cit1q', 'client'),
(19, 'Charles', 'SAMEDY', 'Parcelles', '770000000', 'rene@gmail.com', '$2y$12$VHO6lnVJMeV2SZD55x52feeSRfRjDxohWlKQQdM3NuZimoGiLvzLG', 'client'),
(20, 'Charles', 'SAMEDY', 'Parcelles', '770000000', 'rene@gmail.com', '$2y$12$HvpL9m2ALfXqL2/sHhzAc.Ck5kjgQB4X9qe2OjWfLomho2VE7jufS', 'client'),
(21, 'Charles', 'SAMEDY', 'Parcelles', '770000000', 'rene@gmail.com', '$2y$12$yH0b4aHgS3nx8Thlpy.GV.BvegTZpOTdpRCjQlrTxMO9Px3wHSoWy', 'client'),
(22, 'Charles', 'SAMEDY', 'Parcelles', '770000000', 'rene@gmail.com', '$2y$12$sDot0P3ddsGiCQCQ8zSwMea2uQAeBD0./thucQvmk5nF16aUeyxpu', 'client'),
(23, 'Charles', 'SAMEDY', 'Parcelles', '770000000', 'rene@gmail.com', '$2y$12$3nxMfqoiod6OIOpnmiLctOAkfHo1rcVAtwX6kGyfeJRuDcdPtejRO', 'client'),
(24, 'Joseph', 'Diouf', 'Parcelles', '770000000', 'jo@gmail.com', '$2y$12$reCIhG82SthVJ/lNibY3F.mYvCsXyl6ZN.t5FNzOj45KVxgeRt97C', 'client'),
(25, 'Joseph', 'Diouf', 'Parcelles', '770000000', 'jo@gmail.com', '$2y$12$LQmpc6N4XEDzX1G4daIbdOtX14m8D8oA/bha7qEwavxDuEOdXN2tS', 'client'),
(26, 'Joseph', 'Diouf', 'Parcelles', '770000000', 'jo@gmail.com', '$2y$12$eV1eJz147/71cVCstPdNXelw/.WHiLeyYqVS.NZkkYmhEfitaCGjW', 'client'),
(27, 'Joseph', 'Diouf', 'Parcelles', '770000000', 'jo@gmail.com', '$2y$12$kNqlHQE/V9pi0Jm5l18h5eo6ci01ikpQd5d79ctJ2XiL8tlR6Ysjy', 'client'),
(28, 'Joseph', 'Diouf', 'Parcelles', '770000000', 'jo@gmail.com', '$2y$12$a9psfM50pvgrLhhkGEGYHe/O/u07jslR29X0O/stW3CsqMh5LjWMG', 'client'),
(29, 'Joseph', 'Diouf', 'Parcelles', '770000000', 'jo@gmail.com', '$2y$12$9p0ZuV5yYQKzkGyTiLjS..mDMoNvT35WwZULoc4Pqm2jMyQh/dRam', 'client'),
(30, 'Joseph', 'Diouf', 'Parcelles', '770000000', 'jo@gmail.com', '$2y$12$jGVnQO7dsAzp89/B6jvLxuzeSf1xb03B/SDG/izIhwZKQUOapYNUW', 'client'),
(31, 'bassirou', 'niang', 'Parcelles', '770000000', 'niang@gmail.com', '$2y$12$A4XqJsSrlQlRL016Zjbmg.VGrpBuSmqK2d4ryats4HTKoyi4btEoi', 'client'),
(32, 'bassirou', 'niang', 'Parcelles', '770000000', 'niang@gmail.com', '$2y$12$JVJbXp.mVaARypoGLVIkQOwa/mRdzeTzdQdKuXDO4Nh0ZP749QD2.', 'client'),
(33, 'bassirou', 'niang', 'Parcelles', '770000000', 'niang@gmail.com', '$2y$12$4SL17oLZEMf6rSC1oVhFhegrlCpNsEgKw2WABLeaTC/YXamymyA4K', 'client'),
(34, 'alioune', 'diop', 'Parcelles', '770000000', 'diop@gmail.com', '$2y$12$J5c9elmVyrKjS3tcL9MFm.XA6z2JJs.dKQGzU1ku2nBHt/2U7vRjK', 'client'),
(35, 'Charles', 'SAMEDY', 'Parcelles', '770000000', 'go@gmail.com', '$2y$12$0kQg8nM9g3HXAcjmW7UlDODQwKK7x0cxMnfK.9i7c2YDLIUqwxwRm', 'client'),
(36, 'coumba', 'ndiaye', 'Parcelles', '770000000', 'coumbar@gmail.com', '$2y$12$GLeHovzjY0BRmRW.Wx/YXewnWNtwfrsfcI6wLF3O/VX04Sujid99O', 'client'),
(37, 'michel', 'diop', 'Parcelles', '+221772334545', 'd@gmail.com', '$2y$12$R4frIskyIUBbscQnv3HcWenUi22j/5FBRl96aoTpLB.2nFtH.XTUO', 'client'),
(38, 'Henri', 'sambou', 'Pikine', '776434343', 'henri@gmail.com', '$2y$12$c1JUX3tRnm0tcu4muDVhReaZG8fSFUTGh/ZrcV03AhR02rjWFV96y', 'client'),
(39, 'marc', 'ndiaye', 'Pikine', '778121212', 'marc@gmail.com', '$2y$12$Nu8XMCjw5LVV16RaUMEI4OI2cpOTOZsOdKOvOGT24RkLRjrJ23ryu', 'client'),
(40, 'benj', 'diop', 'Parcelles', '774566768', 'b@gmail.com', '$2y$12$M06L2MSoNFBp9U4BXPrWpO4VteVFjaF55jANS.eFvFYujGPTcqvU.', 'client'),
(41, 'Michel ', 'Diouf', 'dakar', '7733333333', 'M@gmail.com', '$2y$12$ho6Lc8sGY46ZxW7mgTpLCuCxCET8JlILUgU/GWwXf1Dl9NStBzire', 'client'),
(42, 'Charles', 'Samedy', 'dakar', '7733333333', 'C@gmail.com', '$2y$12$r8ccDTL0LWbXLEnVnDI.ZuxIZJczRMe2NaUGNXq1LP4huyUO9oZdW', 'client'),
(43, 'Moise', 'Diene', 'Parcelles', '770000000', 'Mo@gmail.com', '$2y$12$z6ISh832iQvziFD6xiel1e97U/8AeqPOCZ7lUwLS0/qjYr/omYog6', 'client'),
(44, 'Jean', 'Preira', 'Pikine', '778909090', 'Jp@gmail.com', '$2y$12$ujQYsRpY5lz9kGyzJF7oXOk16g5GkJyBA/TNZxqa1kUf6920nRSPu', 'client'),
(45, 'Joseph', 'ndiaye', 'Parcelles', '+221772334545', 'jo@gmail.com', '$2y$12$fkuhkO2SslqFLTs5suxphOGdPVuYoG5SAAV.1zZcIp3Mxe9pl6w9m', 'client'),
(46, 'Mike', 'Carvalho', 'Medina', '778011223', 'Carvalho@gmail.com', '$2y$12$6EWWlN5LA2OSzXti30qVx.KLs8D.uWB/qHHVwcKac9W8wn7zt69FK', 'client'),
(47, 'Marthe', 'Mendes', 'Dakar', '709801012', 'mendes@gmail.com', '$2y$12$ZR0GhpKZqxJsQhpKdDLMW.rt3zOQIIIwMZ9C7Pzja4pfj5HlSg5xK', 'client'),
(48, 'Jerome', 'diene', 'Medina', '765432121', 'diene@gmail.com', '$2y$12$QoFLSuULAuJ0klardAzdrOQfHR9hBLdDz8.E308jlEphXA4qgzC9W', 'client'),
(49, 'Joseph', 'Diouf', 'Parcelles', '770000000', 'jo@gmail.com', '$2y$12$nGjQzPSVoPMUp.PSIeT0zOh2DySLELKBpYr1mwnS2.PpfVhXLyhFK', 'client'),
(50, 'Moise', 'Diene', 'Dakar', '770000000', 'Mo@gmail.com', '$2y$12$8Y5dMospDNecQx0Ex5WASeuR9VbjD4ElW28zj8ErpuJmC.Qctzk8a', 'client'),
(51, 'Daniel', 'Badji', 'Rufisque', '778643221', 'dani12@gmail.com', '$2y$12$DANgyLzViuortIr8f0g./e4/YtJoMbo0Nt4wuEY4KtTW1TLvEermm', 'client'),
(52, 'Vivien', 'Ndiack', 'dakar', '773333333', 'vi@gmail.com', '$2y$12$MMZ4o3gyMSh81NLvgQcbou9RVj5fwQTeQd1cMyGfpklmMaleuUzZi', 'client'),
(53, 'Charles', 'Diouf', 'Dakar', '770000000', 'rene@gmail.com', '$2y$12$TjefNJfu5vjrzilGb.MCQOXEW/R7PJferKV76mPKezBProGC8IDN.', 'client'),
(54, 'jean', 'coly', 'Dakar', '777889090', 'jt@gmail.com', '$2y$12$gMY7y0FG2YbhPgBuOLGka.uDgxnNMCW0ON9Nqk.5TbMIPQ0r74e5m', 'client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demandemesse`
--
ALTER TABLE `demandemesse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demandeur_id` (`demandeur_id`),
  ADD KEY `messe_id` (`messe_id`);

--
-- Index pour la table `messes`
--
ALTER TABLE `messes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demandemesse`
--
ALTER TABLE `demandemesse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `messes`
--
ALTER TABLE `messes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demandemesse`
--
ALTER TABLE `demandemesse`
  ADD CONSTRAINT `demandemesse_ibfk_1` FOREIGN KEY (`demandeur_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `demandemesse_ibfk_2` FOREIGN KEY (`messe_id`) REFERENCES `messes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
