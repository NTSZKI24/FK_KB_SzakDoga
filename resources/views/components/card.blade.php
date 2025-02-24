<div {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden']) }}>
    <img src="{{ $image }}" alt="" class="w-full h-48 object-cover">
    <div class="p-6">
        <h5 class="text-xl font-semibold text-gray-900 dark:text-gray-100">{{ $title }}</h5>
        <p class="text-gray-700 dark:text-gray-300">{{ $description }}</p>
        <p class="text-gray-700 dark:text-gray-300">{{ $date }} {{ $time }}</p>
        <p class="text-gray-700 dark:text-gray-300">{{ $place }}</p>
        <p class="text-gray-700 dark:text-gray-300">{{ $age }}</p>
    </div>
</div>