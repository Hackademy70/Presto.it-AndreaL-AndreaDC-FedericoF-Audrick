<x-layout>
    <x-landimage />
    <x-masthead />

   
    {{-- sezione card --}}
   <div class="container">
    <div class="row">
     <div class="col-12">
        <h1>presto.it</h1>
        <p class="h2 my-2 fw-bold">i nostri annunci</p>
        <div class="row">
            @foreach($announcements as $announcement)
            <x-card :announcement="$announcement"/>
            @endforeach
        </div>
     </div>
    </div>
   </div>
</x-layout>