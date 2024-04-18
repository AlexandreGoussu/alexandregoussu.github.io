<?php
require "header.php";

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./js/index.js">
</head>

<body>

<section id="hero"><div class="container">
        <div class="grid">
            <div class="hero__item left">
                <span>Développeur web</span>
                <h1>Bonjour, je suis Alexandre GOUSSU</h1>
                <p>Bienvenue sur mon Portfolio</p>
            </div>
            <div class="hero__item right">
                <div class="hero__avatar">
                    <img src="./Snapchat-932754384.jpg" alt="John Doe developpeur web freelance">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="about">
    <div class="container">
        <div class="grid">
            <div class="grid__item">
                <img width="560" height="453" src="https://picsum.photos/600/400?random=8" alt="John Doe - developpeur web freelance">
            </div>
            <div class="grid__item">
                <h2 class="section-title">A propos</h2>
                <h3>Qui suis-je?</h3>
                <p>Je suis un développeur web junior qui cherche à faire carrière dans ce domaine. Je suis actuellement en deuxième année de BTS sio au Lycée Edouard Gand à Amiens.
                    C'est là que j'ai eu l'occasion de m'améliorer en temps que développeur web et où j'ai pu acquérir de solides bases dans le développement web, notamment en PHP et en JavaScript, mais aussi en C# et en SQL.</p>
                <p>Depuis je cherche sans cesse à m'améliorer et consolider tout en approfondissant les bases que j'ai déjà acquise. Je continue donc à travailler chaque jour avec envie, motivation et des idées plein la tête.</p>
            </div>
        </div>
    </div>
