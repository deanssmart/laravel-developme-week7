@extends("app")

    @section("title")
        - Owners
    @endsection

    @section("content")
        <h3 class = "container bold mb-4">Owners</h3>
        @if ($owners->isEmpty())
            <p class="container mb-1">No Owners found</p>
        @else
            @include("_partials/list", ["owners" => $owners])
        @endif

    @endsection


