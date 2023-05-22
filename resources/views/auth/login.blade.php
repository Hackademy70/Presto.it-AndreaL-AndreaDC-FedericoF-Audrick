<x-layout>
    <div class="container" style="min-height:50vh">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-4 my-5 ">
                <h1 class="text-center"> login!</h1>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control">
                        <div class="form-text">we will never share your email whit
                            annyone else.
                        </div>
                        @error('email')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    @error('password')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-3 form-check">
                        <input name="rember" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label for="exampleCheck1" class="form-check-label">Ricordati di me</label>  
                    </div>
                    <button type="submit" class="btn btn-dark my-2 container">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>