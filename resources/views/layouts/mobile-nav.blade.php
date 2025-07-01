<div x-data="{ open: false }" class="md:relative">
    <!-- Hamburger Button (Mobile Only) -->

    <div class="md:hidden flex items-center justify-between p-4 ">
        <div class="text-custom-slate-700 font-semibold">
            Ongoing – Development Level
        </div>
        <button @click="open = true">
            <iconify-icon icon="mdi:menu" class="text-custom-slate-700" width="28"></iconify-icon>
        </button>
    </div>


    <!-- Mobile Sidebar (Hidden by default) -->
    <div x-show="open" x-transition:enter="transition transform duration-300"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition transform duration-200" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="fixed inset-y-0 left-0 w-64 z-50 background-white shadow-lg p-4 md:hidden"
        @click.outside="open = false">
        <!-- Close Button -->
        <button @click="open = false" class="mb-4">
            <iconify-icon icon="mdi:close" class="text-custom-slate-700" width="24"></iconify-icon>
        </button>

        <!-- Your Sidebar Content (Copied from your existing) -->
        @include('layouts.navigation')
    </div>

    <!-- Overlay (Mobile only) -->
    <div x-show="open" x-transition.opacity class="fixed inset-0 bg-slate-800 bg-opacity-50 z-40 md:hidden"
        @click="open = false"></div>


</div>
