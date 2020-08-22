<div class="card-footer text-right">
    <form class="btn" action="/treatments/delete/{{ $treatment->id }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger" value="Delete">Delete</button>
    </form> 
</div>     