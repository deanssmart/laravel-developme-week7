@extends("app")

    @section("title")
        - Owners
    @endsection

    @section("content")
        <h3 class = "container card-header mb-4">Owners</h3>
        @include("owners/_partials/list", ["owners" => $owners])
    @endsection


