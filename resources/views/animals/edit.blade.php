@extends("app")

    @section("title")
        - Edit
    @endsection
    
    @section("content")
        @include("_partials/petForm", ["heading" => "Edit"])
    @endsection