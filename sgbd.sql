-- Base de données pour l'application ArbreGénéalogique
-- Importez ce fichier dans phpMyAdmin après avoir créé la base vide
-- via le panneau de votre hébergeur

-- Table administrateurs (connexion)
CREATE TABLE IF NOT EXISTS `admin` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `age` INT NOT NULL,
    `genre` VARCHAR(50) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `mot_de_passe` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table individus (membres de la famille)
CREATE TABLE IF NOT EXISTS `individu` (
    `id_individu` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `date_de_naissance` DATE DEFAULT NULL,
    `age` INT DEFAULT NULL,
    `genre` VARCHAR(50) DEFAULT NULL,
    `partenaire` VARCHAR(255) DEFAULT NULL,
    `id_partenaire` INT DEFAULT NULL,
    `date_mariage` DATE DEFAULT NULL,
    `pere` VARCHAR(255) DEFAULT NULL,
    `id_pere` INT DEFAULT NULL,
    `mere` VARCHAR(255) DEFAULT NULL,
    `id_mere` INT DEFAULT NULL,
    `dece` DATE DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
