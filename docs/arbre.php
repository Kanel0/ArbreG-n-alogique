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
    $hasPartner = !empty($person['partenaire']);
    ?>
    <li>
        <div class="tree-node">
            <div class="person-card">
                <div class="person-name"><?= htmlspecialchars($person['nom']) ?></div>
                <?php if (!empty($person['date_de_naissance'])): ?>
                    <div class="person-detail">Né(e): <?= htmlspecialchars($person['date_de_naissance']) ?></div>
                <?php endif; ?>
                <?php if (!empty($person['dece'])): ?>
                    <div class="person-detail dece">Décédé(e): <?= htmlspecialchars($person['dece']) ?></div>
                <?php endif; ?>
                <?php if ($hasPartner): ?>
                    <div class="person-partner">&#9829; <?= htmlspecialchars($person['partenaire']) ?></div>
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
    <title>Arbre généalogique</title>
    <style>
        .tree-container {
            padding: 40px 20px;
            overflow-x: auto;
        }
        .tree {
            display: flex;
            justify-content: center;
        }
        .tree ul {
            padding-top: 30px;
            position: relative;
            display: flex;
            justify-content: center;
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        .tree ul.tree-children {
            display: flex;
            justify-content: center;
        }
        .tree li {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            padding: 30px 10px 0 10px;
            list-style: none;
        }
        .tree li::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 2px solid #6c63ff;
            width: 0;
            height: 30px;
        }
        .tree li::after {
            content: '';
            position: absolute;
            top: 30px;
            left: 0;
            right: 0;
            border-top: 2px solid #6c63ff;
        }
        .tree li:first-child::after {
            left: 50%;
        }
        .tree li:last-child::after {
            right: 50%;
        }
        .tree li:only-child::after {
            display: none;
        }
        .tree li:only-child::before {
            display: none;
        }
        .tree > li::before,
        .tree > li::after {
            display: none;
        }
        .tree-node {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .person-card {
            background: white;
            border: 2px solid #6c63ff;
            border-radius: 12px;
            padding: 15px 25px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(108, 99, 255, 0.15);
            position: relative;
            z-index: 2;
            min-width: 160px;
            transition: transform 0.2s;
        }
        .person-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(108, 99, 255, 0.25);
        }
        .person-name {
            font-size: 16px;
            font-weight: 700;
            color: #333;
        }
        .person-detail {
            font-size: 12px;
            color: #777;
            margin-top: 4px;
        }
        .person-detail.dece {
            color: #e74c3c;
        }
        .person-partner {
            font-size: 13px;
            color: #6c63ff;
            margin-top: 6px;
            font-weight: 600;
        }
        .tree-empty {
            text-align: center;
            padding: 80px 20px;
            color: #888;
        }
        .tree-empty i {
            font-size: 48px;
            color: #ddd;
            margin-bottom: 15px;
        }
        .card2 {
            margin: 0 0 30px 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="container flex">
            <h1 class="logo">ArbreG.</h1>
            <nav>
                <ul>
                    <li><a href="../home/index.php">Acceuil</a></li>
                    <li><a href="../person/registre.php">Registre</a></li>
                    <li><a href="../docs/docs.php">Membre</a></li>
                    <li><a href="../login/index.php">Se deconnecter</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="card2">
        <h1 style="text-align:center;margin:30px 0 10px;color:#333;">Arbre Généalogique</h1>
        <p style="text-align:center;color:#888;margin-bottom:30px;">
            <i class="fas fa-sitemap"></i> Visualisation des liens familiaux
        </p>

        <?php if (empty($allMembers)): ?>
            <div class="tree-empty">
                <i class="fas fa-tree"></i>
                <p>Aucun membre enregistr\u00e9. <a href="../person/registre.php">Ajoutez des membres</a> pour commencer l'arbre.</p>
            </div>
        <?php elseif (empty($roots)): ?>
            <div class="tree-empty">
                <i class="fas fa-exclamation-triangle"></i>
                <p>Aucune racine trouv\u00e9e. Tous les membres ont des parents r\u00e9f\u00e9renc\u00e9s.</p>
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
        <?php endif; ?>
    </div>

    <div class="cards1"></div>
    <footer class="footer bg-dark py-5">
        <div class="footdocs">
            <div class="container grid grid-3">
                <div>
                    <h1>ArbreG.</h1>
                    <p>Copyright &copy; 2022</p>
                </div>
                <nav>
                    <ul>
                        <li><a href="../home/index.php">Acceuil</a></li>
                        <li><a href="../person/registre.php">Registre</a></li>
                        <li><a href="../docs/docs.php">Membre</a></li>
                    </ul>
                </nav>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>