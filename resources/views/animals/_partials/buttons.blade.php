<div class="card-footer text-right">
    <a href="/animals/edit/{{ $animal->id }}" class="btn btn-success">Edit</a>
    
    <form class="btn" action="/animals/delete/{{ $animal->id }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger" value="Delete">Delete</button>
    </form> 
</div>     