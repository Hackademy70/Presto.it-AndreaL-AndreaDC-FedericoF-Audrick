<x-layout>
    <div class="container" style="min-height:50vh">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-4 my-5 ">
                <h1 class="text-center">{{__('ui.loginTitle')}}</h1>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">{{__('ui.loginEmailLabel')}}</label>
                        <input name="email" type="email" class="form-control">
                        <div class="form-text">{{__('ui.loginSecure')}}</div>
                        @error('email')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{__('ui.loginPassLabel')}}</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    @error('password')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                    {{-- TASTO RICORDATI DI ME -> NON FUNZIONANTE --}}
                    {{-- <div class="mb-3 form-check">
                        <input name="rember" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label for="exampleCheck1" class="form-check-label">Ricordati di me</label>  
                    </div> --}}
                    {{-- TASTO RICORDATI DI ME -> NON FUNZIONANTE --}}
                    <button type="submit" class="btn btn-dark my-2 container">{{__('ui.loginButton')}}</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>