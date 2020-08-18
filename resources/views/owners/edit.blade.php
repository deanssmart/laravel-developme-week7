@extends("app")

    @section("title")
        - Edit
    @endsection
    
    @section("content")
        @include("owners/_partials/form", ["heading" => "Edit"])
    @endsection