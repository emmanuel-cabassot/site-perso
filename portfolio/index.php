<?php
require('Models/ProjetModel.php');
?>
<!DOCTYPE html>
<html lang="fr">
<script src="https://kit.fontawesome.com/28f5e08bf6.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">

<head>
    <meta charset="utf-8" />
    <title>Portfolio Emmanuel Cabassot</title>
</head>

<header>
    <div class="presentation" id="home" data-spy>
        <section class="titre">
            <h1>EMMANUEL CABASSOT</h1>
            <h2></h2>
            <section class="fleche">
                <a href="#ancre"><i class="fas fa-angle-double-down fa-lg"></i></a>
            </section>
        </section>

    </div>
</header>
<main id="ancre">
                        <!-- NAVBAR -->
    <nav class="navbar" id="ma-navbar">
        <section class="nav-button">
            <i class="fas fa-bars fa-2x fa-lg"></i>
        </section>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#home">ACCUEIL</a>
            </li>
            <li class="nav-item ">
                <a href="#propos">A PROPOS</a>
            </li>
            <li class="nav-item">
                <a href="#parcours">PARCOURS</a>
            </li>
            <li class="nav-item">
                <a href="#projets">PROJETS</a>
            </li>
        </ul>
    </nav>
                        <!-- A PROPOS -->
    <section class="propos" id="propos" data-spy>
        <h1 class="titre-bleu">A PROPOS</h1>
        <section class="container-barre-bleue">
            <div class="barre-bleue"></div>
        </section>
        <section class="container_propos">
            <section id="about" data-spy>
                <p>Je m'appelle Emmanuel CABASSOT, J'ai commencé ma reconversion de développeur à laplateforme en septembre 2020 et j'adore ça!
                    Quand le 'travail' devient un plaisir, que demander de plus. <br><br>
                    J'ai déjà fait plusieurs métiers tels que commercial, militaire, dépanneur. Ce qui m'a poussé à changer de métier à été la lassitude dûe à un manque de nouveautés.<br><br>
                    J'apprends vite, j'ai un fort esprit logique?j'ai une grande capacité de travail, un bon esprit d'équipe et j'aime les gens.
                </p>
                <p class="contact">
                    <a class="linkedin" href="https://fr.linkedin.com/">
                        <i class="fab fa-linkedin"></i>
                        linkedin
                    </a>
                    <a class="download" href="download/cv.pdf" download="cv-cabassot-emmanuel" title="téléchargez mon cv.">
                        Mon CV
                    </a>
                    <a href="mailto:emmanuel.cabassot@laplateforme.io" title="Contactez-moi par email.">
                        <i class="fas fa-envelope fa-3x"></i>
                    </a>
                </p>
            </section>
            <section class="competences">
                <section class="competences-container">
                    <div class="div boxe">
                        <p>HTML</p>
                        <div class="progress">
                            <div class="progress-bar">
                                <span>80%</span>
                            </div>
                        </div>
                        <p>CSS</p>
                        <div class="progress">
                            <div class="progress-bar">
                                <span>85%</span>
                            </div>
                        </div>
                        <p>PHP</p>
                        <div class="progress">
                            <div class="progress-bar">
                                <span>75%</span>
                            </div>
                        </div>
                        <p>JavaScript</p>
                        <div class="progress">
                            <div class="progress-bar">
                                <span>60%</span>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </section>

                        <!-- PARCOURS -->
    <section class="parcours" id="parcours" data-spy>
        <h1 class="titre-blanc">PARCOURS</h1>
        <section class="container-barre-blanche">
            <div class="barre-blanche"></div>
        </section>
        <section class="box-timeline">
            <div class="ligne"></div>
            <div class="rond r1"><img src="img/dev.png" alt=""></div>
            <div class="rond r2"><img src="img/depanneur.png" alt=""></div>
            <div class="rond r3"><img src="img/armee.png" alt=""></div>
            <div class="rond r4"><img src="img/mains.png" alt=""></div>
            <div class="box b1 anim-off" data-anim="1">
                <h2>Etude développeur full-stack</h2>
                <p class="date">depuis septembre 2020</p>
                <p>Je suis actuellement en reconversion à <a href="http://laplateforme.io">laplateforme</a> pour faire développeur full-stack<br><br>
                    Dans notre cursus nous avons Html, Css, Php et Javascript.</p>
            </div>
            <div class="box b2 anim-off" data-anim="2">
                <h2>Dépanneur chauffagiste frigoriste</h2>
                <p class="date">2009-2020</p>
                <p>Dans un premiers temps j'ai travaillé dans de grandes installations de froid commercial et industriel pour le dépannage.<br><br>
                    A partir de fin 2009 j'ai été recruté par Engie pour la maintenance et le dépannage de chaudières gaz.
                </p>
            </div>
            <div class="box b3 anim-off" data-anim="3">
                <h2>Militaire (armée de terre)</h2>
                <p class="date">2003-2008</p>
                <p>Militaire dans l’armée de terre: gestion et mise en place des stocks en missions extérieurs.</p>
            </div>
            <div class="box b4 anim-off" data-anim="4">
                <h2>Commercial</h2>
                <p class="date">2001-2002</p>
                <p> Dans le cadre d'un BTS en alternace chez ALTRAD.<br><br>
                    Vente d’échafaudages auprès des
                    professionnels : création d’un portefeuille clients, suivi, création de devis et négociation.</p>
            </div>
        </section>
    </section>


                        <!-- PROJETS -->
    <section class="projets" id="projets" data-spy="">
        <h1 class="titre-bleu">PROJETS</h1>
        <section class="container-barre-blanche">
            <div class="barre-blanche"></div>
        </section>
        <div class="barre-bleue"></div>
        <section class="selection">
            <ul>
                <li class="selection-hover">
                    <a class="all" data-selection>
                        All
                    </a>
                </li>
                <li>
                    <a class="css" data-selection>
                        Html/Css
                    </a>
                </li>
                <li>
                    <a class="php" data-selection>
                        PHP
                    </a>
                </li>
                <li>
                    <a class="java" data-selection>
                        JavaScript
                    </a>
                </li>
            </ul>
        </section>
        <?php
        $projet = new ProjetModel;
        $projet_all = $projet->all();
        $projet_css = $projet->css();
        $projet_php = $projet->php();
        $projet_java = $projet->java();

        ?>
        <section id="all" class="projets-show">
            <?php
            foreach ($projet_all as $value) {
                $categories = $projet->categorie($value->id);
                $categorie = [];
                foreach ($categories as $valeur) {
                    $categorie[] =  $valeur->nom;
                }
                $str = implode('/ ', $categorie);
            ?>
                        <!-- Modale -->
                <div class="modal" id="modal<?= $value->id ?>" role="dialog">
                    <div class="modal-content">
                        <div class="modal-close" data-dismiss="dialog">X</div>
                        <div class="modal-header">
                            <img src="img/projets/<?= $value->image ?>" alt="image du projet">
                        </div>
                        <div class="modal-body">
                            <h1><?= $value->nom ?></h1>
                            <div><?= $value->techno ?></div>
                            <p><?= $value->description ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= $value->lien_site ?>" target="blank" class="btn site" role="button">
                                <i class="far fa-eye"></i>
                                Voir le site web
                            </a>
                            <a href="<?= $value->lien_git ?>" target="blank" class="btn git-hub" role="button">
                                <i class="fab fa-github"></i>
                                Projet sur github
                            </a>
                        </div>
                    </div>
                </div>
                <section class="projet-container projet-hidden" data-project>
                    <img src="img/projets/<?= $value->image ?>" alt="image du projet">
                    <h3><?= $value->nom ?></h3>
                    <p><?= $str ?></p>
                    <a href="#" role="button" data-target="#modal<?= $value->id ?>" data-toggle="modal">LEARN MORE</a>
                </section>

            <?php
            }
            ?>
        </section>
        <section id="css" class="projets-hidden">
            <?php
            foreach ($projet_css as $value) {
                $categories = $projet->categorie($value->id);
                $categorie = [];
                foreach ($categories as $valeur) {
                    $categorie[] =  $valeur->nom;
                }
                $str = implode('/ ', $categorie);
            ?>
                        <!-- Modale -->
                <div class="modal" id="modalcss<?= $value->id ?>" role="dialog">
                    <div class="modal-content">
                        <div class="modal-close" data-dismiss="dialog">X</div>
                        <div class="modal-header">
                            <img src="img/projets/<?= $value->image ?>" alt="image du projet">
                        </div>
                        <div class="modal-body">
                            <h1><?= $value->nom ?></h1>
                            <div><?= $value->techno ?></div>
                            <p><?= $value->description ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= $value->lien_site ?>" target="blank" class="btn site" role="button">
                                <i class="far fa-eye"></i>
                                Voir le site web
                            </a>
                            <a href="<?= $value->lien_git ?>" target="blank" class="btn git-hub" role="button">
                                <i class="fab fa-github"></i>
                                Projet sur github
                            </a>
                        </div>
                    </div>
                </div>
                <section class="projet-container projet-hidden" data-project>
                    <img src="img/projets/<?= $value->image ?>" alt="image du projet">
                    <h3><?= $value->nom ?></h3>
                    <p><?= $str ?></p>
                    <a href="#" role="button" data-target="#modalcss<?= $value->id ?>" data-toggle="modal">LEARN MORE</a>
                </section>

            <?php
            }
            ?>
        </section>      
        <section id="php" class="projets-hidden">
            <?php
            foreach ($projet_php as $value) {
                $categories = $projet->categorie($value->id);
                $categorie = [];
                foreach ($categories as $valeur) {
                    $categorie[] =  $valeur->nom;
                }
                $str = implode('/ ', $categorie);
            ?>
                        <!-- Modale -->
                <div class="modal" id="modalphp<?= $value->id ?>" role="dialog">
                    <div class="modal-content">
                        <div class="modal-close" data-dismiss="dialog">X</div>
                        <div class="modal-header">
                            <img src="img/projets/<?= $value->image ?>" alt="image du projet">
                        </div>
                        <div class="modal-body">
                            <h1><?= $value->nom ?></h1>
                            <div><?= $value->techno ?></div>
                            <p><?= $value->description ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= $value->lien_site ?>" target="blank" class="btn site" role="button">
                                <i class="far fa-eye"></i>
                                Voir le site web
                            </a>
                            <a href="<?= $value->lien_git ?>" target="blank" class="btn git-hub" role="button">
                                <i class="fab fa-github"></i>
                                Projet sur github
                            </a>
                        </div>
                    </div>
                </div>
                <section class="projet-container projet-hidden" data-project>
                    <img src="img/projets/<?= $value->image ?>" alt="image du projet">
                    <h3><?= $value->nom ?></h3>
                    <p><?= $str ?></p>
                    <a href="#" role="button" data-target="#modalphp<?= $value->id ?>" data-toggle="modal">LEARN MORE</a>
                </section>
            <?php
            }
            ?>
        </section>
        <section id="java" class="projets-hidden">
            <?php
            foreach ($projet_java as $value) {
                $categories = $projet->categorie($value->id);
                $categorie = [];
                foreach ($categories as $valeur) {
                    $categorie[] =  $valeur->nom;
                }
                $str = implode('/ ', $categorie);
            ?>
                        <!-- Modale -->
                <div class="modal" id="modaljava<?= $value->id ?>" role="dialog">
                    <div class="modal-content">
                        <div class="modal-close" data-dismiss="dialog">X</div>
                        <div class="modal-header">
                            <img src="img/projets/<?= $value->image ?>" alt="image du projet">
                        </div>
                        <div class="modal-body">
                            <h1><?= $value->nom ?></h1>
                            <div><?= $value->techno ?></div>
                            <p><?= $value->description ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= $value->lien_site ?>" target="blank" class="btn site" role="button">
                                <i class="far fa-eye"></i>
                                Voir le site web
                            </a>
                            <a href="<?= $value->lien_git ?>" target="blank" class="btn git-hub" role="button">
                                <i class="fab fa-github"></i>
                                Projet sur github
                            </a>
                        </div>
                    </div>
                </div>
                <section class="projet-container projet-hidden" data-project>
                    <img src="img/projets/<?= $value->image ?>" alt="image du projet">
                    <h3><?= $value->nom ?></h3>
                    <p><?= $str ?></p>
                    <a href="#" role="button" data-target="#modaljava<?= $value->id ?>" data-toggle="modal">LEARN MORE</a>
                </section>

            <?php
            }
            ?>
        </section>
    </section>
</main>
<!-- FOOTER -->
<footer>
© Emmanuel CABASSOT 2021
</footer>

<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="script.js"></script>

<body>