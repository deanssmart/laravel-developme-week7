@if ($owners->isEmpty())
    <p class="container mb-1">No Owners found</p>
@else
    <ul class="list-group">
        @foreach ($owners as $owner)
            <li>
                <a href="/owners/{{ $owner->id }}"" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-2 bold">{{ $owner->fullName() }}</h5>
                        <small>{{ $owner->created_at->diffForHumans() }}</small>
                    </div>
                    <p class="mb-1">more details...</p>
                </a>
            </li>
        @endforeach
    </ul>
@endif



