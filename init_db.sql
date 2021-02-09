


-- Ce fichier sert à initialiser la base de données













CREATE DATABASE db_mvc;
USE db_mvc;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `db_mvc`
--
-- --------------------------------------------------------
--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` text NOT NULL,
  `tel` text NOT NULL,
  `fax` text NOT NULL,
  `lieu_ins` text NOT NULL,
  `code_ins` text NOT NULL,
  `date_inscription` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

-- INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
-- (1, 'Bienvenue sur mon blog !', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de... PHP bien sûr !', '2017-09-18 16:28:41'),
-- (2, 'Le PHP à la conquête du monde !', 'C\'est officiel, l\'éléPHPant a annoncé à la radio hier soir \"J\'ai l\'intention de conquérir le monde !\".\r\nIl a en outre précisé que le monde serait à sa botte en moins de temps qu\'il n\'en fallait pour dire \"éléPHPant\". Pas dur, ceci dit entre nous...', '2017-09-20 16:28:41');


ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;



--
-- Structure de la table `sujets`
--

CREATE TABLE `sujets` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date_presentation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




--
-- Index pour la table `sujets`
--
ALTER TABLE `sujets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sujets`
--
ALTER TABLE `sujets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


CREATE USER 'dbuser'@'localhost';
GRANT ALL PRIVILEGES ON *.* TO 'dbuser'@'localhost';
FLUSH PRIVILEGES;


