<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../styles/style.css" type="text/css" />
    <title>📃 Memento HTML 📃</title>
</head>
<header>
<a id="haut"></a>
    <nav id="navMenu">
        <fieldset id="navFieldSet">
            <legend>Menu de Navigation</legend>
            <ul>
                <li><strong>Structure d'une page</strong>
                    <ol>
                        <li><a href="#head">En-tête</a></li>
                        <li><a href="#body">Corps de la page</a></li>
                        <li><a href="#foot">Pied de page</a></li>
                    </ol>
                </li>
                <li><strong>Les formulaires</strong>
                    <ol>
                        <li><a href="#formElem">L'élement Form</a></li>
                        <li><a href="#inputElem">L'élement Input</a></li>
                        <ul>
                            <li><a href="#inputImportant">Important</a></li>
                            <li><a href="#typeText">Les types Text et Nom</a></li>
                            <li><a href="#button">Les boutons</a></li>
                        </ul>
                    </ol>
                </li>
                <li><strong>Les tableaux</strong>
                    <ol>
                        <li><a href="#mainTags">Balises principales</a></li>
                        <li><a href="#tags">Balises internes au tableau</a></li>
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
    <aside id="sideInfos">
        <fieldset>

        
            <legend>C'est quoi le HTML 5 ?</legend>
            <p>HTML5 (HyperText Markup Language 5) est la dernière révision majeure du HTML (format de données conçu pour représenter les pages web). Cette version a été finalisée le 28 octobre 2014. HTML5 spécifie deux syntaxes d'un modèle abstrait défini
                en termes de DOM : HTML5 et XHTML5. Le langage comprend également une couche application avec de nombreuses API, ainsi qu'un algorithme afin de pouvoir traiter les documents à la syntaxe non conforme. Le travail a été repris par le W3C
                en mars 2007 après avoir été lancé par le WHATWG. Les deux organisations travaillent en parallèle sur le même document afin de maintenir une version unique de la technologie. Le W3C clôt les ajouts de fonctionnalités le 22 mai 2011, annonçant
                une finalisation de la spécification en 20141, et encourage les développeurs Web à utiliser HTML 5 dès ce moment. Fin 2016, la version 5.1 est officiellement publiée et présente plusieurs nouveautés qui doivent faciliter le travail des
                développeurs d'applications Web</p>
        </fieldset>
    </aside>
    <section id="structure">
        <fieldset>
            <legend class="bigTitle">Structure d'une page</legend>
            <h1 id="head">1 - En-tête</h1>
            <p>Une page HTML doit toujours commencer par <strong class="important"></b></em>&lt;!DOCTYPE html&gt;</strong> suivit par les balises <strong>&lt;html&gt;</strong> en ouverture puis <strong>&lt;/html&gt;</strong> en bas de page.</br> Suivit de
                balises
                <strong>&lt;head&gt;</strong> et
                <strong>&lt;/head&gt;</strong> dans lequelles on retrouvera les informations necessaire au bon fonctionnement de la page, telles que : </p>
            <ul>
                <li>Une balise <strong>&lt;meta charset="UTF-8" /&gt;</strong>,</li>
                <li>Un titre contenu dans <strong>&lt;title&gt; &lt;/title&gt;</strong> qui s'affichera sur l'onglet,</li>
                <li>Un lien <strong>&lt;link /&gt;</strong> pour lier sa page a un fichier CSS</li>
            </ul>
            <p>Exemple : </p>
            <image src="../images/head.jpg" />
            <h1 id="body">2 - Corps de la page</h1>
            <p>On peut ensuite passer au corps de la page entre des balises <strong>&lt;body&gt; &lt;/body&gt;</strong> entre lequelles on peut utliser tout type de balises, telles que : </p>
            <ul>
                <li><strong>&lt;h1&gt; à &lt;h6&gt;</strong> pour mettre en avant des phrases, telles que des titres,</li>
                <li><strong>&lt;p&gt; &lt;/p&gt;</strong> entre lequelles on peut écrire un paragraphe et effectuer des sauts de ligne avec <strong>&lt;/br&gt;</strong></li>
                <li><strong>&lt;ul&gt;</strong> pour les listes à puces et <strong>&lt;ol&gt;</strong> pour les listes ordonnées, toutes deux suivies de <strong>&lt;li&gt;</strong> pour chaque élement,</li>
            </ul>
            <p>Exemple : </p>
            <image src="../images/body.jpg" />
            <h1 id="foot">3- Pied de page</h1>
            <p>Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi subtraxit, sollicitari se simulans ne, uti est militare otium fere tumultuosum,
                in eius perniciem conspiraret, solisque scholis iussit esse contentum palatinis et protectorum cum Scutariis et Gentilibus, et mandabat Domitiano, ex comite largitionum, praefecto ut cum in Syriam venerit, Gallum, quem crebro acciverat,
                ad Italiam properare blande hortaretur et verecunde.</p>
        </fieldset>
    </section>

    <section id="forms">
        <fieldset>
            <legend class="bigTitle">Les formulaires</legend>
            <h1 id="formElem">1 - L'élement Form</h1>
            <p>Le l'élement form englobe tout un formulaire, un formulaire devra donc se trouver entre des balises <strong>&lt;form&gt;&lt;/form&gt;></strong> et contiendra des éléments tels que : </p>
            <ul>
                <li>Des inputs nous servant à utiliser plusieurs types d'inputs,</li>
                <li>Des labels nous permettant de donner d'entrer du texte dans les formulaires,</li>
                <li>Des fieldset nous permettant d'englober tous nos formulaires par section, et leur ajouter un titre.</li>
            </ul>
            <p>Exemple : </p>
            <image src="../images/form.jpg" />
            <p>Résultat : </p>
            <form>
                <fieldset>
                    <legend>Titre de la section</legend>
                    <label>Votre nom : </label><input type="text" />
                    <input type="submit" value="Envoyer" />
                </fieldset>
            </form>
            <h1 id="inputElem">L'élement input</h1>
            <p>L'élement input peut avoir plusieurs attributs, dont des types, avec lequels on peut créer :</p>
            <ul>
                <li>des champs de texte ou numero pour renseigner un prénom, un nom, ou un numéro quelconque,</li>
                <li>des sondages ou des checkbox,</li>
                <li>des boutons pour valider le formulaire.</li>
            </ul>
            <h2 id="inputImportant">Important</h2>
            <p>Chaque élement input doit avoir comme attributs un id et un nom, c'est inévitable, par exemple : </br> <strong>&lt;input type="text" id="fname" name="fname" /&gt;</strong></p>
            <h2 id="typeText">Type text et number</h2>
            <p>La syntaxe utilisée pour les types text et number est la suivante : <strong>&lt;input type="text" /&gt;</strong> et <strong>&lt;input type="number" /&gt;</strong></p>
            <h2 id="chekcbox">Type radio et checkbox</h2>
            <p>Comme pour le type text, la syntaxe est la même, on change juste le type en "radio" ou "checkbox", le type radio nous servira à faire un sondage, pendant que le type checkbox nous servira à cocher.</p>
            <h2 id="button">Les boutons</h2>
            <p>Les boutons nous servent à envoyer une requête ou valider un formulaire la syntaxe d'un bouton est : &lt;input type="submit" value="Valider" /&gt;, ou value est le texte inscrit sur le bouton.</p>
            <h2 id="textArea">Les "Text Area"</h2>
            <p>Haec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi subtraxit, sollicitari se simulans ne, uti est militare otium fere tumultuosum,
                in eius perniciem conspiraret, solisque scholis iussit esse contentum palatinis et protectorum cum Scutariis et Gentilibus, et mandabat Domitiano, ex comite largitionum, praefecto ut cum in Syriam venerit, Gallum, quem crebro acciverat,
                ad Italiam properare blande hortaretur et verecunde.
            </p>
        </fieldset>
    </section>
    <section id="table">
        <fieldset>
            <legend class="bigTitle">Les Tableaux</legend>
            <h1 id="mainTags">Les balises principales</h1>
            <p>Dans un tableau on utilise 3 balises principales, le thead pour l'en-tête du tableau, le tbody pour le contenu de ce tableau puis le tfoot pour le pied du tableau.</p>

            <h1 id="tags">Les balises internes</h1>
            <p>A l'intérieur de ce tableau, on va retrouver des balises : </p>
            <ul>
                <li>&lt;tr&gt; qui correspondent aux lignes (rows)</li>
                <li>&lt;td&gt; qui correspondent aux cellules</li>
                <li>&lt;th&gt; qui sert à mettre un titre dans ce tableau</li>
            </ul>
            <p>On pourra utiliser des attributs tels que "colspan" qui sert à fusionner un nombre de cellules exemple : &lt;td colspan="2" &gt;&lt;/td&gt;</p>

        </fieldset>
    </section>
</body>

</html>