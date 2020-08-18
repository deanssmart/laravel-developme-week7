@extends("app")

    @section("title")
        - Matched Owners
    @endsection

    @section("content")
        <h3 class = "container card-header mb-4">Matched Owners</h3>
        @include("owners/list", ["owners" => $owners])
    @endsection
