<x-layout>
    <div class="container" style="height:60vh">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-4 my-5 ">
                <h1 class="text-center"> login!</h1>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">we will never share your email whit
                            annyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" 
                        id="exampleInputPassword1">
                    </div>
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