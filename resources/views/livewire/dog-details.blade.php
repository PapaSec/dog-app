<div class="max-w-4xl mx-auto bg-white dark:bg-zinc-900 p-6 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">{{ $dog->name }}</h2>

    <img src="{{ $dog->image }}" alt="{{ $dog->name }}" class="w-full h-64 object-cover rounded mb-4">

    <p class="text-lg text-gray-700 dark:text-gray-300 mb-2"><strong>Breed:</strong> {{ $dog->breed }}</p>
    @if($dog->age)
        <p class="text-lg text-gray-700 dark:text-gray-300 mb-2"><strong>Age:</strong> {{ $dog->age }} years</p>
    @endif
    <p class="text-lg text-gray-700 dark:text-gray-300 mb-2"><strong>Price:</strong>
        R{{ number_format($dog->price, 2) }}
    </p>

    @if($dog->description)
        <p class="mt-4 text-gray-600 dark:text-gray-400">{{ $dog->description }}</p>
    @endif

    <button class="mt-6 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
        Add to Cart
    </button>
</div>