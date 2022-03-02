<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Projet Via</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap');
        </style>
        
</head>

<body>
<?php
include('header.php')
?>

    <div id="general">
        <?php include('nav.php');?>
        <div id="main">
    
        <?php 
        switch($_GET['page'])
        {
            case "especes":include('especes.php');
            break;
            case "deforestation":include('deforestation.php');
            break;
            case "appelauxdons":include('appelauxdons.php');
            break;
            case "contacts":include('contacts.php');
            break;
            case "environnement":include('environnement.php');
            break;
            case "especeeteinte":include('especeeteinte.php');
            break;
            case "especes":include('espece.php');
            break;
            case "quellessolutions":include('quellessolutions.php');
            break;
            case "trafic":include('trafic.php');
            break;
            default:include('accueil.php');
        }
        ?>
        </div>
    </div>
</body>

</html>