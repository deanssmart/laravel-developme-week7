@extends("app")

    @section("title")
        - Create
    @endsection

    @section("content")
        @include("owners/form", ["heading" => "Create"])
    @endsection