<div>
   <h1>crea il tuo annuncio!</h1>
   <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
        <label for="title">Titolo annuncio</label>
        <input wire:model="title" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="body">descrizione</label>
        <textarea wire:model="body" type="text" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="price">prezzo</label>
        <input wire:model="price" type="number" class="form-control">
    </div>
    
   </form>

</div>
