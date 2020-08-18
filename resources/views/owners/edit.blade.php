@extends("app")

    @section("title")
        - Edit
    @endsection
    
    @section("content")
        @include("owners/form", ["heading" => "Edit"])
    @endsection