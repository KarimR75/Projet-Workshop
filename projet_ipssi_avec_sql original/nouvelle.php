<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no cache">
    <title>News</title>

    <style>
        body{
		width: 100%;
		background-color: #E8E8E8;
	}
        #container {
            margin-top: 120px;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .article h1 {
            color: red;
            font-family: Helvetica;
        }

        .article {
            border: 2px solid black;
            width: 40%;
            display: inline-block;
            background-color: rgb(220, 220, 220);
            text-decoration: none;
            margin: 10px;

        }

        ul li {
            list-style: none;

        }

        .article img {
            height: 600px;
            width: 600px;
        }

        .view {
            position: relative;
            width: 300px;
            height: 200px;
            border: 1px solid rgb(0, 0, 0);
            /*La propriété CSS overflow est une propriété raccourcie qui définit comment gérer le dépassement du contenu d'un élément dans son bloc. 
            Elle définit les valeurs des propriétés overflow-x et overflow-y.*/
            overflow: hidden;
            /*Pour caché l'élément ".mask" qui contient la description de l'article */
            float: left;
            margin: 5px;
        }

        .view img {
            width: 300px;
            height: 200px;
        }

        .mask {
            position: absolute;
            left: 0;
            top: 200px;
            /*Pour positionner l'élément ".mask" au dessous de l'article */
            background: rgba(0, 0, 0, 0.3);
            color: white;
            text-align: center;
            width: 300px;
            height: 200px;
            /* transition sur la propriété top qui change de 200px à 0 pendant le hover  */
            transition: top 0.4s linear;
        }

        .mask a {
            text-decoration: none;
            color: white;
            font-size: 1.5em;
            font-family: Helvetica, sans-serif;
            background: #000;
            padding: 5px 10px 5px 10px;
            border-radius: 5px;

        }

        /* changement de la position du ".mask" pendant le survol sur .view */
        .view:hover>.mask {
            top: 0;
        }

        table,
        tr,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <?php include("code_header.htm"); ?>
    
    <div id="container">
        <h1>
            <center>News de Sport</center>
        </h1>
    </div>
    <table align="center">
        <tr>

            <td>
                <article class="view">
                    <img src="photos/slavia.jpg" alt="" />
                    <div class="mask">
                        <h2>Match sensationnel</h2>
                        <p>1ere victoire pour les rouges depuis 2010</p>
                        <a href="#">Voir l'article</a>
                    </div>
                </article>
            </td>
            <td>
                <article class="view">
                    <img src="photos/winners.jpg" alt="" />
                    <div class="mask">
                        <h2>PSG en tete de l'UEFA</h2>
                        <p>Celebration des bleus qui rammenent la coup a la maison</p>
                        <a href="#">Voir l'article</a>
                    </div>
                </article>
            </td>
            <td>
                <article class="view">
                    <img src="photos/missing.jpg" alt="" />
                    <div class="mask">
                        <h2>Disparition de Neyney</h2>
                        <p>L'ex-favori de PSG a disparu depuis les dernier 48h</p>
                        <a href="#">Voir l'article</a>
                    </div>
                </article>
            </td>
        </tr>

        <tr>
            <td><a href="#">La nouvelle reforme d'arbitrage</a>
                <p>Changement drastique du foot</p>
            </td>
            <td><a href="#">Statistique de la semaine</a></td>
            <td><a href="#">Le calcium important pour le corps?</a>
                <p>Les scientifiques disent non</p>
            </td>
        </tr>

    </table>


</body>

</html>