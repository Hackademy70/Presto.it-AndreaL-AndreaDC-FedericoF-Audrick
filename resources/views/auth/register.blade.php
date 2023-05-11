<x-layout>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-4 my-3 ">
                <h1 class="text-center text-success"> registrati!</h1>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome completo</label>
                        <input name="name" type="text" class="form-control" id="name"
                        aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">email address</label>
                        <input name="email"  tyoe="email" pattern="[\w\d]{3,30}@[\w\d]{2,7}.[\w]{2,5}" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">we will never share your email whit
                            annyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">password</label>
                        <input name="password" title="non rispetta tutti i parametri" pattern="[A-z\d]{7,20}[@#$?!]{1,20}" type="password" class="form-control" id="exampleInputPassword1">
                        
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">conferma password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-dark container">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>