<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../styles/style.css" type="text/css" />
    <title>📃 Memento Git/GitHub 📃</title>
</head>
<header>
    <nav id="navMenu">
        <fieldset id="navFieldSet">
            <legend>Menu de Navigation</legend>
            <ul>
                <li><strong>Généralités UNIX</strong>
                    <ol>
                        <li><a href="#commands">Les commandes</a></li>
                    </ol>
                </li>
                <li><strong>Utilisation de Git</strong>
                    <ol>
                        <li><a href="#gitInit">Initialiser son Git</a></li>
                        <li><a href="#gitEdit">Modifier un fichier</a></li>
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
    
    <aside id="sideInfos">
        <fieldset>
            <legend>C'est quoi le GitHub ?</legend>
            <p>GitHub est un service web d'hébergement et de gestion de développement de logiciels, utilisant le logiciel de gestion de versions Git. Ce site est développé en Ruby on Rails et Erlang par Chris Wanstrath, PJ Hyett et Tom Preston-Werner. GitHub propose des comptes professionnels payants, ainsi que des comptes gratuits pour les projets de logiciels libres. Le site assure également un contrôle d'accès et des fonctionnalités destinées à la collaboration comme le suivi des bugs, les demandes de fonctionnalités, la gestion de tâches et un wiki pour chaque projet.</p>
        </fieldset>
    </aside>
    <section>
        <fieldset>
            <legend class="bigTitle">Généralités UNIX</legend>
            <h1 id="commands">Les commandes</h1>
            <p>Pour pouvoir utiliser Git à sont plein potentiel, il faut maitriser les commandes UNIX dans un terminal (ou GitBash pour windows), plusieurs commandes vont servir pour préparer le terrain pour Git : </p>
            <ol>
                <li>UNIX sans Git</li>           
                <ul>
                    <li>"pwd" :  print working directory, cette commande nous montre ou nous nous situons,</li>
                    <li>"cd" : change directory, peut être utilisée pour se déplacer dans les dossier, de plus l'utilisation des ".." apres "cd" permet de remonter l'arborescence des dossiers,</li>
                    <li>"mkdir" : make directory, est utilisée pour créér un dossier suivit du nom de celui-ci,</li>
                    <li>"touch" est utilisé pour créér un fichier dans le dossier actuel en n'oubliant pas l'extension de se fichier,</li>
                    <li>"ls" : list, permet de lister le contenu du dossier actuel,</li>
                </ul>
                <li>Commandes Git</li>
                <ul>
                    <li>"git init" permet d'initialiser Git dans un dossier caché ( .git) à l'endroit de l'init</li>
                    <li>"git add" permet d'ajouter des fichiers nouveaux ou modifiés</li>
                    <li>"git commit -m " " permet d'ajouter un commentaire sur l'upload suivant</li>
                    <li>"git remote" défini le repository cible sur le site de GitHub (on utilisera en général un lien préparé sur le repository cible)</li>
                    <li>"git push -u master" permet d'upload les fichiers précédement sélectionnés pour la mise a jour sur le site GitHub et permet le stockage dans des serveurs distants                
                </ul>
            </ol>
        </fieldset>
    </section>
    <section>
        <fieldset>
            <legend class="bigTitle">Utilisation de Git</legend>
            <h1 id="gitInit">Initialiser son Git</h1>
            <p>Afin de pouvoir utiliser Git, nous devons l'initialiser dans le dossier racine de notre site web (local) et ensuite permettre un controle distant pour l'envoie et la reception de données, voici la marche à suivre : </p>
            <ol>   
                <li>Créer un repository sur GitHub</li>
                <li>Se placer à la racine du site web local(soit par commandes avec "cd" soit avec un clic droit dans le dossier et ouvrir un terminal içi)</li>
                <li>git init</li>
                <li>git add lesPremiersFichiersaEnvoyer.extensionDuFichier</li>
                <li>git commit -m "Un commentaire pertinent"</li>
                <li>git remote .... , on utilise un lien disponible sur la page du repository en question, on colle avec shift+insert</li>
                <li>git push -u origin master</li>
            </ol> 
            <p>Git est initialisé et prêt à l'emploi !</p>
            <h1 id="gitEdit">Modifier un fichier</h1>
            <p>Après la modification d'un fichier en local, il est important de le partager sur son Git ne serais-ce que pour garder une copie en lieu sur, pour ce faire nous utilisons des commandes dans un terminal ouvert à la racine de notre site web local : </p>
            <ol>
                <li>git add : on ajoute les fichier modifiés ou les dossiers</li>
                <li>git commit -m " " : on laisse un commentaire de mise à jour</li>
                <li>git push -u origin master : on envoie au serveur distant</li>
            </ol>
        </fieldset>
    </section>
</body>
</html>
