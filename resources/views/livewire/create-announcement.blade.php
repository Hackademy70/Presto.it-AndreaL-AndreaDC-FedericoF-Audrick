<div class="container">

    <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-4">
            <h1>Crea il tuo annuncio!</h1>
            @if (session()->has('message'))
                <span class="btn btn-success container">{{ session('message') }}</span>
            @endif
            <form wire:submit.prevent="store">
                @csrf
                <div class="mb-3">
                    <label for="title">Titolo annuncio</label>
                    <input wire:model="title" type="text" class="form-control">
                    @error('title')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- <div class="mb-3">
                    <input type="file" wire:model="photo">
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                </div> --}}
                <div class="mb-3">
                    <label for="body">descrizione</label>
                    <textarea wire:model="body" type="text" class="form-control"></textarea>
                    @error('body')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price">prezzo</label>
                    <input wire:model="price" type="number" class="form-control">
                    @error('price')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category">categorie</label>
                    <select wire:model="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    {{-- @error('category')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror --}}
                </div>
                <button class="btn btn-dark container" type="submit">manda</button>
            </form>

        </div>

    </div>
</div>
