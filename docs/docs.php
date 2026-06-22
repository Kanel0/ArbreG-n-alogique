<?php
require_once __DIR__ . '/../config/database.php';
$objetPdo = getPDO();

$pdoStat = $objetPdo->prepare("SELECT * FROM individu ORDER BY nom ASC;");
$executeIsOK = $pdoStat->execute();
$participants = $pdoStat->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />
    <?php include("../css/utilities.php"); ?>
    <?php include("../css/style.php"); ?>
    <title>Membres - ArbreG.</title>
</head>
<body>

    <div class="navbar">
        <div class="container">
            <h1 class="logo">ArbreG.</h1>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Accueil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="docs.php" class="active">Membres</a></li>
                    <li><a href="arbre.php">Arbre</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="page-header animate-up">
        <div class="container">
            <h1>Membres de la famille</h1>
            <p><?= count($participants) ?> membre(s) enregistre(s)</p>
        </div>
    </div>

    <section class="section-sm">
        <div class="container">
            <div class="card2 animate-up" style="padding:32px;">
                <div class="search-bar">
                    <form action="recherche.php" method="post" style="display:flex; gap:12px; flex:1; flex-wrap:wrap;">
                        <input type="search" name="recherche" placeholder="Rechercher un membre...">
                        <input type="submit" value="Rechercher" name="cherch">
                    </form>
                    <a href="../person/registre.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Ajouter</a>
                </div>

                <?php if (empty($participants)): ?>
                    <div style="text-align:center; padding:60px 20px; color:var(--gray-500);">
                        <i class="fas fa-users" style="font-size:48px; margin-bottom:16px; display:block;"></i>
                        <p style="font-size:18px; font-weight:600; color:var(--gray-700);">Aucun membre pour l'instant</p>
                        <p style="margin-top:8px;">Ajoutez votre premier membre pour commencer l'arbre.</p>
                        <a href="../person/registre.php" class="btn btn-primary" style="margin-top:20px; display:inline-flex;">+ Ajouter un membre</a>
                    </div>
                <?php else: ?>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom complet</th>
                                    <th>Genre</th>
                                    <th>Date naissance</th>
                                    <th>Age</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($participants as $participant): ?>
                                <tr>
                                    <td style="font-weight:600; color:var(--primary);">#<?= $participant["id_individu"] ?></td>
                                    <td><strong><?= $participant["nom"] ?></strong></td>
                                    <td><?= $participant["genre"] ?></td>
                                    <td><?= $participant["date_de_naissance"] ?></td>
                                    <td><?= $participant["age"] ?> ans</td>
                                    <td>
                                        <div class="action-btn-group">
                                            <a href="modifier.php?numParticipant=<?= $participant['id_individu']?>" onclick="return confirm('Modifier ce membre ?')">
                                                <button class="action-btn edit"><i class="fas fa-edit"></i> Modifier</button>
                                            </a>
                                            <a href="Suppression.php?numParticipant=<?= $participant['id_individu']?>" onclick="return confirm('Supprimer ce membre ?')">
                                                <button class="action-btn delete"><i class="fas fa-trash"></i> Supprimer</button>
                                            </a>
                                            <a href="details.php?numParticipant=<?= $participant['id_individu']?>">
                                                <button class="action-btn view"><i class="fas fa-eye"></i> Details</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>

            <div class="quick-actions" style="margin-top:24px;">
                <a href="enfant.php" class="quick-action" style="background:var(--gradient-3);">+ Enfant</a>
                <a href="adulte.php" class="quick-action" style="background:var(--gradient-5); color:var(--dark);">+ Adulte</a>
                <a href="parent.php" class="quick-action" style="background:var(--gradient-4);">+ Parent</a>
                <a href="mariage.php" class="quick-action" style="background:var(--gradient-1);">+ Mariage</a>
                <a href="dece.php" class="quick-action" style="background:var(--gradient-2);">+ Deces</a>
                <a href="arbre.php" class="quick-action" style="background:var(--gradient-3);">Voir l'arbre</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="grid grid-3" style="align-items:start;">
                <div>
                    <h3>ArbreG.</h3>
                    <p>Application de gestion d'arbre genealogique.</p>
                </div>
                <nav>
                    <p style="font-weight:600; margin-bottom:12px; color:#fff;">Navigation</p>
                    <ul>
                        <li><a href="../home/index.php">Accueil</a></li>
                        <li><a href="../person/registre.php">Registre</a></li>
                        <li><a href="docs.php">Membres</a></li>
                        <li><a href="arbre.php">Arbre</a></li>
                    </ul>
                </nav>
                <div class="social">
                    <p style="font-weight:600; margin-bottom:12px; color:#fff;">Suivez-nous</p>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div style="border-top:1px solid rgba(255,255,255,0.1); margin-top:32px; padding-top:24px; text-align:center;">
                <p>&copy; 2024 ArbreG.</p>
            </div>
        </div>
    </footer>

</body>
</html>