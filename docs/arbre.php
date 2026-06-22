<?php
require_once __DIR__ . '/../config/database.php';
$objetPdo = getPDO();

$stmt = $objetPdo->query("SELECT * FROM individu ORDER BY nom ASC");
$allMembers = $stmt->fetchAll(PDO::FETCH_ASSOC);

$membersById = [];
foreach ($allMembers as $m) {
    $membersById[$m['id_individu']] = $m;
}

$childrenByParent = [];
foreach ($allMembers as $m) {
    if (!empty($m['id_pere'])) {
        $childrenByParent[$m['id_pere']][] = $m;
    }
    if (!empty($m['id_mere'])) {
        $childrenByParent[$m['id_mere']][] = $m;
    }
}

$roots = [];
foreach ($allMembers as $m) {
    if (empty($m['id_pere']) && empty($m['id_mere'])) {
        $roots[] = $m;
    }
}

function renderTree($person, $childrenByParent) {
    ?>
    <li>
        <div class="tree-node">
            <div class="tree-person">
                <div class="name"><?= htmlspecialchars($person['nom']) ?></div>
                <?php if (!empty($person['date_de_naissance'])): ?>
                    <div class="detail">Ne(e): <?= htmlspecialchars($person['date_de_naissance']) ?></div>
                <?php endif; ?>
                <?php if (!empty($person['dece'])): ?>
                    <div class="detail death">Decede(e): <?= htmlspecialchars($person['dece']) ?></div>
                <?php endif; ?>
                <?php if (!empty($person['partenaire'])): ?>
                    <div class="partner">&#9829; <?= htmlspecialchars($person['partenaire']) ?></div>
                <?php endif; ?>
            </div>
            <?php if (isset($childrenByParent[$person['id_individu']])): ?>
                <ul class="tree-children">
                    <?php foreach ($childrenByParent[$person['id_individu']] as $child): ?>
                        <?php renderTree($child, $childrenByParent); ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </li>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />
    <?php include("../css/utilities.php"); ?>
    <?php include("../css/style.php"); ?>
    <title>Arbre genealogique - ArbreG.</title>
</head>
<body>

    <div class="navbar">
        <div class="container">
            <h1 class="logo">ArbreG.</h1>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Accueil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="docs.php">Membres</a></li>
                    <li><a href="arbre.php" class="active">Arbre</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="page-header">
        <div class="container">
            <h1>Arbre genealogique</h1>
            <p>Visualisation des liens familiaux</p>
        </div>
    </div>

    <section class="section-sm">
        <div class="container">
            <div class="card2" style="padding:32px;">
                <?php if (empty($allMembers)): ?>
                    <div style="text-align:center; padding:60px 20px; color:var(--gray-500);">
                        <i class="fas fa-tree" style="font-size:48px; margin-bottom:16px; display:block; color:var(--gray-300);"></i>
                        <p style="font-size:18px; font-weight:600; color:var(--gray-700);">Aucun membre enregistre</p>
                        <p style="margin-top:8px;">Ajoutez des membres pour voir l'arbre genealogique.</p>
                        <a href="../person/registre.php" class="btn btn-primary" style="margin-top:20px; display:inline-flex;">+ Ajouter un membre</a>
                    </div>
                <?php elseif (empty($roots)): ?>
                    <div style="text-align:center; padding:60px 20px; color:var(--gray-500);">
                        <i class="fas fa-exclamation-triangle" style="font-size:48px; margin-bottom:16px; display:block; color:var(--warning);"></i>
                        <p style="font-size:18px; font-weight:600; color:var(--gray-700);">Aucune racine trouvee</p>
                        <p style="margin-top:8px;">Tous les membres ont des parents references.</p>
                    </div>
                <?php else: ?>
                    <div class="tree-container">
                        <div class="tree">
                            <ul>
                                <?php foreach ($roots as $root): ?>
                                    <?php renderTree($root, $childrenByParent); ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div style="text-align:center; margin-top:32px; color:var(--gray-500); font-size:13px;">
                        <i class="fas fa-info-circle"></i> Survolez les cartes pour plus de details
                    </div>
                <?php endif; ?>
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