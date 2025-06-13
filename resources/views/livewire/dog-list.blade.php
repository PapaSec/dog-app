<div class="py-16 bg-gray-100 dark:bg-zinc-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-10">Available Dogs</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($dogs as $dog)
                <a href="{{ route('dogs.details', $dog) }}" class="block">
                    <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="{{ $dog['image'] }}" alt="{{ $dog['name'] }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $dog['name'] }}</h3>
                            <p class="text-gray-600 dark:text-gray-300">{{ $dog['breed'] }}</p>
                            <p class="mt-2 font-bold text-blue-500">R{{ number_format($dog['price'], 2) }}</p>
                            <div
                                class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded text-center">
                                View Details
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>