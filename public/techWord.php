<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Technical Words</title>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/image.css">
</head>
<body>
<ul class="menu cf">
    <li><a href="index.php">Ana Sayfa</a></li>
    <li>
        <a>VERB</a>
        <ul class="submenu">
            <li><a href="php/rnd_regular_verb.php">Regular verbs</a></li>
            <li><a href="php/rnd_irregular_verb.php">İrregular verbs</a></li>
            <li><a href="append/verbAdd.php">Add Verb</a></li>

        </ul>
    </li>

    <li>
        <a>Technical</a>
        <ul class="submenu">
            <li><a href="php/rnd_tech_word.php">Words</a></li>
            <li><a href="techSentences.php">Sentences</a></li>
            <li><a href="techParagraph.php">Paragraph</a></li>
        </ul>
    </li>

    <li>
        <a>Every Day</a>
        <ul class="submenu">
            <li><a href="everyWord.php">Words</a></li>
            <li><a href="everySentences.php">Sentences</a></li>
            <li><a href="everyDialogue.php">Dialogue</a></li>
            <li><a href="everyParagraph.php">Paragraph</a></li>
        </ul>
    </li>
    <li>
        <a href="">Game</a>
    </li>
</ul>

<div id="container">
    <table id="table">
        <tr>
            <td id="tanım">Word :</td>
            <td id="tanım5"><?php echo $_SESSION['tech_word'];?></td>
            <td rowspan="2" id="tanım3">
                <form action="php/rnd_tech_word.php" method="post" enctype="multipart/form-data">
                    <input type="submit" name="gonder" id="refresh" value="">
                </form>
            </td>
            <td rowspan="2" id="tanım4">
                <a href="append/techWordAdd.php">
                    <img src="image/add.png">
                </a>
            </td>
        </tr>
        <tr>
            <td id="tanım">Translate :</td>
            <td id="tanım5"><?php echo $_SESSION['tech_translate'];?></td>

        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım8">Example :</td>
            <td id="tanım7"><?php echo $_SESSION['tech_ex1'];?></td>
        </tr>
        <tr>
            <td id="tanım8">Example Translate :</td>
            <td id="tanım7"><?php echo $_SESSION['tech_ex1t'];?></td>
        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım8">Example :</td>
            <td id="tanım7"><?php echo $_SESSION['tech_ex2'];?></td>
        </tr>
        <tr>
            <td id="tanım8">Example Translate :</td>
            <td id="tanım7"><?php echo $_SESSION['tech_ex2t'];?></td>
        </tr>
    </table>
</div>
</body>
</html>
