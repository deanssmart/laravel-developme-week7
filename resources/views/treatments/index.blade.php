@extends("app")

    @section("title")
        - Treatments
    @endsection

    @section("content")
        <h3 class = "container card-header mb-4">Treatments</h3>
        @include("treatments/_partials/list", ["treatments" => $treatments])
    @endsection