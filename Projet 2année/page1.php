<?php
session_start();
if (isset($_SESSION['id']) == false) {
    header('Location: connexion.php');
}



?>


<html>
<style>
    body {



        background-image: url("30044933-28827537.jpg");
        background-repeat: no-repeat, repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background:  #E8E8E8;
    }

    .box {
        width: 350px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        border-radius: 15px;
        border: 3px solid #191919;
    }

    .box h1 {
        color: black;
        text-transform: uppercase;
        font-weight: 500;
    }

    .box input[type="text"],
    .box input[type="password"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #EC0433;
        padding: 14px 10px;
        width: 260px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }

    .box input[type="text"]:focus,
    .box input[type="password"]:focus {
        width: 320px;
        border-color: #003b6e;
    }

    .box input[type="submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        margin-left: 5px;
        margin-right: 5px;
        border: 2px solid #EC0433;
        padding: 14px 40px;
        outline: none;
        color: #EC0433;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
        display: inline-block;
        width: 190px;
      
    }

    .box input[type="submit"]::placeholder {
        text-align: center;
        
    }

    .box input[type="submit"]:hover {
        background: #003b6e;
        color: #E8E8E8;
        border: 2px solid #E8E8E8;
    }
</style>

<head>
    <title>connexion</title>
    <meta charset="utf-8">
</head>

<body>

    <h1>bienvenu</h1>
    <?php include("code_header.htm"); ?>
    <table " border=" 0px">
        <tbody>
            <br>
            <br>

            <td> </td>
            </tr>
        </tbody>
    </table>
    <br>

    <form class='box' action='editionprofil.php' method='post'>
        <h1> votre compte </h1>
        <p><?php

            echo ("<p>prenom; " . $_SESSION["leprenom"] . "</p>");

            ?> </p>
        <p><?php

            echo ("<p>nom; " . $_SESSION["lenom"] . "</p>");

            ?> </p>
        <p><?php

            echo ("<p>mail;" . $_SESSION["lemail"] . "</p>");

            ?> </p>

        <input type="submit" name="" value="modifier les information">
    </form>
    <li><a href="achat.php" title="#">achat</a></li>
    </tbody>
    </table>

</body>

</html>










<!DOCTYPE html>
<html>

<head>

</head>

<body>


</body>

</html>
<?php
