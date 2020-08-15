@extends("app")

    @section("title")
        - {{$owner->fullName()}}
    @endsection

    @section("content")
        <div class="container">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-3 bold">{{ $owner->fullName() }}</h5>
                <small>{{ $owner->updated_at->diffForHumans() }}</small>
            </div>
            <p class="mb-1">{!! nl2br($owner->fullAddress()) !!}</p>
            <p class="mb-1">{{ $owner->formattedPhoneNumber() }}</p>
            <p class="mb-1">{{ $owner->email }}</p>
           
        </div>
        @include("_partials/buttons", ["owner" => $owner])    

    @endsection

