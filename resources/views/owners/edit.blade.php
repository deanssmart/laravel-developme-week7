@extends("app")

    @section("title")
        - Edit
    @endsection
    
    @section("content")
        @include("_partials/form", ["heading" => "Edit"])
    @endsection