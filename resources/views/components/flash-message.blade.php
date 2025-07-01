@props(['message', 'type' => 'success'])

@if ($message)
  @php
    // Tailwind requires full class names to detect them during build
    $styles = [
      'success' => 'bg-green-100 border-green-500 text-green-900',
      'error'   => 'bg-red-100 border-red-500 text-red-900',
      'info'    => 'bg-blue-100 border-blue-500 text-blue-900',
      'warning' => 'bg-yellow-100 border-yellow-500 text-yellow-900',
    ];
    $classes = $styles[$type] ?? $styles['success'];
  @endphp

  <div x-data="{ show: true }" x-show="show" x-transition
       class="w-full rounded-xl border-t-4 px-4 py-3 mb-4 shadow-md {{ $classes }}"
       role="alert">
    <div class="flex justify-between items-center">
      <div>
        <p class="font-bold">{{ ucfirst($type) }}</p>
        <p class="text-sm">{{ $message }}</p>
      </div>
      <button x-on:click="show = false" type="button"
              class="font-bold">{{ __('×') }}</button>
    </div>
  </div>
@endif
