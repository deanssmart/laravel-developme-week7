@extends("app")

    @section("title")
        - Owners
    @endsection

    @section("content")
        <h3 class = "container card-header mb-4">Owners</h3>
        @include("_partials/list", ["array" => $owners])
    @endsection


