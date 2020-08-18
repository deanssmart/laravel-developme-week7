<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="stylesheet" href="/main.css"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <title>The Vet Practice</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                {{$welcomeMsg}}<br>Welcome to The Vet Practice
                </div>
                <div class="links">
                    <a href="/owners/index">Owners</a>
                    {{-- <a href="/owners/create">New Owner</a> --}}
                    @if (Auth::check())   
                        <a href="#"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                        </a>

                        <form id="logout-form"
                              action="{{ route('logout') }}"
                              method="POST"
                              style="display: none;">
                              @csrf
                        </form> 
                    @else
                    <a href="/login">Login</a>
                    @endif                                           
                </div>
            </div>
        </div>
    </body>
</html>