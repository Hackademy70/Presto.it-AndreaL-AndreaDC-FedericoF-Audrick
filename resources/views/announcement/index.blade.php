<x-layout>
    {{-- sezione card --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h1 class="section-title">{{__('ui.searchTitle')}}</h1>
                    <div class="section-divider"></div>
                </div>
                <div class="row">
                    @forelse ($announcements as $announcement)
                        <x-card :announcement="$announcement" />
                    @empty
                        <h3>{{__('ui.searchNotFound')}}</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layout>