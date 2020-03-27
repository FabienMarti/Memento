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
</body>

</html>