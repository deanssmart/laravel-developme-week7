    <form class="form card" method="post">
      @csrf     {{--  Cross-Site Request Forgery  --}}
        <h2 class="card-header">{{ $heading }} Pet</h2>

        <fieldset class="card-body">
            <div class="form-group">
                <label for="name">Pet Name</label>
                <input 
                    class="form-control @error('name') is-invalid @enderror"
                    id="name" 
                    name="name"                    
                    value="{{ old('name') }}"/>

                @error('name')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input 
                    class="form-control @error('type') is-invalid @enderror"
                    id="type"
                    name="type"                    
                    value="{{ old('type') }}"/>

                @error('type')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>

            <div class="form-group">
                <label for="dob">D.O.B</label>
                <input 
                    type="date"                    
                    class="form-control @error('dob') is-invalid @enderror"
                    id="dob"
                    name="dob"                    
                    value="{{ old('dob') }}"/>

                @error('dob')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>

            <div class="form-group">
                <label for="weight">Weight <small>(kg)</small></label>
                <input 
                    type="number"
                    min="0"
                    step="0.01"
                    class="form-control @error('weight') is-invalid @enderror" 
                    id="weight" 
                    name="weight"                     
                    value="{{ old('weight') }}"/>

                @error('weight')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>            

            <div class="form-group">
                <label for="height">Height <small>(m)</small></label>
                <input
                    type="number"
                    min="0"
                    step="0.01"
                    class="form-control @error('height') is-invalid @enderror"
                    id="height"
                    name="height"
                    value="{{ old('height') }}"/>

                @error('height')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror                  
            </div>   

            <div class="form-group">
                <label for="biteyness">Biteyness</label>
                <select class="form-control @error('biteyness') is-invalid @enderror"
                id="biteyness"
                name="biteyness"/>

                @error('biteyness')
                    <p class="invalid-feedback">
                        {{ $message }}
                    </p>
                @enderror  
                <option value="0" {{ old('biteyness') == 0 ? 'selected' : '' }}>0</option>
                <option value="1" {{ old('biteyness') == 1 ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('biteyness') == 2 ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('biteyness') == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('biteyness') == 4 ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('biteyness') == 5 ? 'selected' : '' }}>5</option>
                </select>
            </div>   

            <div class="form-group">
                <label for="treatments">Treatments <small>(separate each treatment with a comma)</small></label>
                <input 
                    class="form-control @error('treatments') is-invalid @enderror"
                    id="treatments" 
                    name="treatments"                    
                    value="{{ old('treatments') }}"/>

                @error('name')
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