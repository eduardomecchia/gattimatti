<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield("title", "Gatti Matti")</title>
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    </head>

    <body>
        <!-- Website header -->
        <header id="site-header">
            <nav>
                <a href="/">Home</a>
                <a href="/prisk">Prisk</a>
                <a href="/zelda">Zelda</a>
            </nav>
        </header>

        <!-- Website content -->
        <main id="page-content">
            @yield("content")
        </main>

        <!-- Website footer -->
        <footer id="site-footer">
            <div>&copy; Eduardo Mecchia 2021</div>
        </footer>
    </body>
</html>