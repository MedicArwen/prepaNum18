<?php
 if (!isset($_GET['page']))
 $titre="Accueil";
 else
 switch($_GET['page'])
 {
     case "especes":$titre="Espèces en danger";
     break;
     case "deforestation":$titre="Déforestation";
     break;
     case "appelauxdons":$titre="Appel aux dons";
     break;
     case "contacts":$titre="Nous contacter";
     break;
     case "environnement":$titre="Environnement";
     break;
     case "especeeteinte":$titre="Espèces éteintes";
     break;
     case "quellessolutions":$titre="Quelles solutions";
     break;
     case "trafic":$titre="Le braconnage";
     break;
     default:$titre="Accueil";
 }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Projet Via: <?php echo $titre;?></title>
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
        if (!isset($_GET['page']))
        include('accueil.php');
        else
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