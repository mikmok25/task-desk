@if (session('success') !== null)
    <p class="text-green-600 p-2 bg-gray-300 rounded mt-2">{{ session('success') }}</p>
@endif
