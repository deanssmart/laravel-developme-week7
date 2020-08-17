@extends("app")

    @section("title")
        - {{$owner->fullName()}}
    @endsection

    @section("content")
        <h3 class = "container card-header mb-4">Owner</h3>
        <div class="container mb-4">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-3 bold">{{ $owner->fullName() }}</h5>
                <small>{{ $owner->updated_at->diffForHumans() }}</small>
            </div>
            <p class="mb-1">{!! nl2br($owner->fullAddress()) !!}</p>
            <p class="mb-1">{{ $owner->formattedPhoneNumber() }}</p>
            <p class="mb-1">{{ $owner->email }}</p>
            @include("_partials/buttons", ["owner" => $owner])             
        </div>
 
        <h3 class = "container card-header mb-4">Pets</h3>
        <div class="container mb-4">
            <ul class="list-group">
                @foreach ($animals as $animal)
                    <li class = "card mb-2">
                        <a href="#" class="border-0 list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-3 bold">{{ $animal->name }}</h5>
                                <small>{{ $animal->updated_at->diffForHumans() }}</small>
                            </div>
                            <p class="mb-1">more details...</p>
                        </a>
                        @include("_partials/buttons", ["owner" => $owner])
                    </li>
                @endforeach
            </ul>
        </div>

        @include("_partials/petForm", ["heading" => "Add a"])

        

    @endsection

