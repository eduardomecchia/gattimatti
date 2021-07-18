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

        </header>

        <!-- Website content -->
        <main id="page-content">
            @yield("content")
        </main>

        <!-- Website footer -->
        <footer id="site-footer">
            
        </footer>
    </body>
</html>