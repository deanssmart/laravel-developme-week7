<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" href="/main.css"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <title>The Vets Practice</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    {{$welcomeMsg}}
                </div>
                <div class="links">
                    <a href="/owners">Owners</a>
                </div>
            </div>
        </div>
    </body>
</html>