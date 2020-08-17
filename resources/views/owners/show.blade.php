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
                        <div class="border-0 list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-3 bold">{{ $animal->name }}</h5>
                                                                                              
                                <p class="text-center mb-1"><span class="bold">Type: </span><br>{{ $animal->type }}</p>
                                <p class="text-center mb-1"><span class="bold">Age: </span><br>{{ $animal->age() }}</p>
                                <p class="text-center mb-1"><span class="bold">Weight: </span><br>{{ $animal->weight }}Kg</p>
                                <p class="text-center mb-1"><span class="bold">Height: </span><br>{{ $animal->height }}m</p>
                                @if ($animal->dangerous())
                                <p class="text-center mb-1 alert-danger rounded-lg px-2"><span class="bold">Biteyness: </span><br><span class="bold">{{ $animal->biteyness }}</span></p>
                                @else
                                <p class="text-center mb-1"><span class="bold">Biteyness: </span><br>{{ $animal->biteyness }}</p> 
                                @endif
                                <small>{{ $animal->updated_at->diffForHumans() }}</small>                                
                            </div>
                        </div>
                        @include("animals/buttons", ["animal" => $animal])
                    </li>
                @endforeach
            </ul>
        </div>

        @include("_partials/petForm", ["heading" => "Add a"])

        

    @endsection

