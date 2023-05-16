<x-layout>
    <div class="container" style="min-height:75vh">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-4 my-3 ">
                <h1 class="text-center text-success"> registrati!</h1>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome completo</label>
                        <input name="name" type="text" class="form-control" id="name"
                        aria-describedby="name">
                        @error('name')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email"  type="email" pattern="[\w\d]{3,30}@[\w\d]{2,7}.[\w]{2,5}" class="form-control">
                        <div class="form-text">Non condivideremo con nessuno la tua email.</div>
                        @error('email')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input name="password" title="non rispetta tutti i parametri" pattern="[A-z\d]{7,20}[@#$?!]{1,20}" type="password" class="form-control">
                        <label for="password" class="form-label">La password deve soddisfare i seguenti requisiti:</label>
                        <ul>
                            <li>Almeno 8 caratteri</li>
                            <li>Almeno 1 carattere speciale tra i seguenti: "@,#,$,?,!"</li>
                            <li>Almeno 1 numero</li>
                        </ul>
                        @error('password')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">conferma password</label>
                        <input name="password_confirmation" type="password" class="form-control">
                        @error('password_confirmation')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark container">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>