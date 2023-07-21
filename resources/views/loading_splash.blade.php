<x-app-layout>

    <div class="container mx-auto p-4">
        <div x-data="{ isLoading: false }">
            <!-- Loading Splash -->
            <div x-show="isLoading" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white p-6 rounded-lg">
                    <div class="animate-spin rounded-full border-t-4 border-blue-500 border-solid h-12 w-12 mb-4"></div>
                    <p class="text-gray-900 font-semibold">Loading...</p>
                </div>
            </div>

            <!-- Button to Trigger Loading Splash -->
            <button @click="isLoading = true" class="bg-blue-500 text-white px-4 py-2 rounded">Click Me</button>
        </div>
    </div>
</x-app-layout>
