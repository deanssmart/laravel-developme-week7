@extends("app")

@section("content")
    <div class="list-group">
        @foreach (App\Owner::all() as $owner)
            @include("_partials/list-item", ["owner" => $owner])
        @endforeach
    </div>
@endsection

@section("title")
    <title>The Vets Practice</title>
@endsection
