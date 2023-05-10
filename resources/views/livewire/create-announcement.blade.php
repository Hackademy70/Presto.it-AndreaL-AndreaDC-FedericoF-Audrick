<div>
   <h1>crea il tuo annuncio!</h1>
   @if (session()->has('message'))
   <div>
       {{session('message')}}
   </div>
   @endif
   <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
        <label for="title">Titolo annuncio</label>
        <input wire:model="title" type="text" class="form-control">
        @error('title') <span class="error text-danger">{{$message}}</span>
            
        @enderror
    </div>
    <div class="mb-3">
        <label for="body">descrizione</label>
        <textarea wire:model="body" type="text" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="price">prezzo</label>
        <input wire:model="price" type="number" class="form-control">
    </div>
    <button type="submit">manda</button>
   </form>

</div>
