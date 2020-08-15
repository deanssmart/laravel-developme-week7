@extends("app")

    @section("title")
        - Matched Owners
    @endsection

    @section("content")
        <h3 class = "container card-header card">Matched Owners</h3>
        @include("_partials/list", ["owners" => $owners])
    @endsection
