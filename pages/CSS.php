<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../styles/style.css" type="text/css" />
    <title>📃 Memento CSS 📃</title>
</head>
<header>
    <nav id="navMenu">
        <fieldset id="navFieldSet">
            <legend>Menu de Navigation</legend>
            <ul>
                <li><strong>Structure générale</strong>
                    <ol>
                        <li><a href="#head"></a></li>
                        <li><a href="#body"></a></li>
                        <li><a href="#foot"></a></li>
                    </ol>
                </li>
                <li><strong>Les attributs</strong>
                    <ol>
                        <li><a href="#formElem"></a></li>
                        <li><a href="#inputElem"></a></li>
                        <ul>
                            <li><a href="#inputImportant"></a></li>
                            <li><a href="#typeText"></a></li>
                            <li><a href="#button"></a></li>
                        </ul>
                    </ol>
                </li>
                <li><strong></strong>
                    <ol>
                        <li><a href="#mainTags"></a></li>
                        <li><a href="#tags"></a></li>
                    </ol>
                </li>
            </ul>
            <a href="#haut">
                <image id="flechehaut" src="../images/fleche-haut.png" />
            </a>
        </fieldset>
    </nav>
    <div><?php include("../php/header.php"); ?></div>
</header>

<body>
    <section>
        <fieldset>
        <legend class="bigTitle">Structure générale</legend>
        <h1>Syntaxe du CSS</h1>
        <p>Le CSS s'écrit de la manière suivante : </p>
        <ul>
            <li>un selecteur type : h1, body et d'autres</li>
            <li>des accolades qui engloberont le code { }</li>
            <li>du code pour modifier la balise selectionnée, la class ou l'id</li>
        </ul>
        <p>Je veux modifier la largeur de mon body à 800px et mettre une hauteur automatique, Exemple : </p>
        <image src="../images/CSS_body.jpg"/>
        </fieldset> 
    </section>
    <section>
    <fieldset>
    <legend class="bigTitle">Les selecteurs</legend>
    <h1>Les selecteurs de type balises</h1>
    <p>Pour sélectionner les portions de texte ou les balises principales à modifier on peut facilement utiliser des balises en tant que selecteur : </p>
    <ul>
        <li>p, </li>
        <li>h1 à 6, </li>
        <li>section, </li>
        <li>body, etc</li>
    </ul>
    <h1>Combinaisons de selecteurs</h1>
    <p>On peut utiliser plusieurs selecteur pour le meme code CSS, de ce fait on peut dire par exemple que l'on veut h1, h2, et legend en gras; Exemple : </p>
    <image src="../images/CSS_selecteurs.jpg" />
    <p>Il suffit simplement de mettre des virgules entre chaque selecteur. </p>
    <h1>Utilisation Parent/Enfant</h1>
    <p>Pour simplifier son code CSS on peut utiliser l'héritage, c'est à dire l'enfant d'un parent, si par exemple je veux que toutes les lignes d'une liste à puce ul soient sur fond vert mais que celles de la liste ol restent normales : </p>
    <image src="../images/CSS_heritage.jpg" />
    <p>Il suffit d'indiquer comme selecteur le parent suivit de l'enfant</p>
    </fieldset>
    </section>
</body>

</html>