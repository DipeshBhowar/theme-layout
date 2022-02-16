<?php
$nav_data = array();
$nav_data[] = array('pageName' => 'home', 'pagePath' => '/home.php');
$nav_data[] = array('pageName' => 'services', 'pagePath' => '/service.php');
$nav_data[] = array('pageName' => 'news', 'pagePath' => '/news.php');
$nav_data[] = array('pageName' => 'about', 'pagePath' => '/about.php');

$foot_data = array('footInfo' => 'Copyright &#9400; @dipeshBhowar 2019-2022', 'contact' => 'HouseNo Complex Street Area MH India');

function navTemp($nav_layout, $nav_array)
{
    include("temp/nav-temp/{$nav_layout}.php");
}

function footTemp()
{
}

if (isset($_GET['page-theme']) && isset($_GET['nav-layout'])) {
    $theme = $_GET['page-theme'];
    $nav_temp = $_GET['nav-layout'];
} else {
    $theme = 'theme-q';
    $nav_temp = 'nav-center';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="theme/<?= $theme; ?>.css">
</head>

<body>
    <header>
        <nav>
            <?php
            navTemp($nav_temp, $nav_data);
            ?>
        </nav>
    </header>

    <div style="color: red;">
        <?php
        if (isset($_GET['page-theme']) && isset($_GET['nav-layout'])) {
            echo ' applied theme ' . $_GET['page-theme'];
            echo ' applied nav_template ' . $_GET['nav-layout'];
        }
        ?>
    </div>

    <form action="index.php" method="get">
        <div style="display: flex;">
            <div class="theme" style="">
                <div>
                    <label for="theme-q">theme-q</label>
                    <input type="radio" name="page-theme" id="theme-q" value="theme-q" required>
                </div>
                <div>
                    <label for="theme-r">theme-r</label>
                    <input type="radio" name="page-theme" id="theme-r" value="theme-r" required>
                </div>
                <div>
                    <label for="theme-s">theme-s</label>
                    <input type="radio" name="page-theme" id="theme-s" value="theme-s" required>
                </div>
            </div>

            <div class="nav-temp">
                <div>
                    <label for="nav-center">nav-center</label>
                    <input type="radio" name="nav-layout" id="nav-center" value="nav-center" required>
                </div>
                <div>
                    <label for="nav-column">nav-column</label>
                    <input type="radio" name="nav-layout" id="nav-column" value="nav-column" required>
                </div>
                <div>
                    <label for="nav-end">nav-end</label>
                    <input type="radio" name="nav-layout" id="nav-end" value="nav-end" required>
                </div>
                <div>
                    <label for="nav-start">nav-start</label>
                    <input type="radio" name="nav-layout" id="nav-start" value="nav-start" required>
                </div>
            </div>
        </div>
        <button type="submit">Load</button>
    </form>

    <footer>
        <?php
        include("temp/foot-temp/temp-1.php");
        ?>
    </footer>
</body>

</html>