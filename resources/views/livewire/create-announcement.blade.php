<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-4">
            <h1>{{__('ui.createTitle')}}</h1>
            @if (session()->has('message'))
                <span class="btn btn-success container">{{ session('message') }}</span>
            @endif
            <form wire:submit.prevent="store">
                @csrf
                <div class="mb-3">
                    <label for="title">{{ __('ui.createTitleLabel') }}</label>
                    <input wire:model="title" type="text" class="form-control">
                    @error('title')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="images">{{ __('ui.createImageLabel') }}</label>
                    <input wire:model="temporary_images" type="file" name="images" multiple
                        class="form-control shadow 
                 @error('temporary_images.*') is-invalid @enderror"
                        placeholder="img" />
                    @error('temporary_images.*')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>
                @if (!empty($images))
                    <div class="row">
                        <div class="col-12">
                            <p>photo preview:</p>
                            <div class="row border border-4 border-info rounded shadow py-4">
                                @foreach ($images as $key => $image)
                                    <div class="col my-3">
                                        <div class="img-preview mx-auto shadow rounded"
                                            style="background-image: url({{ $image->temporaryUrl() }});"></div>
                                        <button type="button"
                                            class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                            wire:click="removeImage({{ $key }})">{{__('ui.createUndo')}}</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="body">{{__('ui.createDescription')}}</label>
                    <textarea wire:model="body" type="text" class="form-control"></textarea>
                    @error('body')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price">{{__('ui.createPrice')}}</label>
                    <input wire:model="price" type="number" class="form-control">
                    @error('price')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category">{{__('ui.createCategory')}}</label>
                    <select wire:model="category_id" class="form-control">
                        {{-- Dropdown Categories - Start --}}
                        @if (App::isLocale('it'))
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{!! Str::ucFirst($category->name) !!}</option>
                        @endforeach
                        @elseif (App::isLocale('es'))
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{!! Str::ucFirst($category->es) !!}</option>
                        @endforeach
                        @elseif (App::isLocale('en'))
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{!! Str::ucFirst($category->en) !!}</option>
                        @endforeach
                        @endif
                        {{-- Dropdown Categories - End --}}
                    </select>
                </div>
                <button class="btn btn-dark container" type="submit">{{__('ui.createSend')}}</button>
            </form>
        </div>
    </div>
</div>