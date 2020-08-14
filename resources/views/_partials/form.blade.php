    <form class="form card" method="post">
      @csrf     {{--  Cross-Site Request Forgery  --}}
        <h2 class="card-header">Edit Owner</h2>

        <fieldset class="card-body">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input 
                    class="form-control @error('first_name') is-invalid @enderror"
                    id="first_name" 
                    name="first_name"                    
                    value="{{ old('first_name') ?? ($owner->first_name ?? '') }}"/>

                @error('first_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input 
                    class="form-control @error('last_name') is-invalid @enderror"
                    id="last_name"
                    name="last_name"                    
                    value="{{ old('last_name') ?? ($owner->last_name ?? '') }}"/>

                @error('last_name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>

            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input 
                    class="form-control @error('telephone') is-invalid @enderror"
                    id="telephone"
                    name="telephone"                    
                    value="{{ old('telephone') ?? ($owner->telephone ?? '') }}"/>

                @error('telephone')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    class="form-control @error('email') is-invalid @enderror" 
                    id="email" 
                    name="email"                     
                    value="{{ old('email') ?? ($owner->email ?? '') }}"/>

                @error('email')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>            

            <div class="form-group">
                <label for="address_1">Address Line 1</label>
                <input
                    class="form-control @error('address_1') is-invalid @enderror"
                    id="address_1"
                    name="address_1"
                    value="{{ old('address_1') ?? ($owner->address_1 ?? '') }}"/>

                @error('address_1')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>   
            
            <div class="form-group">
                <label for="address_2">Address Line 2</label>
                <input 
                    class="form-control @error('address_2') is-invalid @enderror"
                    id="address_2"
                    name="address_2"
                    value="{{ old('address_2') ?? ($owner->address_2 ?? '') }}"/>

                @error('address_2')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>                               

            <div class="form-group">
                <label for="town">Town</label>
                <input 
                    class="form-control @error('town') is-invalid @enderror"
                    id="town"
                    name="town"
                    value="{{ old('town') ?? ($owner->town ?? '') }}"/>

                @error('town')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>            

            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input 
                    class="form-control @error('postcode') is-invalid @enderror"
                    id="postcode"
                    name="postcode"                     
                    value="{{ old('postcode') ?? ($owner->postcode ?? '') }}"/>

                @error('postcode')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>            
        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Save</button>
        </div>
    </form>   