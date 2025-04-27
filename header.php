<?php include('function.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My | Website</title>

        <link rel="stylesheet" href="assets/css/theme.css">
        <link rel="stylesheet" href="assets/css/boostrap.css">
    </head>

    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="">
                        <img src="admin/assets/image/<?php echo getlogo() ?>" style="width: 200px;height: 80px;">
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="news.php">News</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
                <div class="search">
                    <form action="" method="get">
                        <input type="text" name="query" placeholder="Find Content Here">
                        <button>
                            <img src="assets/icons/search.svg" alt="">
                        </button>
                    </form>
                </div>
            </div>
        </header>
        <main>