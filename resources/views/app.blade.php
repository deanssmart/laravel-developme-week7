<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <meta charset="utf-8" />
    @yield("title")
  </head>
  <body>
    <div class="container">
        @include("_partials/nav")
        
        <main class="mt-4">
            @yield("content")
        </main>

        @include("_partials/footer")
    </div>
  </body>
</html>