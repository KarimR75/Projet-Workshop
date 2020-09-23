<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <Title>
        IPSSI PARIS SPORT
    </Title>
</head>
<style>
    body {
        background-color: #E8E8E8;
    }

    #feed {
        width: 70%;
        margin-left: auto;
        margin-right: auto;

    }

    .h1 {
        font-family: Helvetica;
        color: black;
        text-align: center;
    }

    .view {
        position: relative;
        width: 300px;
        height: 300px;
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
        height: 300px;
    }

    .mask {
        position: absolute;
        left: 0;
        top: 300px;
        /*Pour positionner l'élément ".mask" au dessous de l'article */
        background: rgba(0, 0, 0, 0.8);
        color: white;
        text-align: center;
        width: 300px;
        height: 300px;
        /* transition sur la propriété top qui change de 200px à 0 pendant le hover  */
        transition: top 0.40s linear;
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
</style>

<body>
    <?php include("code_header.htm"); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="h1">
        <h1> Choix du maillot ! </h1>
    </div>
    <section>
        <div id="feed">
            <article class="view">
                <img src="Photos/maillot_psg_base.jpg" alt="" />
                <div class="mask">
                    <h2>Maillot basique</h2>
                    <p>49.99€</p>
                    <a href="achat.php"> ACHETER </a>
                </div>
            </article>
            <article class="view">
                <img src="Photos/maillot_psg_jordan.png" alt="" />
                <div class="mask">
                    <h2>Maillot Noir Jordan</h2>
                    <p>59.99€ </p>
                    <a href="achat.php"> ACHETER </a>
                </div>
            </article>
            <article class="view">
                <img src="Photos/maillot_psg_jordan_white.png" alt="" />
                <div class="mask">
                    <h2>Maillot Blanc Jordan</h2>
                    <p>59.99€</p>
                    <a href="achat.php"> ACHETER </a>
                </div>
            </article>
            <article class="view">
                <img src="Photos/maillot_psg_jordan_extérieur.png" alt="" />
                <div class="mask">
                    <h2>Maillot Jordan Extérieur</h2>
                    <p>49.99€</p>
                    <a href="achat.php"> ACHETER </a>
                </div>
            </article>
            <article class="view">
                <img src="Photos/maillot_vert.jpg" alt="" />
                <div class="mask">
                    <h2>Maillot Vert</h2>
                    <p>49.99€</p>
                    <a href="achat.php"> ACHETER</a>
                </div>
            </article>
        </div>
        <div class="h1">
            <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            <h1> Choix du ballont ! </h1>
        </div>
        <section>
            <div id="feed">
                <article class="view">
                    <img src="Photos/1.jpg" alt="" />
                    <div class="mask">
                        <h2>Maillot basique</h2>
                        <p>49.99€</p>
                        <a href="achat.php"> ACHETER </a>

                </article>
            </div>
            <div id="feed">
                <article class="view">
                    <img src="Photos/2.jpg" alt="" />
                    <div class="mask">
                        <h2>Maillot basique</h2>
                        <p>49.99€</p>
                        <a href="achat.php"> ACHETER </a>

                </article>
            </div>
            <div id="feed">
                <article class="view">
                    <img src="Photos/3.jpg" alt="" />
                    <div class="mask">
                        <h2>Maillot basique</h2>
                        <p>49.99€</p>
                        <a href="achat.php"> ACHETER </a>

                </article>
            </div>
            <div id="feed">
                <article class="view">
                    <img src="Photos/4.jpg" alt="" />
                    <div class="mask">
                        <h2>Maillot basique</h2>
                        <p>49.99€</p>
                        <a href="achat.php"> ACHETER </a>

                </article>
            </div>
        </section>

    </section>



</body>

</html>