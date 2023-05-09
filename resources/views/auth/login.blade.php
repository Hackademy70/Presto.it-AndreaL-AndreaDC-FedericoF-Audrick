<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"> login!</h1>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">email address</label>
                        <input name="email" type="email" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">we ll never share your email whit
                            annyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">password</label>
                        <input name="password" type="password" class="form-control" 
                        id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input name="rember" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label for="exampleCheck1" class="form-check-label">ricordati di me</label>
                        
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>