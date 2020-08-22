@if ($treatments->isEmpty())
    <p class="container mb-1">No Treatments found</p>
    @else    
    <ul class="list-group">
        @foreach ($treatments as $treatment)
            <li class = "card mb-2">
                <a href="/treatments/{{ $treatment->id }}" class="border-0 list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-2 bold">{{ $treatment->name }}</h5>
                    </div>
                    <p class="mb-1">click for pets booked in for treatment</p>
                </a>
                @include("treatments/_partials/buttons", ["treatment" => $treatment])           
            </li>
        @endforeach
    </ul>
@endif