</section>
<section id="services" class="services">

    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Mes services</h2>
            <h3>Des prestations adaptées à vos besoins</h3>
        </div>
        <div class="grid">
            <div class="grid__item">
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M297.2 248.9C311.6 228.3 320 203.2 320 176c0-70.7-57.3-128-128-128S64 105.3 64 176c0 27.2 8.4 52.3 22.8 72.9c3.7 5.3 8.1 11.3 12.8 17.7l0 0c12.9 17.7 28.3 38.9 39.8 59.8c10.4 19 15.7 38.8 18.3 57.5H109c-2.2-12-5.9-23.7-11.8-34.5c-9.9-18-22.2-34.9-34.5-51.8l0 0 0 0c-5.2-7.1-10.4-14.2-15.4-21.4C27.6 247.9 16 213.3 16 176C16 78.8 94.8 0 192 0s176 78.8 176 176c0 37.3-11.6 71.9-31.4 100.3c-5 7.2-10.2 14.3-15.4 21.4l0 0 0 0c-12.3 16.8-24.6 33.7-34.5 51.8c-5.9 10.8-9.6 22.5-11.8 34.5H226.4c2.6-18.7 7.9-38.6 18.3-57.5c11.5-20.9 26.9-42.1 39.8-59.8l0 0 0 0 0 0c4.7-6.4 9-12.4 12.7-17.7zM192 128c-26.5 0-48 21.5-48 48c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-44.2 35.8-80 80-80c8.8 0 16 7.2 16 16s-7.2 16-16 16zm0 384c-44.2 0-80-35.8-80-80V416H272v16c0 44.2-35.8 80-80 80z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3>GESTION DE PROJET WEB</h3>
                        <p>Site vitrine, corporate, évènementiel,
                            e-commerce, intranet, application mobile.</p>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3>INTEGRATION WEB</h3>
                        <p>Des intégrations (X)HTML / CSS
                            respectueuses des standards du Web</p>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3>DEVELOPPEMENTS SPECIFIQUES</h3>
                        <p>Création de site web | Application
                            sur-mesure repondant aux besoins des clients</p>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3>REFERENCEMENT NATUREL</h3>
                        <p>CMS | Framework, code optimiser pour le référencement naturel</p>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3>CONCEPTION GRAPHIQUE ET WEBDESIGN</h3>
                        <p>Logos, templates Web, plaquettes publicitaires,
                            cartes de visite, newsletters...</p>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3>DYNAMISME DES PAGES</h3>
                        <p>Des animations de contenu non intrusives
                            pour embellir votre projet.</p>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v30.6c7.9 3.4 15.4 7.7 22.3 12.8l24.9-14.3c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-25 14.4c.4 4 .7 8.1 .7 12.3s-.2 8.2-.7 12.3l25 14.4c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-24.9-14.3c-6.9 5.1-14.3 9.4-22.3 12.8l0 30.6c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V454.8c-8-3.4-15.6-7.7-22.5-12.9l-24.7 14.3c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l24.8-14.3c-.4-4.1-.7-8.2-.7-12.4s.2-8.3 .7-12.4L343.8 325c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l24.8 14.3c6.9-5.1 14.5-9.4 22.5-12.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3>INTERFACE D'ADMINISTRATION</h3>
                        <p>Gestion d'hébérgement, garanti d'accessibilité, intégration régulière des mises à jour de sécurité</p>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z"/></svg>
                    </div>
                    <div class="service__content">
                        <h3>RESPONSIVE DESIGN</h3>
                        <p>Compatible tous supports, tablette & application mobile </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="skills" class="skills">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Mes compétences</h2>
            <p>Lors de mon BTS et de par mon expérience personnelle j'ai eu l'occasion d'acquérir des compétences en terme de développement web:</p>
        </div>
        <div class="grid">
            <div class="grid__item">
                <h3>Domaines de compétences</h3>
                <ul class="list-unstyled">
                    <li>
                        <h4>Gestion de projets web</h4>
                        <p>Site vitrine, corporate, évènementiel, e-commerce, intranet, application mobile.</p>
                    </li>
                    <li>
                        <h4>Conception graphique & Webdesign</h4>
                        <p>Logos, templates Web, plaquettes publicitaires, cartes de visite, newsletters...</p>
                    </li>
                    <li>
                        <h4>Applications spécifiques et Interface d'administration</h4>
                        <p>PHP - MySQL - AJAX - C# </p>
                    </li>
                    <li>
                        <h4>Mise en place / Modification / Gestion de CMS</h4>
                        <p>Wordpress</p>
                    </li>
                    <li>
                        <h4>Conception multi-plateformes</h4>
                        <p>Compatible tous supports, tablette & application mobile</p>
                    </li>
                    <li>
                        <h4>Référencement naturel SEO</h4>
                        <p>Accessibilité & ergonomie des pages web</p>
                    <li>
                        <h4>Compétence</h4>
                        <p>Description de la compétence</p>
                    </li>
                    <li>
                        <h4>Compétence</h4>
                        <p>Description de la compétence</p>
                    </li>
                </ul>
            </div>
            <div class="grid__item">
                <h3>Compétences en développement vu en cours</h3>
                <div class="progressbar" style="width: 90%">
                    <div class="bar">HTML<i class="val">Très bonne maîtrise</i></div>
                    
                </div>
                <div class="progressbar" style="width: 90%">
                    <div class="bar">CSS<i class="val">Très bonne maîtrise</i></div>
                </div>
                <div class="progressbar" style="width: 85%">
                    <div class="bar">JS<i class="val">Très bonne maîtrise</i></div>
                </div>
                <div class="progressbar" style="width: 85%">
                    <div class="bar">PHP<i class="val">Très bonne maîtrise</i></div>
                </div>
                <div class="progressbar" style="width: 80%">
                    <div class="bar">MySQL<i class="val">Bonne maîtrise</i></div>
                </div>
                <div class="progressbar" style="width: 70%">
                    <div class="bar">C#<i class="val">Bonne maîtrise</i></div>
                </div>

                <h3>Compétences acquises personnellement/en stage</h3>
                <div class="progressbar" style="width: 90%">
                    <div class="bar">FIGMA<i class="val">Bonne maîtrise</i></div>
                </div>
                <div class="progressbar" style="width: 70%">
                    <div class="bar">SYMFONY<i class="val">Bonne maîtrise</i></div>
                </div>
                <div class="progressbar" style="width: 65%">
                    <div class="bar">REACT JS<i class="val">Bonne maîtrise</i></div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Portfolio</h2>
            <p>Voici un petit apperçu des projets que j'ai pu faire dans le cadre de mes études et de mes immersions en entreprises</p>
        </div>
        <div class="grid">
            <div class="grid__item">
                <div class="card">
                    <img src="https://picsum.photos/600/400?random=1" alt="projet de la ville" class="card__image">
                    <div class="card__inner">
                        <h3 class="card__title">REMATT</h3>
                        <p class="category">Développement Web</p>
                    </div>
                    <div class="card__overlay">
                        <a href="https://remattproject.com/" target="_blank">+</a>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="card">
                    <img src="https://picsum.photos/600/400?random=3" alt="projet de la ville" class="card__image">
                    <div class="card__inner">
                        <h3 class="card__title">Projet GSB</h3>
                        <p class="category">Applications</p>
                    </div>
                    <div class="card__overlay">
                        <a href="https://github.com/AlexandreGoussu/MonProjetGSB">+</a>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="card">
                    <img src="https://picsum.photos/600/400?random=4" alt="projet de la ville" class="card__image">
                    <div class="card__inner">
                        <h3 class="card__title">Projet VDS</h3>
                        <p class="category">Développement Web</p>
                    </div>
                    <div class="card__overlay">
                        <a href="https://github.com/AlexandreGoussu/MonProjetVDS">+</a>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="card">
                    <img src="https://picsum.photos/600/400?random=6" alt="projet de la ville" class="card__image">
                    <div class="card__inner">
                        <h3 class="card__title">Projet personnel</h3>
                        <p class="category">Application</p>
                    </div>
                    <div class="card__overlay">
                        <a href="https://gitlab.com/gekyume/toto">+</a>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="card">
                    <img src="https://picsum.photos/600/400?random=7" alt="projet de la ville" class="card__image">
                    <div class="card__inner">
                        <h3 class="card__title">France Mobilier</h3>
                        <p class="category">Développement</p>
                    </div>
                    <div class="card__overlay">
                        <a href="https://gitlab.com/gekyume/toto">+</a>
                    </div>
                </div>
            </div>
            <div class="grid__item">
                <div class="card">
                    <img src="https://picsum.photos/600/400?random=8" alt="projet de la ville" class="card__image">
                    <div class="card__inner">
                        <h3 class="card__title">SIO SHOP</h3>
                        <p class="category">Application</p>
                    </div>
                    <div class="card__overlay">
                        <a href="https://gitlab.com/gekyume/toto">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</body>


</html>
<?php
require "footer.php";

?>