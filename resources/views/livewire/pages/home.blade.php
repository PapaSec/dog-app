<div>
    <!-- Hero Section -->
    @include('livewire.hero-section')

    <!-- Rest of your home page content -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
        <div class="bg-white dark:bg-zinc-900 rounded-xl p-6 shadow">
            <h2 class="text-xl font-bold mb-4">Featured Products</h2>
            <!-- Product cards here -->
        </div>

        <div class="bg-white dark:bg-zinc-900 rounded-xl p-6 shadow">
            <h2 class="text-xl font-bold mb-4">New Arrivals</h2>
            <!-- Product cards here -->
        </div>

        <div class="bg-white dark:bg-zinc-900 rounded-xl p-6 shadow">
            <h2 class="text-xl font-bold mb-4">Special Offers</h2>
            <!-- Product cards here -->
        </div>
    </div>
</div>