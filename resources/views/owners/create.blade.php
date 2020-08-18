@extends("app")

    @section("title")
        - Create
    @endsection

    @section("content")
        @include("owners/_partials/form", ["heading" => "Create"])
    @endsection