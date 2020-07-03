<!DOCTYPE html>

<html>
    <meta charset="utf-8">
<head>
<title>mini-site-routing</title>
</head>
<body>
    <header>
<nav>
    <a href="Accueil.php">Accueil</a>
    <a href="Page1.php">Page1</a>
    <a href="Page2.php">Page2</a>
</nav>
     </header>
     <h1>
        <?php
        if($_GET['page'] == 1){
        $title = 'Accueil !';
        }
        elseif($_GET['page'] == 2){
        $title = 'Page 2 !';
        }
        elseif($_GET['page'] == 3){
        $title = 'Page 3 !';
        }
    echo '<title>' . $title . '</title>' ;

        ?>
    </h1>
</body>
</html>