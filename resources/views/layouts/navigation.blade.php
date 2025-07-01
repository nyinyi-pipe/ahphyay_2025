<aside class="md:w-64 p-4 h-screen ">

    @php
        $currentRoute = request()->path();
    @endphp

    <nav class="space-y-1 text-sm font-medium ">
        <!-- Dashboard -->
        <a href="{{ url('admin/dashboard') }}"
            class="flex items-center gap-2 px-4 py-2 rounded-lg transition
  {{ $currentRoute == 'admin/dashboard' ? 'bg-custom-gray-200 text-gray-700 font-semibold' : 'text-gray-700 hover:bg-custom-gray-200 hover:text-black' }}">
            <iconify-icon icon="material-symbols:dashboard-outline-rounded" width="20"></iconify-icon>
            Dashboard
        </a> <br>

        <!-- Manage Products -->
        <a href="{{ url('admin/products') }}"
            class="flex items-center gap-2 px-4 py-2 rounded-lg transition
  {{ $currentRoute == 'admin/products' ? 'bg-custom-gray-200 text-gray-700 font-semibold' : 'text-gray-700 hover:bg-custom-gray-200 hover:text-black' }}">
            <iconify-icon icon="mdi:package-variant" width="20"></iconify-icon>
            Manage Products
        </a>

        <!-- Suppliers -->
        <a href="{{ url('admin/suppliers') }}"
            class="flex items-center gap-2 px-4 py-2 rounded-lg transition
  {{ $currentRoute == 'admin/suppliers' ? 'bg-custom-gray-200 text-gray-700 font-semibold' : 'text-gray-700 hover:bg-custom-gray-200 hover:text-black' }}">
            <iconify-icon icon="mdi:truck" width="20"></iconify-icon>
            Suppliers
        </a> <br>

        <!-- Blog Management -->
        <a href="{{ url('admin/blogs') }}"
            class="flex items-center gap-2 px-4 py-2 rounded-lg transition
  {{ $currentRoute == 'admin/blogs' ? 'bg-custom-gray-200 text-gray-700 font-semibold' : 'text-gray-700 hover:bg-custom-gray-200 hover:text-black' }}">
            <iconify-icon icon="mdi:post-outline" width="20"></iconify-icon>
            Blog Management
        </a>

        <!-- Reports -->
        <a href="{{ url('admin/reports') }}"
            class="flex items-center gap-2 px-4 py-2 rounded-lg transition
  {{ $currentRoute == 'admin/reports' ? 'bg-custom-gray-200 text-gray-700 font-semibold' : 'text-gray-700 hover:bg-custom-gray-200 hover:text-black' }}">
            <iconify-icon icon="mdi:chart-bar" width="20"></iconify-icon>
            Reports
        </a>

        <!-- Settings -->
        <a href="{{ url('admin/settings') }}"
            class="flex items-center gap-2 px-4 py-2 rounded-lg transition
  {{ $currentRoute == 'admin/settings' ? 'bg-custom-gray-200 text-gray-700 font-semibold' : 'text-gray-700 hover:bg-custom-gray-200 hover:text-black' }}">
            <iconify-icon icon="mdi:cog-outline" width="20"></iconify-icon>
            Settings
        </a>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}" class="px-4 py-2">
            @csrf
            <button type="submit"
                class="flex items-center gap-2 px-0.5 w-full text-left text-gray-700 hover:alert-text-red-600 transition">
                <iconify-icon icon="mdi:logout" width="20"></iconify-icon>
                {{ __('Log Out') }}
            </button>
        </form>
    </nav>
</aside>
