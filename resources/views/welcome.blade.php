<x-layout>
    <h1 class="bg-primary vh-100">Hello world</h1>
    <x-masthead />

   
    {{-- sezione card --}}
   <div class="container">
    <div class="row">
        @foreach($announcements as $announcement)
        <x-card :announcement="$announcement"/>
        @endforeach
    </div>
   </div>
</x-layout>