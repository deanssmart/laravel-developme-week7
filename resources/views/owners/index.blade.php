@extends("app")

    @section("title")
        - Owners
    @endsection

    @section("content")
        <h3 class = "container card-header card">Owners</h3>
        @include("_partials/list", ["owners" => $owners])
    @endsection


