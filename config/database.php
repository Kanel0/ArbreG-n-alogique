<?php
/*
 * Configuration de la base de données
 * Modifiez ces paramètres selon votre hébergement
 */

define('DB_HOST', 'sql103.infinityfree.com');
define('DB_NAME', 'if0_42244168_arbreg');
define('DB_USER', 'if0_42244168');
define('DB_PASS', 'arbre2026');

function getPDO() {
    try {
        $pdo = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8',
            DB_USER,
            DB_PASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        );
        return $pdo;
    } catch (PDOException $e) {
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }
}
