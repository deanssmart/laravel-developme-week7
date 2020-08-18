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
            @include("owners/_partials/buttons", ["owner" => $owner])             
        </div>
 
        <h3 class = "container card-header mb-4">Pets</h3>
        <div class="container mb-4">
            @include("animals/_partials/list", ["animals" => $animals])
        </div>

        @include("animals/_partials/createForm", ["heading" => "Add a"])

        

    @endsection

