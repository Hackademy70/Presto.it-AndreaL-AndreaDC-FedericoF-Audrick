<x-layout>

    <h1>ecco gli annunci</h1>
    {{-- sezione card --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header">
                    <h1 class="section-title">I Nostri Annunci</h1>
                    <div class="section-divider"></div>
                </div>
                <div class="row">
                    @forelse ($announcements as $announcement)
                        <x-card :announcement="$announcement" />
                    @empty
                        <h3>non ci sono annunci che corrispondono</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-layout>