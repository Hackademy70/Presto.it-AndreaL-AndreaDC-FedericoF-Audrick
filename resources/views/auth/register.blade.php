<x-layout>
    <div class="container" style="min-height:55vh">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-4 my-3 ">
                <h1 class="text-center text-success">{{__('ui.registerTitle')}}</h1>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('ui.registerNameLabel')}}</label>
                        <input name="name" type="text" placeholder="{{__('ui.registerNamePlaceholder')}}" class="form-control" id="name"
                        aria-describedby="name">
                        @error('name')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{__('ui.registerEmailLabel')}}</label>
                        <input name="email" placeholder="{{__('ui.registerEmailPlaceholder')}}" type="email" pattern="[\w\d]{3,30}@[\w\d]{2,7}.[\w]{2,5}" class="form-control" placeholder="">
                        <div class="form-text">{{__('ui.registerSecure')}}</div>
                        @error('email')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{__('ui.registerPassLabel')}}</label>
                        <input name="password" placeholder="{{__('ui.registerPassPlaceholder')}}" title="non rispetta tutti i parametri" pattern="[A-z\d]{7,20}[@#$?!]{1,20}" type="password" class="form-control">
                        <label for="password" class="form-label">{{__('ui.registerPassInfo')}}</label>
                        <ul>
                            <li>{{__('ui.registerFirstInfo')}}</li>
                            <li>{{__('ui.registerSecondInfo')}} "@,#,$,?,!"</li>
                            <li>{{__('ui.registerThirdInfo')}}</li>
                        </ul>
                        @error('password')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{__('ui.registerPassConfLabel')}}</label>
                        <input name="password_confirmation" type="password" class="form-control">
                        @error('password_confirmation')
                        <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark container">{{__('ui.registerButton')}}</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>