<x-layouts.app :title="__('Home')">
    <x-slot name="heroSlot">
        @livewire('hero-section')
    </x-slot>
    <!-- Add other home page content here if needed, it will appear inside the constrained main -->
</x-layouts.app>