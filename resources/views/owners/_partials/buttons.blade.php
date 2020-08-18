<div class="card-footer text-right">
    <a href="/owners/edit/{{ $owner->id }}" class="btn btn-success">Edit</a>
    <form class="btn" action="/owners/delete/{{ $owner->id }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger" value="Delete">Delete</button>
    </form> 
</div>     