<a href="/" {{ $owner->id }} class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $owner->fullName() }}</h5>
        <small>{{ $owner->created_at->diffForHumans() }}</small>
    </div>
    <p class="mb-1">{!! nl2br($owner->fullAddress()) !!}</p>
    <p class="mb-1">{{ $owner->formattedPhoneNumber() }}</p>
    <p class="mb-1">{{ $owner->email }}</p>
</a>