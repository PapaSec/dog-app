<x-layouts.app :title="__('Dashboard')">
    <div class="w-full overflow-hidden mb-8">
        @livewire('hero-section')
    </div>

    <div>
        @livewire('dog-list')
    </div>
</x-layouts.app>