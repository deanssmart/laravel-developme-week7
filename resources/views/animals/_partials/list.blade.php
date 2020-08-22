@if ($animals->isEmpty())
    <p class="container mb-1">No Pets</p>
@else
            <ul class="list-group">
                @foreach ($animals as $animal)
                    <li class = "card mb-2">
                        <div class="border-0 list-group-item">
                        <h5 class="mb-4 bold">{{ $animal->name }}</h5>
                            <div class="d-flex w-100 justify-content-between container">
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

                            <div class="mt-4 container">
                                <h6 class="mb-2 bold">Treatments: </h6>
                                @if ($animal->treatments()->get()->isEmpty())
                                    <p class="container mb-1">No Treatments</p>
                                @else
                                    <ul class="list-group">
                                        @foreach ($animal->treatments()->get() as $treatment)
                                            <li class="card mb-2">
                                                <a href="/treatments/{{ $treatment->id }}" class="border-0 list-group-item list-group-item-action">
                                                    <p class="mb-1">{{ $treatment->name }}</p>
                                                </a>
                                            </li> 
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                        @include("animals/_partials/buttons", ["animal" => $animal])
                    </li>
                @endforeach
            </ul>
@endif



