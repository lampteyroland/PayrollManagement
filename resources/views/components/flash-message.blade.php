@if(session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1500)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-10 py-4 rounded-md shadow-lg">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('message') }}</span>
        </div>
    </div>
@endif

