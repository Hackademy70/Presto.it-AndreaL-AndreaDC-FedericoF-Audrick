<x-layout>
    <x-landimage />
    <x-masthead />

   
    {{-- sezione card --}}
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-header">
              <h1 class="section-title">{{__('ui.allAnnouncements')}}</h1>
              <div class="section-divider"></div>
            </div>
            <div class="row">
              @foreach($announcements as $announcement)
              <x-card :announcement="$announcement"/>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      
</x-layout>