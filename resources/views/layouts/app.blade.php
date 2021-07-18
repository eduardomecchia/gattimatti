<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield("title", "Gatti Matti")</title>
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>

    <body>
        <!-- Website header -->
        <header id="site-header">
            <nav>
                <div class="container">
                    <a href="/">Home</a>
                    <a href="/prisk">Prisk</a>
                    <a href="/zelda">Zelda</a>
                </div>
            </nav>
        </header>

        <!-- Website content -->
        <main id="page-content">
            @yield("content")
        </main>

        <!-- Website footer -->
        <footer id="site-footer">
            <div class="container">
                <div>Gatti Matti &copy; 2021 Eduardo Mecchia</div>
            </div>
        </footer>
    </body>
</html>