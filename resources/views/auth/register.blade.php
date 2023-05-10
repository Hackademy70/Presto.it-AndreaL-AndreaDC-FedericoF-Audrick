<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"> registrati!</h1>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">nome completo</label>
                        <input name="name" type="text" class="form-control" id="name"
                        aria-describedby="name">
                    </div>
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
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>