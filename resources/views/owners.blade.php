@extends("app")

    @section("title")
        - Owners
    @endsection

    @section("content")
        <h3 class = "container bold mb-4">Owners</h3>
        @include("_partials/list", ["owners" => $owners])
    @endsection


