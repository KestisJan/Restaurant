<x-layout>
    <div class="container">
        <div class="row justify-content-center py-5">
            <form method="POST" action="/users/authenticate" class="col-12 col-md-6">
                @csrf
                
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"/>
                </div>
    
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password"/>
                </div>
    
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Sign In 
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>