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
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-3 bold">{{ $animal->name }}</h5>
                        <small>{{ $animal->updated_at->diffForHumans() }}</small>
                    </div>
                    <p class="mb-1"><span class="bold">Type:</span class="bold"> {{ $animal->type }}</p>
                    <p class="mb-1"><span class="bold">D.O.B:</span class="bold"> {{ date('d-m-Y', strtotime($animal->dob)) }}</p>
                    <p class="mb-1"><span class="bold">Weight:</span class="bold"> {{ $animal->weight }}Kg</p>
                    <p class="mb-1"><span class="bold">Height:</span class="bold"> {{ $animal->height }}m</p>
                    <p class="mb-1"><span class="bold">Biteyness:</span class="bold"> {{ $animal->biteyness }}</p>     
                @endforeach
            </ul>
        </div>

        

    @endsection

