@extends("app")

    @section("title")
        - {{$treatment->name}}
    @endsection

    @section("content")
        <h3 class = "container card-header mb-4">Treatment</h3>
        <div class="container mb-4">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-3 bold">{{ $treatment->name }}</h5>
            </div>
            @if ($animals->isEmpty())
                <p class="container mb-1">No Pets Booked In</p>
            @else            
                <ul class="list-group">
                    @foreach ($animals as $animal)
                        <li class = "card mb-2">
                            <a href="/owners/{{ $animal->owner_id }}" class="border-0 list-group-item list-group-item-action">
                            <p class="mb-1">{{ $animal->name }}</p>
                            </a>
                        </li> 
                    @endforeach
                </ul>
            @endif

            @include("treatments/_partials/buttons", ["treatment" => $treatment])             
        </div>



        

    @endsection