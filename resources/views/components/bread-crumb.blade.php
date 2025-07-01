@props(['crumbs', 'homeUrl'])

<nav class="w-full background-white p-4 rounded-xl" aria-label="Breadcrumb">
    <ol class="w-full flex items-center space-x-2">
      <!-- Home Link -->
      <li class="inline-flex items-center">
        <a href="{{ $homeUrl }}"
           class="inline-flex items-center text-gray-600 hover:text-blue-700">
          <iconify-icon icon="heroicons-outline:home" width="20" height="20"></iconify-icon>
          <span class="ml-1 text-sm font-medium">Home</span>
        </a>
      </li>
  
      @foreach ($crumbs as $crumb)
        <li class="inline-flex items-center">
          <svg class="w-4 h-4 text-gray-400 mx-1" fill="currentColor" viewBox="0 0 20 20">
            <path d="M6 4l8 6-8 6V4z" />
          </svg>
  
          @if (!empty($crumb['url']))
            <a href="{{ $crumb['url'] }}"
               class="ml-1 text-sm text-gray-800 hover:text-blue-700">
              {{ $crumb['label'] }}
            </a>
          @else
            <span class="ml-1 text-sm font-medium text-gray-600">
              {{ $crumb['label'] }}
            </span>
          @endif
        </li>
      @endforeach
    </ol>
  </nav>

