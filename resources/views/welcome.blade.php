<x-layout>
    <x-landimage />
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