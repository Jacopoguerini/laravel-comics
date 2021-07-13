<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>

        <header>
            <div class="container">
                <!-- logo -->
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset("img/dc-logo.png") }}" alt="DC Logo">
                    </a>
                </div>
                <!-- /logo -->
    
                <!-- nav -->
                <nav>
                    <ul class="list-inline">
                        <li>
                            <a href="#">Characters</a>
                        </li>
                        <li>
                            <a href="#" class="active">Comics</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                        <li>
                            <a href="#">Games</a>
                        </li>
                        <li>
                            <a href="#">Collectibles</a>
                        </li>
                        <li>
                            <a href="#">Videos</a>
                        </li>
                        <li>
                            <a href="#">Fans</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li>
                            <input type="text" placeholder="SEARCH">
                        </li>
                    </ul>
                </nav>
                <!-- /nav -->
            </div>
        </header>

    </body>
</html>
