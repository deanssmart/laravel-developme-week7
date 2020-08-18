<header>
    <nav class="mt-4 navbar navbar-light bg-light bold">
        <a class="navbar-brand colour" href="/">
            <h2 class = "bold">The Vet Practice</h2>
            @if (Auth::check()) 
            <p class="small">Logged in as {{ Auth::user()->name }}<p>
            @endif
        </a>
     
        <div class="links">
            <a href="/home">Home</a>
            <a href="/owners/index">Owners</a>
            <a href="/owners/create">New Owner</a>
        </div>   
        
        <form action="/owners/search" class="form-inline" method="get">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        
        @if (Auth::check()) 
        <form action="{{ route('logout') }}" class="form-inline" method="post">
            @csrf 
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Logout</button>
        </form>    
        @else
            <a class="btn btn-primary my-2 my-sm-0" href="{{ route('login') }}">Login</a>      
        @endif           
    </nav>
</header>