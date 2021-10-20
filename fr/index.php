<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <title>Bastien Pinna / Front-End</title>
    <meta name="description" content="Bastien Pinna, designer / développeur front-end. Donnons vie aux outils qui porteront votre projet !">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    
</head>

<body class="lang_fr">
    
    <header>
        <div class="container">
            <h1><a href="#">Bastien Pinna</a></h1>
            <nav id="main_nav">
                <a href="#">
                <?php echo file_get_contents( "../assets/img/compass.svg") ?>
                </a>
                <ul>
                    <li><a data-anchor="presta" href="#presta_anchor">Prestations</a></li>
                    <li><a data-anchor="work" href="#work_anchor">Portfolio</a></li>
                    <li><a data-anchor="about" href="#about_anchor">A propos</a></li>
                    <li><a data-anchor="contact" href="#contact_anchor">Contact</a></li>
                    <li class="lang"><a href="../en">En</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="filter"></div>
        <div class="container">
            <div class="titles">
                <h2><span class="title_top"><span style="--order : 0">Web </span><strong class="color_1 fancy"><span style="--order : 3">D</span><span style="--order : 4">e</span><span style="--order : 5">s</span><span style="--order : 6">i</span><span style="--order : 7">g</span><span style="--order : 8">n</span><span style="--order : 9">e</span><span style="--order : 10">r</span></strong> <span style="--order : 12">/</span></span>
                <span class="white_grid"></span><span class="title_bottom"><strong><span style="--order : 14">D</span><span style="--order : 15">é</span><span style="--order : 16">v</span><span style="--order : 17">e</span><span style="--order : 18">l</span><span style="--order : 19">o</span><span style="--order : 20">p</span><span style="--order : 21">p</span><span style="--order : 22">e</span><span style="--order : 23">u</span><span style="--order : 24">r</span></strong><span style="--order : 27"> Front</span><span style="--order : 29">-End</span></span></h2>
                <p class="slogan"><span class="slogan_top" style="--order : 40">Donnons vie aux outils</span>
                <span class="white_grid"></span>
                <span class="slogan_bottom" style="--order : 46">qui porteront <strong class="color_1">votre projet</strong></span>
            </p>
            </div>
            <div class="digital_nomad_container" data-tilt data-tilt-reverse="true" data-tilt-max="5" data-tilt-speed="1200" data-tilt-startX="-50" data-tilt-startY="-50" >
                <?php echo file_get_contents( "../assets/img/glass_nomad.svg") ?>
                <?php echo file_get_contents( "../assets/img/glass_nomad.svg") ?>
            </div>
            <!-- <img src="../assets/img/digital_nomad.jpg" alt="digital_nomad"> -->
    </div>
    </section>

    <section class="welcome">
        <div class="container">
            <h2 class="trigger triggered"><span>Bienvenue <span>!</span></h2>

            <div>
                <div class="lines trigger triggered">
                    <p><span class="color_1 slogan_top"> Vous êtes bon dans votre métier, <br>
                     et vous souhaitez l'exercer dans les meilleurs conditions ?</span>
                    <span class="white-grid"></span><span class="slogan_bottom"><strong>Je peux probablement vous aider</strong>.</span></p>

                    <div class="wrapper "><div class="line trigger triggered"></div><a href="#" class="cta trigger triggered">Parlez-moi de votre projet.</a></div>
                </div>
                
            </div>
        </div>
        <span id="presta_anchor"></span>
    </section>

    <section data-anchor="presta" id="prestations">
        <div class="container">
            <h2 class="borderline trigger triggered">Ce que je peux vous proposer</h2>
            <article>
                <div class="illustration"></div>
                <div>
                    <h3 class="trigger triggered">Conception <span class="fancy">UX / UI</span></h3>
                    <p class="chapo trigger triggered">Nous allons discuter de votre projet. <br>
                    Longtemps.</p>
                    <p class="trigger triggered">Vous maîtrisez déjà votre sujet, et je suis d'un naturel curieux. <br>
                    En cernant au mieux les objectifs et les <strong>problématiques</strong> que vous 
                    souhaitez résoudre, je serai en mesure de vous proposer la solution la plus
                    pertinente possible.</p>
                    <p class="trigger triggered"> Cette première étape nous permettra de commencer à imaginer l'interface dont
                    <strong>vos clients et vous</strong> aurez besoins, et par quels moyens nous interagirons avec elle.</p>
                    <p class="trigger triggered">L'aboutissement sera un ensemble de maquettes et de concepts, <br>
                    qui serviront de socle à la suite du projet, AKA la partie technique  :</p>
                </div>
            </article>

            <article>
                <div>
                    <h3 class="trigger triggered">Développement <span class="fancy">Front-End</span></h3>
                    <p class="chapo trigger triggered">Là où il faut mettre les mains <br>
                    dans le cambouis.</p>
                    <p class="trigger triggered">Que  nous ayons  conçu ensemble les maquettes de votre projet, <br>
                    ou que vous les ayez déjà réalisées en faisant appel à votre graphiste préféré, <br>
                    nous allons transformer cette jolie grille de pixels en une <strong> interface fonctionnelle</strong>.</p>
                    <p class="trigger triggered"> Nous pèserons le pour et le contre des options qui s'offrent à nous, <br>
                    en tenant compte des évolutions que vous envisagez pour le <strong>futur de votre projet.</strong> <br>
                     De la vitrine statique à l'application la plus complète, en passant par  le thème
                     Wordpress sur-mesure, nos seuls limites sont <strong>le budget</strong> et <strong>le temps</strong> à disposition.</p>
                     <a href="#" class="cta trigger triggered">On attaque ?</a>
                </div>
                <div class="illustration"></div>
            </article>
            
        </div>
    </section>

    <section id="technical">
        <div class="container">
            <h2 class="borderline trigger triggered">Vous aimez la partie <span class="glitch">technique</span> ?</h2>
            <p class="invitation">Découvrez mes <span class="color_1">technologies de prédilection</span> :</p>

            <ul>
                <li class="trigger triggered">
                    <p>Javascript ES6</p>
                    <div class="bar">
                        <div class="progress p70"></div>
                    </div>
                </li>
                <li class="trigger triggered">
                    <p>PHP 8</p>
                    <div class="bar">
                        <div class="progress p75"></div>
                    </div>
                </li>
                <li class="trigger triggered">
                    <p>HTML5/CSS</p>
                    <div class="bar">
                        <div class="progress p90"></div>
                    </div>
                </li>
                <li class="trigger triggered">
                    <p>Debian GNU + linux</p>
                    <div class="bar">
                        <div class="progress p40"></div>
                    </div>
                </li>
                <li class="trigger triggered">
                    <p>Wordpress 5</p>
                    <div class="bar">
                        <div class="progress p80"></div>
                    </div>
                </li>
                <li class="trigger triggered">
                    <p>Symfony 5</p>
                    <div class="bar">
                        <div class="progress p85"></div>
                    </div>
                </li>
            </ul>

            <div class="color_1 needed">
                <p><span class="slogan_top">Si vous repérez quelque chose </span>
                <span class="white_grid"></span><span class="slogan_bottom">dont votre entreprise a besoin,</span></p>
                <a href="#">Télécharger mon&nbsp;<span class="color_1">CV</span><?php echo file_get_contents("../assets/img/down1.svg")?></a>
            </div>
            <div class="wrapper"><div class="line"></div><a href="#" class="cta">Contactez-moi</a></div>
        </div>
        <span id="work_anchor"></span>
    </section>

    <section data-anchor=work id="portfolio">
        <div class="filter"></div>
        <div class="container">
            <h2 class="borderline trigger triggered">Derniers travaux</h2>
            <ul class="trigger triggered">
                <li style="--order : 1"><a href="https://calendar.wcacademy.fr" target="_blank"><img data-tilt data-tilt-reverse="true" src="../assets/img/work_wca.jpg" alt="WCA"> <p>WCA Calendar</p></a></li>
                <li style="--order : 2"><a href="https://christeldubernardpsychologue.com/" target="_blank"><img data-tilt data-tilt-reverse="true" src="../assets/img/work_dubernard.jpg" alt="Christel Dubernard"> <p>Christel Dubernard</p></a></li>
                <li style="--order : 3"><a href="https://les-carnets-de-jack.com" target="_blank"><img data-tilt data-tilt-reverse="true" src="../assets/img/work_jack.jpg" alt="Les carnets de Jack"> <p>Les Carnets de Jack</p></a></li>
                <li style="--order : 4"><a href="https://www.toursnpierres.fr/" target="_blank"><img data-tilt data-tilt-reverse="true" src="../assets/img/work_tnp.jpg" alt="Tours'N Pierres"> <p>Tours'N Pierres</p></a></li>
                <li style="--order : 5"><a href="https://bastien-pinna.net/jpo-cma" target="_blank"><img data-tilt data-tilt-reverse="true" src="../assets/img/work_cma.jpg" alt="CMA"> <p>CMA Portes ouvertes</p></a></li>
                <li style="--order : 6"><a href="https://bastien-pinna.net/fx-statique/" target="_blank"><img data-tilt data-tilt-reverse="true" src="../assets/img/work_fxm.jpg" alt="FXM"> <p>François-Xavier Marquis</p></a></li>
            </ul>
        </div>
    </section>
    
    <span id="about_anchor"></span>
    <section data-anchor="about" id="about">
        <div class="container">
            <h2 class="borderline trigger triggered">Quid de l'humain derrière la machine ?</h2>

            <article>
                <div>
                        <img class="about_1 trigger triggered" src="../assets/img/profile.jpg" alt="Smile in airplane">
                    <div class="content">
                        <h3 class="color_1">" Hello !</h3>
                        <p class="trigger triggered">Je suis Bastien, développeur et <i>Backpacker</i> depuis plus de deux ans. <br>
                        Vous pouvez me voir comme un <strong>Artisan</strong>, mais dont l'atelier rentre 
                        en entier dans un <strong>sac à dos</strong> !  </p>
                        <p class="trigger triggered">Il y a quelques années, j'ai décidé de faire d'un de mes hobby, <br>
                        la création multimédia, une compétence professionnalisante en plongeant
                        dans le monde du Web Design.</p>
                        <p class="trigger triggered">De fil en aiguille, j'ai mis les mains dans le code et le développement web…
                           <br> <span class="text_right">...sans jamais en être ressorti !</span>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="img_frame">
                            <img class="about_2 trigger triggered" src="../assets/img/backpack.jpg" alt="Desert backpack">
                            <img class="about_3 trigger triggered" src="../assets/img/water.jpg" alt="Desert backpack">
                    </div>
                    <div class="content">
                        <p class="trigger triggered">C'est un métier dans lequel on en apprend tous les jours :
                        s'ennuyer est devenu <strong>impossible</strong>.</p>
                        <p class="trigger triggered">Aujourd'hui, je marie cette passion des technologies avec une autre :
                        celle des voyages et de l'exploration.
                           <br> <span>Pas de panique !</span></p>
                        <p class="trigger triggered">Changer d'environnement est un moyen de rester créatif au quotidien.
                        Depuis une terrasse à Granada, ou un coworking à Reykjavik, <strong>votre projet
                        sera entre de bonnes mains</strong>. <br>
                        Je reste proche d'un débit solide, que ce soit pour patcher la prod, ou 
                        regarder le dernier épisode des <i>Peaky Blinders</i>.</p>
                        <p class="trigger triggered">Vous êtes fiers de vos locaux, et l'ambiance est aussi top que la machine à café ? <br>
                            <span class="text_right">C'est avec plaisir que je viendrai vous rencontrer ! "</span>
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <script src="../js/vanilla-tilt.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>
