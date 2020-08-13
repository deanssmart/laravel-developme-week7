@extends("app")

@section("content")
    <div class="list-group">
    @if ($owners->isEmpty())
        <p class="mb-1">No Owners found</p>
    @else
        @foreach ($owners as $owner)
            @include("_partials/list-item", ["owner" => $owner])
        @endforeach
    @endif
    </div>
@endsection

@section("title")
    <title>The Vets Practice</title>
@endsection
